<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>@yield('title')</title>
</head>
<body class="bg-gray-900 text-white font-poppins">
    <nav class="bg-gray-800 p-4">
        <div class="container mx-auto">
            <h1 class="text-2xl">UTS PWEB</h1>
            <ul class="flex space-x-4">
                <li><a href="{{ route('contact') }}" class="text-blue-400 hover:text-blue-300">@</a></li>
                <li><a href="{{ route('login') }}" class="text-blue-400 hover:text-blue-300">ariel</a></li>
                <li><a href="{{ route('register') }}" class="text-blue-400 hover:text-blue-300">pradhana</a></li>
            </ul>
        </div>
    </nav>

    <div class="container mx-auto">
        @yield('content')
    </div>

    <footer class="bg-gray-800 p-4 text-center">
        <p class="text-gray-400">© 2024 UTS PWEB. All rights reserved.</p>
    </footer>
</body>
</html>
