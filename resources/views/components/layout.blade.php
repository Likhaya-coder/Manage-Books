<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="min-h-screen">
    <header class="max-w-xl md:max-w-2xl lg:max-w-4xl xl:max-w-6xl mx-auto py-2 min-h-20">
        <menu class="flex mx-10 md:mx-0 justify-between lg:justify-around items-center">
            <a href="{{url('/')}}"><img width="100px" src="./images/book_hive.png" alt=""></a>
            <nav>
                <ul class="hidden md:flex">
                    <li><x-nav-links href="{{url('/')}}" active="{{request()->is('/')}}">Home</x-nav-links></li>
                    <li><x-nav-links href="{{url('/about')}}" active="{{request()->is('about')}}">About</x-nav-links></li>
                    <li><x-nav-links href="{{url('/contact')}}" active="{{request()->is('contact')}}">Contact</x-nav-links></li>
                </ul>
            </nav>
            <div class="hidden md:flex">
                @guest
                    <x-nav-links href="{{url('/login')}}" active="{{request()->is('login')}}">Login</x-nav-links>
                    <x-nav-links href="{{url('/register')}}" active="{{request()->is('register')}}">Register</x-nav-links>
                @endguest
            </div>
            @auth
                <x-nav-links href="{{url('/dashboard')}}">Dashboard</x-nav-links>
            @endauth
            <button class="flex flex-col justify-center items-center w-8 h-8 space-y-1 md:hidden" id="hurmburger">
                <div class="w-full h-1 bg-black"></div>
                <div class="w-full h-1 bg-black"></div>
                <div class="w-full h-1 bg-black"></div>
            </button>
        </menu>
    </header>
    <div class="min-h-screen w-full bg-gray-100 absolute top-20 left-0 z-10 hidden md:hidden" id="mobile-nav">
        <menu class="ml-10">
            <nav>
                <ul class="my-14">
                    <li><x-nav-links href="{{url('/')}}" class="mb-2 text-2xl font-bold">Home</x-nav-links></li>
                    <li><x-nav-links href="{{url('/about')}}" class="my-2 text-2xl font-bold">About</x-nav-links></li>
                    <li><x-nav-links href="{{url('/contact')}}" class="my-2 text-2xl font-bold">Contact</x-nav-links></li>
                </ul>
            </nav>
            <div >
                @guest
                    <x-nav-links href="{{url('/login')}}" class="mb-2 text-2xl font-bold">Login</x-nav-links>
                    <x-nav-links href="{{url('/register')}}" class="mb-2 text-2xl font-bold">Register</x-nav-links>
                @endguest
            </div>
            @auth
                <x-nav-links href="{{url('/dashboard')}}">Dashboard</x-nav-links>
            @endauth
        </menu>
    </div>
    {{$slot}}
</body>
</html>