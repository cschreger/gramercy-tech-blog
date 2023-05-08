<x-guest-layout>
    <div class="mt-4">
        <img src="{{url('/images/WSJ_Horizontal.png')}}" class="sm:w-2/3 w-full mx-auto py-8 mb-8"/>
    </div>

    <div class="mb-4">
        <h2 class="text-3xl uppercase text-white tracking-wider font-sharpblack">New Account</h2>
    </div>
    <form method="POST" action="{{ route('register') }}" class="font-sharpmedium">
        @csrf

        <!-- First Name -->
        <div class="flex flex-col items-start sm:flex-row sm:items-center mr-2">
            <x-input-label for="first_name" :value="__('First Name')" class="text-white pr-4 w-1/3"/>
            <x-text-input id="first_name" class="block mt-1 w-full" type="text" name="first_name" :value="old('first_name')" placeholder="First Name" required autofocus autocomplete="first-name" />
        </div>

        <!-- Last Name -->
        <div class="flex flex-col items-start sm:flex-row sm:items-center mt-4 mr-2">
            <x-input-label for="last_name" :value="__('Last Name')" class="text-white pr-4 w-1/3"/>
            <x-text-input id="last_name" class="block mt-1 w-full" type="text" name="last_name" :value="old('last_name')" placeholder="Last Name" required autofocus autocomplete="last-name" />
        </div>

        <!-- Email Address -->
        <div class="flex flex-col items-start sm:flex-row sm:items-center mt-4 mr-2">
            <x-input-label for="email" :value="__('Email')" class="text-white pr-4 w-1/3"/>
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" required autocomplete="email" />
        </div>

        <!-- Password -->
        <div class="flex flex-col items-start sm:flex-row sm:items-center mt-4 mr-2">
            <x-input-label for="password" :value="__('Password')" class="text-white pr-4 w-1/3"/>

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            placeholder="Password"
                            name="password"
                            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="flex flex-col items-start sm:flex-row sm:items-center mt-4 mr-2">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-white pr-4 sm:w-1/3 w-2/3"/>

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            placeholder="Confirm Password"
                            name="password_confirmation" required autocomplete="new-password" />
        </div>

        <div class="flex items-center mt-4 mr-2">
             <x-input-error :messages="$errors->all()" class="mt-2" />
        </div>

        <div class="flex items-center justify-center mt-2 mb-4">
            <x-primary-button class="bg-white text-black font-sharpblack">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
