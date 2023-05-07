<div>


    <style>
        body {
            background: white !important;
        }
    </style>
    <div class="main flex flex-col m-5">
        <div class="header">
            <div class="text-3xl font-bold text-gray-600 mb-4">Especialidades</div>
        </div>
        {{-- crear especialidad --}}
        <td class=" my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">
            <div class="whitespace-nowrap flex">
                <a class="font-bold text-white rounded cursor-pointer bg-black hover:bg-purple-500 py-2 px-4"
                    wire:click="$toggle('modal_add')">
                    <p> Crear Especialidad</p>
                </a>
            </div>
        </td>
        <br>
        <x-dialog-modal wire:model="modal_add">

            <x-slot name="title">
                Crea tus Especialidades
            </x-slot>

            <x-slot name="content">

                <div class="mb-4">
                    <x-label value="Especialidad: " />
                    <x-input type="text" class="w-full" wire:model.defer="NombreE"
                        placeholder='Introduzca el Nombre' />
                    <x-input-error for="NombreE" />
                </div>
                <div class="mb-4">
                    <x-label value="Descripcion " />
                    <textarea wire:model.defer="Descripcion"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    rows="3" placeholder="  Escriba la descripción"></textarea>
                    <x-input-error for="Descripcion" />
                </div>
                <div class="mb-4">
                    <x-label value="precio " />
                    <x-input type="text" class="w-full" wire:model.defer="PrecioE"
                        placeholder='Introduzca el precio' />
                    <x-input-error for="PrecioE" />
                </div>
                <div class="mb-4">
                    <x-label value="Cantidad de Fotos" />
                    <x-input type="text" class="w-full" wire:model.defer="CantidadFotos"
                        placeholder='cantidad' />
                    <x-input-error for="CantidadFotos" />
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

        {{-- mostrar especialidad --}}
        {{-- {{$especialidades}} --}}
        
        @foreach ($especialidades as $especialidadU)
            
            <div
            class="each flex hover:shadow-lg select-none p-10 rounded-md border-gray-300 border mb-3 hover:border-gray-500 ">
            <div class="left">
                <div class="header text-blue-600 font-semibold text-2xl">{{$especialidadU->NombreE}}</div>
                <div class="desc text-gray-600">Descripcion: {{$especialidadU->Descripcion}}</div>
                <div class="desc text-gray-600">Cantidad de Fotos: {{$especialidadU->CantidadFotos}}</div>
                <div class="desc text-gray-600">Precio: {{$especialidadU->PrecioE}}</div>
            </div>
           

            <div class="right m-auto mr-0">               
                <div class="whitespace-nowrap flex">
                    <a class="font-bold text-white rounded cursor-pointer bg-green-600 hover:bg-green-500 py-2 px-4"
                        {{-- wire:click="open_edit({{ $especialidadU->id }})" --}}
                        >
    
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2"
                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                        </svg>
                    </a>
                    <a class="font-bold text-white rounded cursor-pointer bg-indigo-800 hover:bg-purple-700 py-2 px-4"
                        wire:click="">    
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                            viewBox="0 0 24 24"
                            style="fill: rgba(255, 255, 255, 1);transform: ;msFilter:;">
                            <path
                                d="M5 20a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V8h2V6h-4V4a2 2 0 0 0-2-2H9a2 2 0 0 0-2 2v2H3v2h2zM9 4h6v2H9zM8 8h9v12H7V8z">
                            </path>
                            <path d="M9 10h2v8H9zm4 0h2v8h-2z"></path>
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        @endforeach 

        {{-- <x-dialog-modal wire:model="modal_edit">

            <x-slot name="title">
                Editar la especialidad
            </x-slot>
            <x-slot name="content">               
                <div class="mb-4">
                    <x-label value="Especialidad: " />
                    <x-input type="text" class="w-full" wire:model.defer="NombreE"
                        placeholder='Introduzca el Nombre' />
                    <x-input-error for="NombreE" />
                </div>
                <div class="mb-4">
                    <x-label value="Descripcion " />
                    <textarea wire:model.defer="Descripcion"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    rows="3" placeholder="  Escriba la descripción"></textarea>
                    <x-input-error for="Descripcion" />
                </div>
                <div class="mb-4">
                    <x-label value="precio " />
                    <x-input type="text" class="w-full" wire:model.defer="PrecioE"
                        placeholder='Introduzca el precio' />
                    <x-input-error for="PrecioE" />
                </div>
                <div class="mb-4">
                    <x-label value="Cantidad de Fotos" />
                    <x-input type="text" class="w-full" wire:model.defer="CantidadFotos"
                        placeholder='cantidad' />
                    <x-input-error for="CantidadFotos" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$set('modal_edit', false)" wire:loading.attr="disabled">
                    Cancelar
                </x-secondary-button>
                <x-danger-button wire:click="update" wire:loading.attr="disabled" wire:target="update"
                    class="disabled:opacity-25 bg-black">
                    Actualizar
                </x-danger-button>
            </x-slot>
        </x-dialog-modal> --}}
      
    </div>
</div>
