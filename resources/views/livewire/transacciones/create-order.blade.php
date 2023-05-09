<div class="m-5">
    <div class="container py-8">
        <div class="grid grid-cols-4 gap-6"> {{-- ES UNA GRID DE 4 COLUMNAS --}}

            {{-- COLUMNA INPUTS Y POLITICAS --}} {{-- AQUI ESTAMOS USANDO LAS DOS PRIMERAS COLUMNAS --}}
            <div class="col-span-2">

                <div class="bg-white rounded-lg shadow p-6">


                    <div>
                        <x-label value="Carnet de identidad" />
                        <x-input type="text" wire:model.defer="carnet"
                            placeholder="Ingrese el carnet de la persona que adquirirá el paquete" class="w-full" />
                        <x-input-error for="carnet" />
                    </div>

                    <div class="mt-4">
                        <x-label value="Teléfono de contacto" />
                        <x-input type="number" wire:model.defer="phone"
                            placeholder="Ingrese un número de teléfono de contacto" class="w-full" />
                        <x-input-error for="phone" />
                    </div>

                    <div class="mt-4">
                        <x-label value="Email" />
                        <x-input type="text" wire:model.defer="email"
                            placeholder="Ingrese el email de la persona que adquirirá el paquete" class="w-full" />
                        <x-input-error for="email" />
                    </div>
                </div>

                <div>
                    <x-button wire:loading.attr="disabled" wire:target="create_order" class="mt-6 mb-4"
                        wire:click="create_order">
                        Continuar con la compra
                    </x-button>

                    <hr> {{-- politicas de privacidad --}}
                    <p class="text-sm text-gray-700 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Qui
                        necessitatibus cupiditate illum voluptatem similique dolores error vitae, magni laudantium harum
                        iste quos tempore praesentium quod quia perferendis natus molestias? Asperiores! <a
                            href="" class="font-semibold text-red-600">Políticas y privacidad</a></p>
                </div>

            </div>

            {{-- COLUMNA MUESTRA DE ITEMS Y SUBTOTAL --}} {{-- AQUI ESTAMOS USANDO LAS DOS COLUMNAS QUE RESTAN --}}

            @if ($Suscripcion !=null)
            <div class="col-span-2">
                <div class="bg-neutral-50 rounded-lg shadow p-3 text-center text-black">
                    Resumen de la orden
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <hr class="mt-4 mb-3">
                    <div class="text-gray-700">
                        <p class="flex justify-between font-bold items-center">
                            {{$Suscripcion->NombreS}}
                           
                        </p>
                    </div>
                   
                    <div class="text-gray-700 mt-3">
                        <p class="flex justify-between items-center font-bold text-lg">
                            TOTAL
                            <span class="font-semibold">{{$Suscripcion->PrecioS}}BS</span>
                        </p>
                    </div>
                </div>
            </div>
                
            @endif
            @if ($Invitacion !=null)
            <div class="col-span-2">
                <div class="bg-neutral-50 rounded-lg shadow p-3 text-center text-black">
                    Resumen de la orden
                </div>
                <div class="bg-white rounded-lg shadow p-6">
                    <hr class="mt-4 mb-3">
                    <div class="text-gray-700">
                        <p class="flex justify-between font-bold items-center">
                            Nombre de Futuro Evento:<br> {{$Invitacion->NombreI}}
                           
                        </p>
                    </div>
                    <div class="text-gray-700">
                        <p class="flex justify-between font-bold items-center">
                            Descripcion :<br> {{$Invitacion->DescripcionI}}
                           
                        </p>
                    </div>
                   
                    <div class="text-gray-700">
                        <p class="flex justify-between font-bold items-center">
                           Ubicacion:  <br> {{$Invitacion->UbicacionI}}
                           
                        </p>
                    </div>
                    <div class="text-gray-700">
                        <p class="flex justify-between font-bold items-center">
                            Estudio fotografico:<br>  {{$Invitacion->estudio_fotografico->NombreEF}}
                           
                        </p>
                    </div>
                   
                    <div class="text-gray-700 mt-3">
                        <p class="flex justify-between items-center font-bold text-lg">
                            TOTAL
                            <span class="font-semibold">{{$Invitacion->especialidad->PrecioE}}BS</span>
                        </p>
                    </div>
                </div>
            </div>
                
            @endif


        </div>
    </div>

</div>
