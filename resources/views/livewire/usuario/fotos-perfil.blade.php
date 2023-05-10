<div>

    @if ($imagen1 ==null || $imagen2==null)
    <input type="file" name="imagen" id="imagen" wire:model="imagen">
    @endif
   

    @if ($imagen != null)
        <x-secondary-button wire:click="guardar" wire:loading.attr="disabled">
            Guardar
        </x-secondary-button>
    @endif

    <div class="flex flex-auto">
        <img src="{{ asset($imagen1) }}" alt="Mi imagen" class="w-1/3 max-w-100">
        <img src="{{ asset($imagen2) }}" alt="Mi imagen" class="w-1/3 max-w-100">



    </div>
</div>
