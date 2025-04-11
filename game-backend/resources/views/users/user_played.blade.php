<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Played</title>
    @vite('resources/css/app.css')
    <style>
        .page-title {
            color: #4f46e5;
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 2rem;
            letter-spacing: -0.025em;
        }

        /* Add these animation styles */
        .animate-fadeIn {
            animation: fadeIn 0.3s ease-in-out;
        }

        .animate-fadeOut {
            animation: fadeOut 0.3s ease-in-out;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }

        @keyframes fadeOut {
            from { opacity: 1; transform: translateY(0); }
            to { opacity: 0; transform: translateY(20px); }
        }

        /* Add slide animations for the user modal */
        .slide-in-right {
            animation: slideInRight 0.3s forwards;
        }

        .slide-out-right {
            animation: slideOutRight 0.3s forwards;
        }

        @keyframes slideInRight {
            from { transform: translateX(100%); }
            to { transform: translateX(0); }
        }

        @keyframes slideOutRight {
            from { transform: translateX(0); }
            to { transform: translateX(100%); }
        }
    </style>
</head>
<body class="bg-gray-100">
    @extends('components.sidebar')
    @section('content')
    @endsection
</body>
</html>
