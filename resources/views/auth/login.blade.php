<x-guest-layout>
    <div class="mt-4">
        <img src="{{url('/images/WSJ_Horizontal.png')}}" class="sm:w-2/3 w-full mx-auto py-8 mb-8"/>
    </div>

    <div class="mb-4">
        <h2 class="text-3xl uppercase text-white tracking-wider font-sharpblack">Sign In</h2>
    </div>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email Address -->
        <div class="flex flex-col items-start sm:flex-row sm:items-center mt-4 mr-2">
            <x-input-label for="email" :value="__('Email')" class="text-white pr-4 w-1/4"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="email" />
        </div>

        <!-- Password -->
        <div class="flex flex-col items-start sm:flex-row sm:items-center mt-4 mr-2">
            <x-input-label for="password" :value="__('Password')" class="text-white pr-4 w-1/4"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            placeholder="Password"
                            name="password"
                            required autocomplete="password" />
        </div>

        <div class="flex items-center mt-4 mr-2">
             <x-input-error :messages="$errors->all()" class="mt-2" />
        </div>

        {{-- Sign In Button --}}
        <div class="flex items-center justify-center mt-4 mb-4">
            <x-primary-button class="bg-white text-black font-sharpblack">
                {{ __('Sign In') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
