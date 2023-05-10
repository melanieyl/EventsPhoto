<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"
    integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <br>
    <div class="border-r-2 border-purple-700 rounded-lg shadow-lg mx-8 max-lg">
        <div class="px-4 py-2">
            <h2 class="text-lg font-semibold text-gray-800">{{ $Evento->invitacion->NombreI }}</h2>
            <p class="text-sm text-gray-600 mt-1">Cliente: {{ $Evento->invitacion->organizador->user->name }}</p>
            <p class="text-sm text-gray-600 mt-1">fecha: {{ $Evento->invitacion->fecha }}</p>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 border-r-5 border-purple-800 rounded-lg shadow-lg mx-8 max-lg">
        @livewire('evento.inteligencia-artificial')
        <form wire:submit.prevent="guardarPrivada" enctype="multipart/form-data">
            @csrf
            <input type="file" name="privada[]" id="privada" wire:model="privada">
            <button type="submit" class="px-2 py-1 bg-black text-teal-100" wire:click=''>Subir Imgenes Privada</button>
        </form>
    </div>
         
</div>
