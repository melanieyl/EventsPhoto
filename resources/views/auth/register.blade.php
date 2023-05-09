<x-guest-layout>
    <div class="h-screen font-sans login bg-cover">
        <div class="container mx-auto h-full flex flex-1 justify-center items-center">
            <div class="w-full max-w-lg">
                <div class="leading-loose">
                    <x-authentication-card>
                        <x-slot name="logo">
                            <div class="shrink-0 flex items-center justify-center">
                                <div class="shrink-0 flex items-center justify-center">
                                    <a href="{{ route('dashboard') }}">
                                        {{-- <x-application-mark class="block h-9 w-auto" /> --}}
                                        <img src="https://th.bing.com/th/id/OIG.Z4CSxsW1nZCUOoKTmcC3?w=270&h=270&c=6&r=0&o=5&pid=ImgGn"
                                            class="block h-36 w-auto">
                                    </a>
                                </div>
                            </div>
                        </x-slot>

                        <x-validation-errors class="mb-4" />

                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div>
                                <x-label for="name" value="{{ __('Name') }}" />
                                <x-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus autocomplete="name" />
                            </div>

                            <div class="mt-4">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password" value="{{ __('Password') }}" />
                                <x-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />
                            </div>

                            <div class="mt-4">
                                <x-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required autocomplete="new-password" />
                            </div>

                            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                <div class="mt-4">
                                    <x-label for="terms">
                                        <div class="flex items-center">
                                            <x-checkbox name="terms" id="terms" required />

                                            <div class="ml-2">
                                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                    'terms_of_service' =>
                                                        '<a target="_blank" href="' .
                                                        route('terms.show') .
                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                        __('Terms of Service') .
                                                        '</a>',
                                                    'privacy_policy' =>
                                                        '<a target="_blank" href="' .
                                                        route('policy.show') .
                                                        '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                        __('Privacy Policy') .
                                                        '</a>',
                                                ]) !!}
                                            </div>
                                        </div>
                                    </x-label>
                                </div>
                            @endif

                            <div class="flex items-center justify-end mt-4">
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                    href="{{ route('login') }}">
                                    {{ __('Already registered?') }}
                                </a>

                                <x-button class="ml-4">
                                    {{ __('Register') }}
                                </x-button>
                            </div>
                        </form>
                    </x-authentication-card>

                </div>
            </div>
            <!-- component -->

            <div class="flex flex-col justify-center items-center h-[100vh]">
                <div class=" bg-sky-700 !z-5 relative flex-col rounded-[20px] max-w-[300px]  bg-clip-border shadow-3xl shadow-shadow-500 flex w-full !p-4 3xl:p-![18px]  ">

                    <div class="relative flex flex-row justify-between">
                        <div class="flex items-center">
                            <div
                                class="flex h-9 w-9 items-center justify-center rounded-full bg-indigo-100 dark:bg-indigo-100 dark:bg-white/5">
                                <span class="material-symbols-rounded h-6 w-6 text-brand-500 dark:text-white">
                                    check_circle
                                </span>
                            </div>
                            <h4 class="ml-4 text-xl font-bold text-navy-700 dark:text-white">
                                Quiere registarse como?
                            </h4>
                        </div>

                    </div>

                    <div class="h-full w-full ">
                        <div class="mt-5 flex items-center justify-between p-2">
                            <div class="flex items-center justify-center gap-2">
                                <input type="checkbox"  wire:model="roleuser" value="true"
                                    class="defaultCheckbox relative flex h-[20px] min-h-[20px] w-[20px] min-w-[20px] appearance-none items-center 
                            justify-center rounded-md border border-x-teal-700 text-white/0 outline-none transition duration-[0.2s]
                            checked:border-none checked:text-teal-300 hover:cursor-pointer dark:border-white/10 checked:bg-brand-500 dark:checked:bg-brand-400"
                                />
                                <p class="text-base font-bold text-navy-700 dark:text-white">
                                    Fotografo
                                </p>
                            </div>
                        </div>
                        <div class="mt-2 flex items-center justify-between p-2">
                            <div class="flex items-center justify-center gap-2">
                                <input type="checkbox"wire:model="roleuser" value="false"
                                    class="defaultCheckbox relative flex h-[20px] min-h-[20px] w-[20px] min-w-[20px] appearance-none items-center 
                            justify-center rounded-md border border-gray-300 text-white/0 outline-none transition duration-[0.2s]
                            checked:border-none checked:text-teal-300 hover:cursor-pointer dark:border-white/10 checked:bg-brand-500 dark:checked:bg-brand-400"
                            />
                                <p class="text-base font-bold text-navy-700 dark:text-white">
                                    Usuario
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
    <style>
        .login {
            /*
background: url('https://tailwindadmin.netlify.app/dist/images/login-new.jpeg');
*/
            background: url('https://images.unsplash.com/photo-1552860512-13148a37d7a2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80');
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</x-guest-layout>
