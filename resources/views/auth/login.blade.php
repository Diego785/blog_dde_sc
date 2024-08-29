{{-- <x-guest-layout>
    <x-authentication-card>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @session('status')
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ $value }}
            </div>
        @endsession

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout> --}}

<!-- component -->
<!--
    =======================================================================
    Name    :   Simple Sign In
    Author  :   Surjith S M
    Twitter :   @surjithctly

    Get more components here ? https://web3templates.com/components

    Copyright © 2021
    =======================================================================
 -->
<x-guest-layout>


    <div class="flex items-center min-h-screen"
        style=" background: url('{{ asset('img/bg.png') }}'), -webkit-linear-gradient(bottom, #0250c5, #152e4d);">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10">
                <div class="text-center">
                    <img class="mx-auto w-1/3" src="{{ asset('img/logo-sder.png') }}" alt="Logo">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Inicio de Sesión</h1>
                    <p class="text-gray-500 dark:text-gray-400">Ingresa tus credenciales para ver las denuncias</p>
                </div>

                <div class="m-7">


                    <x-validation-errors class="mb-4" />

                    @session('status')
                        <div class="mb-4 font-medium text-sm text-green-600">
                            {{ $value }}
                        </div>
                    @endsession
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Corre
                                Electrónico</label>
                            <input type="email" name="email" id="email" placeholder="diego@gmail.com"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label for="password"
                                    class="text-sm text-gray-600 dark:text-gray-400">Contraseña</label>


                            </div>
                            <input type="password" name="password" id="password" placeholder="12345678"
                                class="w-full px-3 py-2 placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                        </div>
                        <div class="mb-6">

                            <button type="submit"
                                class="w-full px-3 py-4 text-white bg-[#007bff] hover:bg-blue-500 rounded-md focus:bg-blue-600 focus:outline-none focus:border">Iniciar
                                Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</x-guest-layout>
