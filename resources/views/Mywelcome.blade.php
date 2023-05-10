<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
    {{-- <title>{{ config('app.name', 'Melanie') }}</title> --}}
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @livewireStyles



</head>

<body class="font-sans antialiased">
    <div
        class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 selection:bg-red-500 selection:text-white">
        {{-- login y register --}}
        @if (Route::has('login'))
            <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                @else
                    <a href="{{ route('login') }}"
                        class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log
                        in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                    @endif
                @endauth
            </div>
        @endif

        <div class="max-w-7xl mx-auto p-6 lg:p-8">
            {{-- Logo --}}
            <div class="flex justify-start">

                <a href="{{ route('dashboard') }}">
                    {{-- <x-application-mark class="block h-9 w-auto" /> --}}

                    <img src="https://th.bing.com/th/id/OIG.Z4CSxsW1nZCUOoKTmcC3?w=270&h=270&c=6&r=0&o=5&pid=ImgGn"
                        class="block h-20 w-auto">
                </a>


            </div>
            {{-- Primera Tarjetas --}}
            <div
                class="flex-1 min-h-screen min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
                {{-- titulo Slogan y Texto --}}
                <div class="w-full md:w-1/2">
                    <div class="mb-10 md:mb-20 text-gray-600 font-light">
                        <h1 class="font-black uppercase text-3xl lg:text-5xl text-indigo-700 mb-10">
                            Instantes<br>Capturados
                        </h1>
                        <p>Capturando el presente para que lo disfrutes en el futuro.</p>
                    </div>
                    <div class="mb-20 md:mb-0">
                        <a href="{{ route('dashboard') }}" >
                            <div class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-blue-500 hover:text-blue-600"  >Ver
                                mas </div>
                        </a>
                    </div>
                </div>
                {{-- imagenes de presentacion --}}
                <div class="grid grid-cols-2 grid-rows-2 gap-4 ">
                    <div class="grid-item">
                        <img src="https://images.pexels.com/photos/13575545/pexels-photo-13575545.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="w-64 h-64">
                    </div>
                    <div class="grid-item">
                        <img src="https://images.pexels.com/photos/2613110/pexels-photo-2613110.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="w-64 h-64">
                    </div>
                    <div class="grid-item">
                        <img src="https://images.pexels.com/photos/1727415/pexels-photo-1727415.jpeg?auto=compress&cs=tinysrgb&w=400"
                            class="w-64 h-64">
                    </div>
                    <div class="grid-item">
                        <img src="https://images.unsplash.com/photo-1681988415084-cbb0e4751840?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=870&q=80"
                            class="w-64 h-64">
                    </div>
                </div>
            </div>
            <br>

            {{-- Segunda tarjeta --}}
            <div
                class="flex-1 min-h-screen/2 min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
                {{-- titulo Slogan y Texto --}}
                <div class="w-full ">
                    <div class="mb-10 md:mb-20 text-gray-600 font-light">
                        <h1 class="font-black uppercase text-3xl lg:text-5xl text-indigo-700 mb-10">
                            Encontraras A los Fotografos <br> mas Profesionales
                        </h1>
                        <p>Con varias paquetes y especialidades, ademas de un amplio poratfolio</p>
                    </div>
                    <div class="mb-20 md:mb-0 animate-bounce">
                        <a href="{{ route('ecommerce.estudiofotografico.ver') }}" >
                            <div class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-blue-500 hover:text-blue-600"  >
                                Ver fotografos
                             </div>
                        </a>
                    </div>
                </div>
            </div>
            <br>
            {{-- Tarjeta 3  --}}
            <div
            class="flex-1 min-h-screen/2 min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
            {{-- titulo Slogan y Texto --}}
            <div class="w-full ">
                <div class="mb-10 md:mb-20 text-gray-600 font-light">
                    <h1 class="font-black uppercase text-3xl lg:text-5xl text-indigo-700 mb-10">
                        Registra tu estudio Fotografico
                    </h1>
                    <p class="text-center">Que todo el mundo vea tu potencial </p>
                </div>
                <div class="mb-20 md:mb-0 animate-bounce">
                    <a href="{{ route('fotografo.create_estudiofotografico') }}" >
                        <div class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-blue-500 hover:text-blue-600"  >
                            Registar  </div>
                    </a>
                </div>
            </div>
        </div>

            {{-- pie de pagina  --}}
            <div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">

                <div class="text-center text-sm text-gray-500 sm:text-left">
                    <div class="flex items-center gap-4">
                        <a href="https://github.com/sponsors/taylorotwell"
                            class="group inline-flex items-center hover:text-gray-700 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5"
                                class="-mt-px mr-1 w-5 h-5 stroke-gray-400 group-hover:stroke-gray-600">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 8.25c0-2.485-2.099-4.5-4.688-4.5-1.935 0-3.597 1.126-4.312 2.733-.715-1.607-2.377-2.733-4.313-2.733C5.1 3.75 3 5.765 3 8.25c0 7.22 9 12 9 12s9-4.78 9-12z" />
                            </svg>
                            Fotografia
                        </a>
                    </div>
                </div>

                <div class="ml-4 text-center text-sm text-gray-500 sm:text-right sm:ml-0">
                    Guardando los mejores momentos
                </div>
            </div>
        </div>
    </div>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
    @livewireScripts
</body>


</html>
