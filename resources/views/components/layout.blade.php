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
    <div class="min-h-[60vh] w-full bg-white shadow-2xl absolute top-24 left-0 z-10 hidden md:hidden overflow-y-hidden" id="mobile-nav">
        <menu>
            <nav>
                <ul>
                    <li><x-mobile-nav-links href="{{url('/')}}">Home</x-mobile-nav-links></li>
                    <li><x-mobile-nav-links href="{{url('/about')}}">About</x-mobile-nav-links></li>
                    <li><x-mobile-nav-links href="{{url('/contact')}}">Contact</x-mobile-nav-links></li>
                </ul>
            </nav>
            <div>
                @guest
                    <li><x-mobile-nav-links href="{{url('/login')}}">Login</x-mobile-nav-links></li>
                    <li><x-mobile-nav-links href="{{url('/register')}}">Register</x-mobile-nav-links></li>
                @endguest
            </div>
            @auth
                <x-mobile-nav-links href="{{url('/dashboard')}}">Dashboard</x-mobile-nav-links>
            @endauth
        </menu>
    </div>
    {{$slot}}
</body>
</html>