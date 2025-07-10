<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Find Me A Job</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-black text-white pb-20">

    <div class="px-10">
        <nav class="flex justify-between items-center py-4 border-b border-white/10">
            <div>
                <a href="/">
                    <img src="{{ \Illuminate\Support\Facades\Vite::asset('resources/images/logo.png') }}" alt="logo"
                        class="h-10 w-auto inline-block align-middle rounded-2xl transition-all duration-200 hover:h-14">
                    <span class="ml-2 text-2xl font-extrabold tracking-tight align-middle">Find Me A Job</span>
                </a>
            </div>
            <div class="space-x-6 font-bold">
                <a href="#" class="transition-all duration-300 hover:text-blue-600">Jobs</a>
                <a href="#" class="transition-all duration-300 hover:text-blue-600">Careers</a>
                <a href="#" class="transition-all duration-300 hover:text-blue-600">Salaries</a>
                <a href="#" class="transition-all duration-300 hover:text-blue-600">Companies</a>

            </div>
            @auth
                <div class="space-x-6 flex font-bold">
                    <a href="/jobs/create">Post a job</a>
                    <form method="POST" action="/logout">
                        @csrf
                        @method('DELETE')
                        <button class="rounded ">Log Out</button>
                    </form>
                </div>

            @endauth
            @guest
                <div class="space-x-6 font-bold">
                    <a href="/login">Log In</a>
                    <a href="/register">Register</a>
                </div>
            @endguest

        </nav>

        <main class="mt-10 max-w-[986px] mx-auto">
            {{ $slot }}
        </main>

    </div>
</body>

</html>
