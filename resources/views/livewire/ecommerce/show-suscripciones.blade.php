<div>
    <!-- component -->
    <link rel="stylesheet" href="https://cdn.tailgrids.com/tailgrids-fallback.css" />

    <!-- ====== Pricing Section Start -->
    <section class="   bg-white  pt-20   lg:pt-[30px]   pb-12   lg:pb-[90px]   relative   z-20   overflow-hidden   ">
        <div class="container">
            <div class="flex flex-wrap -mx-4">
                <div class="w-full px-4">
                    <div class="text-center mx-auto mb-[60px] lg:mb-20 max-w-[510px]">
                        <span class="font-semibold text-lg text-primary mb-2 block">
                            Los mejores Precios
                        </span>
                        <h2 class="  font-bold   text-3xl     sm:text-4xl     md:text-[40px]    text-dark  mb-4    ">
                            Nuestros planes de Negocio
                        </h2>
                        <p class="text-base text-body-color">
                            Que tu estudio fotografico gane reconocimiento y se pocisione en el mercado
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid grid-cols-3">
                @foreach ($suscripciones as $suscripcion)
                    <div class="flex flex-wrap justify-center -mx-4">
                        <div class="w-full md:w-1/2 lg:w-full m-5">
                            <div
                                class="bg-white rounded-xl relative z-10  overflow-hidden  border border-primary border-opacity-20   shadow-pricing  py-10
                      px-8   sm:p-12   lg:py-10 lg:px-6       xl:p-12         mb-10       ">
                                <span class="text-primary font-semibold text-lg block mb-4">
                                    {{ $suscripcion->NombreS }}
                                </span>
                                <h2 class="font-bold text-dark mb-5 text-[42px]">
                                    {{ $suscripcion->PrecioS }}
                                    <span class="text-base text-body-color font-medium">
                                        / mes
                                    </span>
                                </h2>
                                <p
                                    class="    text-base text-body-color  pb-8 mb-8     border-b border-[#F2F2F2]       ">
                                    {{ $suscripcion->DescripcionS }}
                                </p>
                                <div class="mb-7">
                                    <p class="text-base text-body-color leading-loose mb-1">
                                        Cantidad de fotos en Portafolio: {{ $suscripcion->Numero_foto_portafolio }}
                                    </p>

                                    @if ($suscripcion->Numero_evento ==0)
                                    <p class="text-base text-green-400 leading-loose mb-1">
                                        Cantidad de Eventos: Ilimitado
                                    </p>
                                    @else
                                    <p class="text-base text-body-color leading-loose mb-1">
                                        Cantidad de Eventos: {{ $suscripcion->Numero_evento }}
                                    </p>
                                    @endif

                                </div>
                                @role('Fotografo')
                                <a class="font-bold text-black rounded cursor-pointer bg-white hover:bg-cyan-100 py-2 px-4"
                                    wire:click="$toggle('modal_add')">
                                    <x-secondary-button wire:click="$set('id_suscripcion', {{$suscripcion->id}})" >
                                        Adquirir
                                    </x-secondary-button>
                                </a>
                                @endrole

                                <div>
                                    <span class="absolute right-0 top-7 z-[-1]">
                                        <svg width="77" height="172" viewBox="0 0 77 172" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="86" cy="86" r="86"
                                                fill="url(#paint0_linear)" />
                                            <defs>
                                                <linearGradient id="paint0_linear" x1="86" y1="0"
                                                    x2="86" y2="172" gradientUnits="userSpaceOnUse">
                                                    <stop stop-color="#3056D3" stop-opacity="0.09" />
                                                    <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
                                                </linearGradient>
                                            </defs>
                                        </svg>
                                    </span>

                                </div>
                            </div>
                        </div>


                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <x-dialog-modal wire:model="modal_add">
        <x-slot name="title">
           Desea adquirir este Plan 
        </x-slot>

        <x-slot name="content">       
            <p>{{$id_suscripcion}}</p>
        </x-slot>
        <x-slot name="footer">
            <x-secondary-button wire:click="$set('modal_add', false)" wire:loading.attr="disabled">
                Cancelar
            </x-secondary-button>
            <x-danger-button wire:click="guardar" wire:loading.attr="disabled" wire:target="guardar"
                class="disabled:opacity-25 bg-black">
                Adquirir
            </x-danger-button>
        </x-slot>
    </x-dialog-modal>
    <!-- ====== Pricing Section End -->

</div>
