<x-guest-layout>
    {{-- @include('layouts.navigation') --}}

    <x-auth-session-status class="mb-4" :status="session('status')" />

    <x-form-layout  :method="'POST'" :action="route('login')">
        @csrf
        <div>
            <x-text-input :title="'Username'" :id="'username'" :name="'username'" class="block mt-1 w-full" :value="old('username')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('username')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
           <x-password-input :id="'password'" :name="'password'" :title="__('Password')"></x-password-input>
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('register') }}">
                    {{ __('Belum punya akun? register') }}
                </a>

            <x-primary-button class="ms-3">
                {{ __('Log in') }}
            </x-primary-button>
        </div>
    </x-form-layout>
</x-guest-layout>
