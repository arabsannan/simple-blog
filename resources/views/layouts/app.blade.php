<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Blog</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="bg-orange-50 font-sans">

    <div class="min-h-screen flex flex-col">
        <!-- Header -->
        <header class="bg-black text-white p-4">
            <div class="container mx-auto flex justify-between items-center">
                <h1 class="text-xl font-semibold"><a href="{{ url('/') }}">Simple Blog</a></h1>
                <nav>
                    <ul class="flex space-x-6">
                        <li><a href="{{ url('/') }}" class="hover:text-gray-500">Home</a></li>
                        <li><a href="/about" class="hover:text-gray-500">About</a></li>
                        <li><a href="/contact" class="hover:text-gray-500">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow p-6">
            <div class="container mx-auto">
                @yield('content')
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white text-center py-4">
            <p>&copy; 2025 Your Website. All Rights Reserved.</p>
        </footer>
    </div>

</body>

</html>