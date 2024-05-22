<x-layout>
    <div class="bg-orange-500">
        <div class="grid grid-cols md:grid-cols-2 px-4 sm:px-24 md:px-4 lg:px-24 xl:px-40 py-16">
            <div class="bg-orange-200 shadow-lg rounded-l-xl hidden md:block">
                <h3 class="text-3xl font-extrabold mt-20 mx-14">Welcome to BOOKHIVE</h3>
                <p class="text-gray-500 text-sm mt-2 mx-14">A platform where you can read at least one book chapter everyday</p>
                <img src="./images/register.png" alt="">
            </div>
            <div class="bg-white rounded-r-none md:rounded-r-xl">
                <h1 class="text-orange-400 text-xl font-extrabold mt-20 mx-14 tracking-wider"><span class="text-black text-5xl font-extrabold border-b-4 border-black">R</span>EGISTER</h1>
                <p class="text-gray-400 text-sm mt-6 mx-14">Please complete to create your account</p>
                <form class="mx-14 my-8" action="{{route('register')}}" method="POST">
                    @csrf
                    <div class="flex">
                        <div class="mr-2">
                            <x-input-label for="firstname">Firstname</x-input-label>
                            <x-input-text type="text" id="firstname" name="firstname" value="{{old('firstname')}}"/>
                            @error('firstname')
                                <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="ml-2">
                            <x-input-label for="lastname">Lastname</x-input-label>
                            <x-input-text type="text" id="lastname" name="lastname" value="{{old('lastname')}}"/>
                            @error('lastname')
                                <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
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
                    <div class="mt-4">
                        <x-input-label for="confirmation">Confirm Password</x-input-label>
                        <x-input-text type="password" id="confirmation" name="password_confirmation"/>
                        @error('password_confirmation')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex mt-6">
                        <x-input-text type="checkbox" id="terms" name="terms"/>
                        <p class="ml-4 mt-1 text-xs">I agree to all statements included in<a href="#" class="text-orange-600"> teams of service</a></p>
                    </div>
                    @error('terms')
                            <div class="text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    <div class="flex justify-between items-center mt-6">
                        <x-form-button>Sign Up</x-form-button>
                        <a href="{{route('login')}}" class="text-orange-500 text-sm">I am already a member</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>