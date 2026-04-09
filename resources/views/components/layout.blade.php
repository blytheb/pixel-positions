<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pixel Positions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Saira+Stencil:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css','resources/js/app.js'])
</head>

<body class="font-display pb-10">
    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-black/10">
            <div>
                <a href='/'>
                    <img src="{{ Vite::asset('resources/images/logo.svg') }}" alt="" width=100px>
                </a>
            </div>

            <div class="space-x-6 font-bold">
                <a href="#">Jobs</a>
                <a href="#">Careers</a>
                <a href="#">Salaries</a>
                <a href="#">Companies</a>
            </div>
        @auth
            <div class='space-x-6'>
                <a href="/jobs/create">Post a Job</a>
                <a href="#">Log Out</a>

            </div>
        @endauth

        @guest
        <div class="space-x-6 font-bold">
            <a href="/register">Sign Up</a>
            <a href="/login">Log In</a>
        </div>
        @endguest
        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>
    </div>
</body>

</html>