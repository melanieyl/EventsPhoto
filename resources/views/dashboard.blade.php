<x-app-layout>

    <div class="min-w-screen min-h-screen bg-blue-100 flex items-center p-5 lg:p-16 overflow-hidden relative">
        <div
            class="flex-1 min-h-screen min-w-full rounded-3xl bg-white shadow-xl p-10 lg:p-20 text-gray-800 relative md:flex items-center text-center md:text-left">
            {{-- titulo Slogan y Texto --}}
            <div class="w-full md:w-1/2">
                <div class="mb-10 md:mb-20 text-gray-600 font-light">
                    <h1 class="font-black uppercase text-3xl lg:text-5xl text-indigo-700 mb-10">Instantes<br>Capturados
                    </h1>
                    <p>Capturando el presente para que lo disfrutes en el futuro.</p>
                </div>
                <div class="mb-20 md:mb-0">
                    <button
                        class="text-lg font-light outline-none focus:outline-none transform transition-all hover:scale-110 text-blue-500 hover:text-blue-600">Ver
                        mas</button>
                </div>
            </div>
            {{-- imagenes de presentacion --}}
            <div class="grid grid-cols-2 grid-rows-2 gap-4">
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
    </div>
    <!-- component -->
    @livewire('ecommerce.show-suscripciones')

</x-app-layout>
