<div>
    @if ($estudio_fotografico == null)
        <td class=" my-3 inline-flex justify-center px-6 py-4 whitespace-nowrap flex">

            <div class="whitespace-nowrap flex">
                <a class="font-bold text-white rounded cursor-pointer bg-black hover:bg-purple-500 py-2 px-4"
                    wire:click="$toggle('modal_add')">
                    <p> Crea tu Estududio fotografico</p>
                </a>
            </div>
        </td>
        <x-dialog-modal wire:model="modal_add">

            <x-slot name="title">
                Crea tu Estududio fotografico
            </x-slot>

            <x-slot name="content">

                <div class="mb-4">
                    <x-label value="Nombre Estudio Fotografico: " />
                    <x-input type="text" class="w-full" wire:model.defer="NombreEF"
                        placeholder='Introduzca el Nombre' />
                    <x-input-error for="NombreEF" />
                </div>
                <div class="mb-4">
                    <x-label value="Descripcion del Negocio " />
                    <textarea wire:model.defer="DescripcionEF"
                    class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                    rows="3" placeholder="  Escriba la descripción"></textarea>
                    <x-input-error for="DescripcionEF" />
                </div>
                <div class="mb-4">
                    <x-label value="Ubicacion Estudio Fotografico: " />
                    <x-input type="text" class="w-full" wire:model.defer="UbicacionEF"
                        placeholder='Introduzca la Ubicacion' />
                    <x-input-error for="UbicacionEF" />
                </div>
                <div class="mb-4">
                    <x-label value="Telefono" />
                    <x-input type="text" class="w-full" wire:model.defer="telefono"
                        placeholder='Introduzca el Numero' />
                    <x-input-error for="telefono" />
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
    @else
        <!-- component -->
        <div class="px-6">
            <div class="font-sans bg-gradient-to-r from-indigo-900 to-green-600  px-12 py-4 rounded border  ">

                <div class="grid grid-cols-2 ">
                    <div>
                        <div class="header text-lime-300 font-semibold text-2xl">Nombre Estudio Fotografico</div>
                        <div class="desc text-white">{{ $estudio_fotografico->NombreEF }} </div>
                    </div>
                    <div class="right m-auto mr-0">
                        <a class="font-bold text-white rounded cursor-pointer  bg-black hover:bg-indigo-500 py-2 px-4"
                            wire:click="open_edit({{ $estudio_fotografico->id }})"> Editar
                        </a>
                    </div>
                    <br>
                </div>
                <div class="header text-green-300 font-semibold text-2xl">Ubicacion</div>
                <div class="desc text-white">{{ $estudio_fotografico->UbicacionEF }} </div>
                <br>
                <div class="header text-indigo-400 font-semibold text-2xl">Telefono</div>
                <div class="desc text-white">{{ $estudio_fotografico->telefono }} </div>
                <br>
                <div class="header text-lime-300 font-semibold text-2xl">Descripcion</div>
                <div class="desc text-white px-2">{{ $estudio_fotografico->DescripcionEF }} </div>
            </div>
        </div>

        {{-- modal para editar --}}
        <x-dialog-modal wire:model="modal_edit">

            <x-slot name="title">
                Editar Estructura del Comité:
            </x-slot>

            <x-slot name="content">

                <div class="mb-4">
                    <x-label value="Nombre Estudio Fotografico: " />
                    <x-input type="text" class="w-full" wire:model.defer="NombreEF"
                        placeholder='Introduzca el Nombre' />
                    <x-input-error for="NombreEF" />
                </div>
                <div class="mb-4">
                    <x-label value="Descripcion del Negocio " />

                    <textarea wire:model.defer="DescripcionEF"
                        class="border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm w-full"
                        rows="3" placeholder="  Escriba la descripción"></textarea>
                    <x-input-error for="DescripcionEF" />
                </div>
                <div class="mb-4">
                    <x-label value="Ubicacion Estudio Fotografico: " />
                    <x-input type="text" class="w-full" wire:model.defer="UbicacionEF"
                        placeholder='Introduzca la Ubicacion' />
                    <x-input-error for="UbicacionEF" />
                </div>
                <div class="mb-4">
                    <x-label value="Telefono" />
                    <x-input type="text" class="w-full" wire:model.defer="telefono"
                        placeholder='Introduzca el Numero' />
                    <x-input-error for="telefono" />
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
        </x-dialog-modal>

        <div class="px-6">
            <hr class="border-gray-500 mt-6" />
            <br>

            <!-- espcecialidades -->
            {{-- @livewire('estudio-fotografico.especialidad-livewire', ['estudiofotografico' => {{$estudio_fotografico->id}}]) --}}
            
            @livewire('estudio-fotografico.especialidad-livewire', ['estudiofotografico_id' => $estudio_fotografico])

        </div>
    @endif
</div>
