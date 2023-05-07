<div>
    {{-- The whole world belongs to you. --}}
  
   @if ($organizadores)
      <td class=" my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
        <div class="whitespace-nowrap flex">
            <a class="font-bold text-black rounded cursor-pointer bg-white hover:bg-cyan-100 py-2 px-4"            
                wire:click="$toggle('modal_add')">
                <x-secondary-button >
                    Invitar/Contratar
                </x-secondary-button>
                
            </a>
        </div>
    </td>
    <x-dialog-modal wire:model="modal_add">

        <x-slot name="title">
           Invitacion o Futuro Evento a realizar
        </x-slot>

        <x-slot name="content">

            <div class="mb-4">
                <x-label value="Nombre de la Invitacion: " />
                <x-input type="text" class="w-full" wire:model.defer="NombreI"
                    placeholder='Introduzca el Nombre' />
                <x-input-error for="NombreI" />
            </div>
            <div class="mb-4">
                <x-label value="Descripcion " />
                <textarea wire:model.defer="DescripcionI"
                class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                rows="3" placeholder="  Escriba la descripción"></textarea>
                <x-input-error for="DescripcionI" />
            </div>
            <div class="mb-4">
                <x-label value="Ubicacion  " />
                <x-input type="text" class="w-full" wire:model.defer="UbicacionI"
                    placeholder='Introduzca la Ubicacion' />
                <x-input-error for="UbicacionI" />
            </div>
            <div class="mb-4">
                <x-label value="Duracion" />
                <x-input type="time" class="w-full" wire:model.defer="DuracionI"
                    placeholder='Introduzca el tiempi' />
                <x-input-error for="Duracion" />
            </div>
            <div class="mb-4">
                <x-label value="Fecha" />
                <x-input type="date"  class="w-full" wire:model="fecha" placeholder="Ingrese la fecha" />
                <x-input-error for="fecha" />
            </div>
            <div>
                <x-label value="especialidades" />
                <select class="w-full form-control" wire:model="especialidad_id">
                    <option value="" selected disabled >Seleccione una Especialidad</option>    
                    @foreach ($especialidades as $especialidad)
                        <option value="{{ $especialidad->id }}">{{ $especialidad->NombreE }}</option>
                    @endforeach
                    
                </select>
                <x-input-error for="especialidad_id" />
    
            </div>
        </x-slot>

        <x-slot name="footer">
            <x-secondary-button wire:click="$set('modal_add', false)" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>
            <x-danger-button wire:click="save" wire:loading.attr="disabled" wire:target="save"
                class="disabled:opacity-25 bg-black">
                Guardar
            </x-danger-button>
        </x-slot>
    </x-dialog-modal> 
   @endif
    



</div>
