<x-guest-layout>
    <div class="h-screen font-sans login bg-cover">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
              <div class="leading-loose">
    <x-authentication-card>
        <x-slot name="logo">
            <div class="shrink-0 flex items-center justify-center">
                <a href="{{ route('dashboard') }}">
                    {{-- <x-application-mark class="block h-9 w-auto" /> --}}
                    <img src="https://th.bing.com/th/id/OIG.Z4CSxsW1nZCUOoKTmcC3?w=270&h=270&c=6&r=0&o=5&pid=ImgGn"
                        class="block h-36 w-auto">
                </a>
            </div>
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

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
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ml-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>

</div>
</div>
</div>
</div>
<style>
.login{
/*
background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
*/
background: url('https://images.unsplash.com/photo-1514315153150-cd7d8d716178?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
background-repeat: no-repeat;
background-size: cover;
}
</style>
</x-guest-layout>
