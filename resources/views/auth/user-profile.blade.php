<x-dashboard-header username="{{$user->firstname}}" src="{{'/storage/'.$user->avatar}}">
    <h1 class="xl:max-w-[60%] lg:max-w-[70%] md:max-w-[100%] sm:max-w-[90%] max-w-[100%] grid md:grid-cols-12 gap-4 mx-auto py-6 text-2xl font-bold">Profile</h1>
    <div class="xl:max-w-[60%] lg:max-w-[70%] md:max-w-[100%] sm:max-w-[90%] max-w-[100%] min-h-[100vh] grid md:grid-cols-12 gap-4 mx-auto">
        <div class="col-span-4">
            <form action="{{route('avatar')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <x-card title="{{$user->firstname}}" 
                        description="{{$user->email}}" 
                        changeImage="Change Image"
                        src="{{'/storage/'.$user->avatar}}">
                        <x-input-file id="image" type="file" name="avatar"/>
                </x-card>
            </form>
        </div>
        <div class="bg-white col-span-8 border rounded-xl p-4">
            <div class="mb-2 border rounded-xl p-8">
                <p class="text-xl" class="">Profile</p>
                <p class="text-sm text-gray-400 py-2">Update User Information</p>
                <form action="{{route('user-profile', $user->id)}}" method="POST" class="p-4 border border-gray-200 rounded-lg">
                    @csrf
                    @method('patch')
                    <div class="flex">
                        <div class="mr-2">
                            <x-input-label for="firstname">Firstname</x-input-label>
                            <x-input-text type="text" id="firstname" name="firstname" value="{{ $user->firstname }}"/>
                            @error('firstname')
                                <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="ml-2">
                            <x-input-label for="lastname">Lastname</x-input-label>
                            <x-input-text type="text" id="lastname" name="lastname" value="{{ $user->lastname }}"/>
                            @error('lastname')
                                <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="mt-4 mb-2">
                        <x-input-label for="email">Email</x-input-label>
                        <x-input-text type="email" id="email" name="email" value="{{ $user->email }}"/>
                        @error('email')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <x-form-button>Save</x-form-button>
                </form>
            </div>

            <div class="mt-2 border rounded-xl p-8">
                <div class="text-center">
                    @if(session('success'))
                        <div class="alert alert-danger text-xs text-green-600 border p-4 bg-green-200">{{ session('success') }}</div>
                    @endif
                </div>
                <div class="text-center">
                    @if(session('error'))
                        <div class="alert alert-danger text-xs text-red-600 border p-4 bg-red-200">{{ session('error') }}</div>
                    @endif
                </div>
                <p class="text-xl" class="">Password</p>
                <p class="text-sm text-gray-400 py-2">Update Password Information</p>
                <form action="{{route('user-password', $user->id)}}" method="POST" class="p-4 border border-gray-200 rounded-lg">
                    @csrf
                    @method('patch')
                    <div class="mt-4">
                        <x-input-label for="current-password">Current Password</x-input-label>
                        <x-input-text type="password" id="current-password" name="current_password"/>
                        @error('current-pasword')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4">
                        <x-input-label for="password">New Password</x-input-label>
                        <x-input-text type="password" id="password" name="password"/>
                        @error('password')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mt-4 mb-2">
                        <x-input-label for="confirmation">Confirm New Password</x-input-label>
                        <x-input-text type="password" id="confirmation" name="password_confirmation"/>
                        @error('password_confirmation')
                            <div class="alert alert-danger text-xs text-red-600">{{ $message }}</div>
                        @enderror
                    </div>
                    <x-form-button>Save</x-form-button>
                </form>
            </div>
        </div>
    </div>
</x-dashboard-header>