<x-layout1>
    <!-- Session Status -->
    <div class=" relative min-h-screen flex flex-col sm:justify-center items-center sm:pt-0 bg-no-repeat bg-cover bg-center top-0 rounded-lg " style="background-image: url('{{ Vite::asset('resources/images/beach.jpg') }}');" >

    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class=" absolute top-0 left-0 right-0 bottom-0 min-h-screen flex flex-col z-5 sm:justify-center items-center sm:pt-0 bg-no-repeat bg-cover bg-center rounded-lg " style="background-image: url('{{ Vite::asset('resources/images/hut.jpg') }}');" >
    <div class=" w-full sm:max-w-md mt-6 px-6 py-4 glass shadow-xl overflow-hidden  sm:rounded-lg">
        <form method="POST" action="{{ route('login') }}" class=" z-3 " >
            @csrf
            <!-- Email Address -->
            <div>
                <x-input-label for="email" class=" font-audiowide " :value="__('Email')" />
                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" class=" font-audiowide " :value="__('Password')" />
                <x-text-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="current-password" />
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <!-- Remember Me -->
            <div class="block mt-4">
                <label for="remember_me" class="inline-flex items-center">
                    <input id="remember_me" type="checkbox" class="rounded-sm dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-xs focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                    <span class="ms-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-hidden focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
                <x-primary-button class="ms-3">
                    {{ __('Log in') }}
                </x-primary-button>
            </div>
        </form>
    </div>
</div>
</div>
</x-layout1>
