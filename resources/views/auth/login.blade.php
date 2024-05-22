<x-layout>
    <div class="bg-orange-500">
        <div class="grid grid-cols md:grid-cols-2 px-4 sm:px-24 md:px-4 lg:px-24 xl:px-40 py-16">
            <div class="bg-orange-200 shadow-lg rounded-l-xl hidden md:block">
                <h3 class="text-3xl font-extrabold mt-20 mx-14">Welcome Back</h3>
                <p class="text-gray-500 text-sm mt-2 mx-14">A platform where you can read at least one book chapter everyday</p>
                <img src="./images/register.png" alt="">
            </div>
            <div class="bg-white rounded-r-none md:rounded-r-xl md:pt-24">
                <h1 class="text-orange-400 text-xl font-extrabold mt-20 mx-14 tracking-wider"><span class="text-black text-5xl font-extrabold border-b-4 border-black">L</span>OGIN</h1>
                <p class="text-gray-400 text-sm mt-6 mx-14">Please complete to login to your account</p>
                <form class="mx-14 my-8" action="{{route('login')}}" method="POST">
                    @csrf
                    <div class="mt-4">
                        <x-input-label for="email">Email</x-input-label>
                        <x-input-text type="email" id="email" name="email" value="{{old('email')}}"/>
                        @error('email')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password">Password</x-input-label>
                        <x-input-text type="password" id="password" name="password"/>
                        @error('password')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-between items-center mt-6">
                        <x-form-button>Log In</x-form-button>
                        <a href="{{route('register')}}" class="text-orange-500 text-sm">Don't have an account?</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>