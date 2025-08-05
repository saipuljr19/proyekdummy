<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>{{ config('app.name', 'Laravel Breeze CRUD') }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        /* Navbar Styling */
        header {
            background: linear-gradient(90deg, #2563eb, #1d4ed8);
            color: white;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
        }

        .navbar {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 16px 24px;
        }

        .navbar h1 {
            font-size: 1.5rem;
            font-weight: bold;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .navbar h1::before {
            content: "📦";
            font-size: 1.4rem;
        }

        .navbar nav a {
            color: white;
            margin-left: 20px;
            font-weight: 500;
            text-decoration: none;
            transition: 0.3s;
            padding-bottom: 2px;
        }

        .navbar nav a:hover {
            border-bottom: 2px solid white;
        }

        .logout-btn {
            background-color: #ef4444;
            padding: 6px 14px;
            border-radius: 6px;
            color: white;
            font-weight: 500;
            border: none;
            cursor: pointer;
            transition: 0.3s;
            margin-left: 20px;
        }

        .logout-btn:hover {
            background-color: #dc2626;
        }

        main {
            padding: 32px 16px;
            background-color: #f3f4f6;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <header>
        <div class="navbar">
            <h1>Product Saiful</h1>
            <nav>
                <a href="{{ route('dashboard') }}">Dashboard</a>
                <a href="{{ route('products.index') }}">Products</a>
                <form method="POST" action="{{ route('logout') }}" class="inline" style="display:inline;">
                    @csrf
                    <button type="submit" class="logout-btn">Logout</button>
                </form>
            </nav>
        </div>
    </header>

    <main>
        @yield('content')
    </main>
</body>
</html>