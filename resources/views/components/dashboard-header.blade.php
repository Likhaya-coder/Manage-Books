<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/profile.js'])
</head>
<body class="min-h-screen overflow-x-hidden">
    <header class="py-2 min-h-20">
        <menu class="flex justify-between items-center mx-14">
            <a href="{{url('/')}}"><img width="100px" src="./images/book_hive.png" alt=""></a>
            <!-- Profile dropdown -->
            <div class="relative ml-3">
                <div id="user-menu-button" class="flex items-center">
                    <button type="button" class="relative flex max-w-xs items-center shadow-sm shadow-black rounded-full bg-white text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-expanded="false" aria-haspopup="true">
                      <span class="absolute -inset-1.5"></span>
                      <span class="sr-only">Open user menu</span>
                      <img src="{{ $src }}" {{ $attributes->merge(['class' => 'h-8 w-8 rounded-full']) }} />
                    </button>
                  {{-- <h3 class="text-gray-800 ml-2 font-medium">{{$user->firstname}}</h3> --}}
                  <h3 class="text-gray-800 ml-2 font-medium">{{$username}}</h3>
                </div>
                <div class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-md bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none hidden" id="active" role="menu" aria-orientation="vertical" aria-labelledby="user-menu-button" tabindex="-1">
                  <!-- Active: "bg-gray-100", Not Active: "" -->
                  <a href="{{url('user-profile')}}" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-0">Your Profile</a>
                  <form action="{{route('logout')}}" method="POST">
                      @csrf
                      <button type="submit" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" id="user-menu-item-1">Sign out</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </menu>
    </header>
    <div class="bg-gray-100">
      {{$slot}}
    </div>
</body>
</html>