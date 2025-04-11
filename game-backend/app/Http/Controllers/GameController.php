<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;


class GameController extends Controller
{
    public function game(Request $request)
    {
        $perPage = $request->get('per_page', 10); // Default 10 item per page
        $search = $request->get('search', ''); // Search Parameter
        $sortBy = $request->get('sort_by', 'name'); // Default sort by name
        $sortDir = $request->get('sort_dir', 'asc'); // Default ascending

        $query = Game::with(['user', 'categories']); // Eager load developer and categories

        // Filter by user role developer
        if (Auth::user()->role === 'developer') {
            // If developer, show only their own games
            $query->where('user_id', Auth::user()->id);
        }
        // If admin, show all games (including developer's games)

        // Filter by category
        if ($request->has('category_id') && !empty($request->category_id)) {
            $query->whereHas('categories', function($q) use ($request) {
                $q->where('categories.id', $request->category_id);
            });
        }

        // search by name, description, and game version
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                  ->orWhere('description', 'like', "%{$search}%")
                  ->orWhere('game_version', 'like', "%{$search}%");
            });
        }

        // Sorting data
        $query->orderBy($sortBy, $sortDir);

        // Pagination dengan parameter dinamis
        $games = $query->paginate($perPage)->withQueryString();
        $categories = Category::all();

        return view('game.game', compact('games', 'categories', 'search', 'sortBy', 'sortDir', 'perPage'));
    }
}
