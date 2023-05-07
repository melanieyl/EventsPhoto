<div>
    
    <form wire:submit.prevent="guardar" enctype="multipart/form-data">
        @csrf
        <input type="file" name="imagen[]" id="imagen" wire:model="imagen">
        <button type="submit" class="px-2 py-1 bg-red-600" wire:click=''>Guardar</button>
    </form>
</div>
