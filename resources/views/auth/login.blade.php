@section('title','Tiahorro|Login')
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <img src="imgs/logo.png" alt="">
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mt-3 text-black">
                <x-label for="email" :value="__('Email')" class="font-bold text-lg" />

                <x-input id="email" class="block mt-2 w-full bg-gray-300"
                                    placeholder="Escribe aquí" 
                                    type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-5 text-black">
                <x-label for="password" :value="__('Password')" class="font-bold text-lg"/>

                <x-input id="password" class="block mt-2 w-full bg-gray-300"
                                type="password"
                                name="password"
                                placeholder="Escribe aquí"
                                required autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded border-green-900 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                    <span class="ml-2 text-sm text-black-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 mr-28" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 " href="{{ route('register') }}">Register
                    </a>
                    
                @endif

                <x-button class="ml-3 transition duration-500 ease-in-out bg-green-600 hover:bg-green-900 ">
                    {{ __('Login') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>




