<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
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

    <!-- Script dipindahkan ke dalam body -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('DOM loaded');
        // Cek apakah ada pesan error
        const modal = document.getElementById('popup-modal');
        console.log('Modal element:', modal);

        if (modal) {
            // Tambahkan animasi masuk
            setTimeout(function() {
                modal.classList.add('animate-fadeIn');
            }, 100);

            // Auto close setelah 5 detik
            setTimeout(function() {
                closeModal();
            }, 5000);
        }

        // Cek apakah ada pesan sukses
        const successModal = document.getElementById('success-modal');
        console.log('Success Modal element:', successModal);

        if (successModal) {
            // Tambahkan animasi masuk
            setTimeout(function() {
                successModal.classList.add('animate-fadeIn');
            }, 100);

            // Auto close setelah 5 detik
            setTimeout(function() {
                closeSuccessModal();
            }, 5000);
        }
    });

        // Function untuk modal Add dengan animasi slide-in
    function openAddModal() {
        const modal = document.getElementById('addCategoryModal');
        modal.classList.remove('hidden');
        // Animasi slide-in dari kanan
        setTimeout(() => {
            modal.querySelector('.relative').classList.add('slide-in-right');
        }, 10);
    }

    function closeAddModal() {
        const modal = document.getElementById('addCategoryModal');
        const content = modal.querySelector('.relative');
        // Animasi slide-out ke kanan
        content.classList.remove('slide-in-right');
        content.classList.add('slide-out-right');
        setTimeout(() => {
            modal.classList.add('hidden');
            content.classList.remove('slide-out-right');
        }, 300);
    }

    function closeModal(event) {
        if (event) event.preventDefault();
        const modal = document.getElementById('popup-modal');
        if (modal) {
            // Tambahkan animasi keluar
            modal.classList.add('animate-fadeOut');
            setTimeout(function() {
                modal.classList.add('hidden');
            }, 300);
        }
    }

    function closeSuccessModal(event) {
        if (event) event.preventDefault();
        const successModal = document.getElementById('success-modal');
        if (successModal) {
            // Tambahkan animasi keluar
            successModal.classList.add('animate-fadeOut');
            setTimeout(function() {
                successModal.classList.add('hidden');
            }, 300);
        }
    }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
</body>
</html>
