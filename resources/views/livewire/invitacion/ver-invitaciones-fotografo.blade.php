<div>

    <div class="px-10 pt-6">
        <div class="text-lg font-bold text-gray-900">Invitaciones Aceptadas</div>
        <div class="grid grid-cols-2 ml-15 mt-16">
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
                    <div class="desc text-gray-600">Cantidad de Fotos: {{ $invitacion->DuracionI }}</div>
                    <div class="desc text-gray-600">estudio fotografico : {{ $invitacion->UbicacionI }}</div>

                </div>
            @endforeach
        </div>
        <div class="text-lg font-bold text-gray-900">Invitaciones En espera</div>
        <div class="grid grid-cols-2 ml-15 mt-16">
            @foreach ($invitacionesEspera as $invitacion)
                <div 
                    class=" px-4 py-2 m-2 select-none p-10 rounded-md border-gray-300 border mb-3 hover:border-gray-500">
                    <div
                        class="relative shadow-xl mx-auto h-24 w-24 -my-12 border-white rounded-full overflow-hidden border-4">
                        <img class="object-cover w-full h-full"
                            src="https://images.unsplash.com/photo-1502164980785-f8aa41d53611?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" />
                    </div>
                    <h1 class="text-center pt-16 text-base font-semibold text-gray-900">
                        {{ $invitacion->NombreI }}</h1>
                    <p class=""> Descricpion: {{ $invitacion->DescripcionI }}</p>
                    <div class="desc text-gray-600">Cantidad de Fotos: {{ $invitacion->DuracionI }}</div>
                    <div class="desc text-gray-600">Precio: {{ $invitacion->UbicacionI }}</div>
                    <div class="desc text-gray-600">Precio: {{ $invitacion->estudio_fotografico_id }}</div>
                    <br>
                    <div class="right m-auto mr-0">
                        <a class="font-bold text-white rounded cursor-pointer  bg-black hover:bg-indigo-500 py-2 px-4"
                            wire:click="update({{ $invitacion->id }})"> aceptar
                        </a>
                    </div>

                </div>
            @endforeach
        </div>
    </div>
</div>
