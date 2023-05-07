<div class="m-5">

    <h2 class="font-bold text-3xl text-black bg-gradient-to-r from-purple-200 to-pink-100 p-4 rounded-lg">Eventos</h2>

    <div class="grid grid-cols-3 mt-3">
        @foreach ($eventos as $evento)
            <div class=" grid grid-cols-2 border-r-2 border-purple-700 rounded-lg shadow-lg mx-2 max-lg">
                <img src="https://images.unsplash.com/photo-1502164980785-f8aa41d53611?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=967&q=80" " alt="Imagen" class="object-cover h-full w-full rounded-t-lg">
                    <div class="px-4 py-2">
                        <h2 class="text-lg font-semibold text-gray-800">{{ $evento->invitacion->NombreI }}</h2>
                        <p class="text-sm text-gray-600 mt-1">Cliente: {{ $evento->invitacion->organizador->user->name }}</p>
                        <p class="text-sm text-gray-600 mt-1">fecha: {{ $evento->invitacion->fecha }}</p>
                    <br>
                    <a href="{{ route('fotografo.subir_fotografia_evento', $evento) }}">
                        <x-secondary-button wire:click="" wire:loading.attr="disabled">
                            Ver mas
                        </x-secondary-button>
                    </a>
                    </div>
            </div>
         @endforeach
    </div>
</div>
