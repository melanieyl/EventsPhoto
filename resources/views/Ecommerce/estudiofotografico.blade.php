<x-app-layout>
    <div>
        <!-- component -->
        <div class="insta-clone ">
            <!--profile data-->
            <div class="bg-gray-100 h-auto px-48">
                <div class="flex md:flex-row-reverse flex-wrap">
                    {{-- informacion acerca de los fotografos  --}}
                    <div class="w-full md:w-3/4 p-4 ">
                        <div class="text-left pl-4 pt-3">
                            <span
                                class="header text-5xl text-sky-950 font-semibold mr-2">{{ $estudiofotografico->NombreEF }}</span>
                        </div>
                        <div class="text-left pl-4 pt-3">
                            <span class="text-lg font-medium text-gray-700 mr-2">Telefono:
                                {{ $estudiofotografico->telefono }}</span>
                        </div>
                        <div class="text-left pl-4 pt-3">
                            <span class="text-lg font-medium text-gray-700 mr-2">
                                {{ $estudiofotografico->DescripcionEF }}</span>
                        </div>

                        <div class="text-left pl-4 pt-3">

                            <p class="text-base font-bold text-lime-950 mr-2">Ubicacion:
                                {{ $estudiofotografico->UbicacionEF }}
                            </p>
                        </div>
                        <br>

                        {{-- <a href="{{ route('usuario.crear_invitacion', $estudiofotografico) }}">
                                <x-secondary-button wire:click="" wire:loading.attr="disabled">
                                    Invitar/Contratar
                                </x-secondary-button>
                            </a> --}}
                        @role('Usuario')
                            @livewire('invitacion.crear-invitacion-usuario', ['estudiofotografico' => $estudiofotografico])
                        @endrole


                    </div>

                    {{-- imagen principal del estudio Fotografico --}}
                    <div class="w-full md:w-1/4 p-4 text-center">
                        <div class="w-full relative md:w-3/4 text-center mt-8">
                            <button class="flex rounded-full" id="user-menu" aria-label="User menu"
                                aria-haspopup="true">
                                <img class="h-40 w-40 rounded-full"
                                    src="https://scontent-muc2-1.cdninstagram.com/v/t51.2885-19/s150x150/58468664_291773768419326_7460980271920185344_n.jpg?_nc_ht=scontent-muc2-1.cdninstagram.com&amp;_nc_ohc=16Or2MWYINEAX9vLBW0&amp;oh=ada3818c35cb64180cf431d820d9dabe&amp;oe=5EF26035"
                                    alt />
                            </button>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-3 ml-15 mt-16">
                    @foreach ($especialidades as $especialidad)
                        <div
                            class="  px-4 py-2 m-2 select-none p-10 rounded-md border-gray-300 border mb-3 hover:border-gray-500">
                            <div
                                class="relative shadow-xl mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                                <img class="object-cover w-full h-full"
                                    src="https://images.unsplash.com/photo-1502164980785-f8aa41d53611?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" />
                            </div>
                            <h1 class="text-center pt-16 text-base font-semibold text-gray-900">
                                {{ $especialidad->NombreE }}</h1>
                            <p class=""> Descricpion: {{ $especialidad->Descripcion }}</p>
                            <div class="desc text-gray-600">Cantidad de Fotos: {{ $especialidad->CantidadFotos }}</div>
                            <div class="desc text-gray-600">Precio: {{ $especialidad->PrecioE }}</div>

                            <br>
                        </div>
                    @endforeach
                </div>
                <!-- los iconos redondos buscarle utilidad-->


                <hr class="border-gray-500 mt-6" />
                <!--Especialidades-->
                {{-- <div class="flex flex-row mt-4 justify-center mr-16">
                    <div class="flex text-gray-700 text-center py-2 m-2 pr-5">

                        <div class="flex inline-flex ml-2 mt-1">
                            <h3 class="text-sm font-medium text-gray-700 mr-2">TAGGED</h3>
                        </div>
                    </div>

                    <div class="flex text-gray-700 text-center py-2 m-2 pr-5">

                        <div class="flex inline-flex ml-2 mt-1">
                            <h3 class="text-sm font-medium text-gray-700 mr-2">TAGGED</h3>
                        </div>
                    </div>
                </div> --}}

                <!--imagenes para el portafolio-->

                <div class="flex pt-4">
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                </div>

                <div class="flex pt-4">
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                </div>

                <div class="flex pt-4">
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                    <div class="flex-1 text-center px-4 py-2 m-2">
                        <img class="w-full"
                            src="https://images.unsplash.com/photo-1487530811176-3780de880c2d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" />
                    </div>
                </div>

            </div>
        </div>
    </div>
</x-app-layout>
