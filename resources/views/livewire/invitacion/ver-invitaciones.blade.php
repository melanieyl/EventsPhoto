<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}
    {{-- <p>{{ $invitaciones }}</p>
    <br>
    <p>{{ $invitacionesAceptadas }}</p> --}}
    <div class="m-10">
        <p class="text-2xl truncate underline decoration-double  tracking-wide animate-bounce ">Invitaciones Aceptadas
        </p>
        <div class="grid grid-cols-2 ml-15 mt-10">
            @foreach ($invitacionesAceptadas as $invitacion)
                <div
                    class="  px-4 py-2 m-2 select-none p-10 rounded-md border-gray-300 border mb-3 hover:border-gray-500">
                    <div
                        class="relative shadow-xl mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                        <img class="object-cover w-full h-full"
                            src="https://images.unsplash.com/photo-1502164980785-f8aa41d53611?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" />
                    </div>
                    <h1 class="text-center pt-16 text-base font-semibold text-gray-900">
                        {{ $invitacion->NombreI }}</h1>
                    <p class=""> Descricpion: {{ $invitacion->DescripcionI }}</p>
                    <div class="desc text-gray-600">Duracion: {{ $invitacion->DuracionI }}</div>
                    <div class="desc text-gray-600">Ubicacion; {{ $invitacion->UbicacionI }}</div>
                    <div class="desc text-gray-600">Estudio fotografico:
                        {{ $invitacion->estudio_fotografico->NombreEF }}</div>
                    <div class="desc text-gray-600">Fecha: {{ $invitacion->fecha }}</div>


                    <x-danger-button wire:click="pagar({{$invitacion->id}})"  wire:loading.attr="disabled" wire:target="pagar"
                        class="disabled:opacity-25 bg-black">
                        Pagar
                    </x-danger-button>

                    

                </div>
            @endforeach
        </div>
        <br>

        <p class="text-2xl truncate underline decoration-double  tracking-wide animate-bounce">Invitaciones en Espera
        </p>

        <div class="grid grid-cols-2 ml-15 mt-10">
            @foreach ($invitacionesEspera as $invitacion)
                <div
                    class="px-4 py-2 m-2 select-none p-2 rounded-md border-purple-200 border mb-3 hover:border-x-purple-800">
                    <div
                        class="relative shadow-xl mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                        <img class="object-cover w-full h-full"
                            src="https://images.unsplash.com/photo-1502164980785-f8aa41d53611?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" />
                    </div>
                    <h1 class="text-center pt-16 text-base font-semibold text-gray-900">
                        {{ $invitacion->NombreI }}</h1>
                    <p class=""> Descricpion: {{ $invitacion->DescripcionI }}</p>
                    <div class="desc text-gray-600">Duracion: {{ $invitacion->DuracionI }}</div>
                    <div class="desc text-gray-600">Ubicacion; {{ $invitacion->UbicacionI }}</div>
                    <div class="desc text-gray-600">Estudio fotografico:
                        {{ $invitacion->estudio_fotografico->NombreEF }}</div>
                    <div class="desc text-gray-600">Fecha: {{ $invitacion->fecha }}</div>

                    


                </div>
            @endforeach
        </div>
    </div>
</div>
