<div class="m-30">
    <div class="max-w-md py-4 px-8 bg-white shadow-lg rounded-lg my-20">
        <div class="flex justify-center md:justify-end -mt-16">
          <img class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500" src="https://images.unsplash.com/photo-1499714608240-22fc6ad53fb2?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80">
        </div>
        <div>        
          
            <p class="mt-2 text-gray-600">Usted desea ingresar al evento:</p>
            <h2 class="text-gray-800 text-3xl font-semibold">{{$Evento->invitacion->NombreI}}</h2>
        </div>
        <div class="flex justify-end mt-4">
            <a href="{{ route('dashboard') }}">
                <x-secondary-button wire:click="" wire:loading.attr="disabled">
                    Cancelar
                </x-secondary-button>
            </a>
                <x-danger-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar"
                    class="disabled:opacity-25 bg-black">
                    Ingresar
                </x-danger-button>
        </div>
      </div>
</div>
