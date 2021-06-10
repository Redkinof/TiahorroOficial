<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
              <img src="imgs/logo.png" alt="">
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="text-black">
                <x-label for="name" :value="__('Name')" class="font-bold text-lg"/>

                <x-input id="name" class="block mt-1 w-full bg-gray-300" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4 text-black ">
                <x-label for="email" :value="__('Email')" class="font-bold text-lg"/>

                <x-input id="email" class="block mt-1 w-full bg-gray-300" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4 text-black ">
                <x-label for="password" :value="__('Password')" class="font-bold text-lg"/>

                <x-input id="password" class="block mt-1 w-full bg-gray-300"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 text-black">
                <x-label for="password_confirmation" :value="__('Confirm Password')" class="font-bold text-lg"/>

                <x-input id="password_confirmation" class="block mt-1 w-full bg-gray-300"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-3 transition duration-500 ease-in-out bg-green-600 hover:bg-green-900 ">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
