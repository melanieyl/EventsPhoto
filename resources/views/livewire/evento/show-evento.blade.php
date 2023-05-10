<div>
    <br>
    <div class=" grid grid-cols-2 border-r-2 border-purple-700 rounded-lg shadow-lg mx-8 max-lg">
        <div class="px-4 py-2">
            <h2 class="text-lg font-semibold text-gray-800">{{ $Evento->invitacion->NombreI }}</h2>
            <p class="text-sm text-gray-600 mt-1">Organizador: {{ $Evento->invitacion->organizador->user->name }}</p>
            <p class="text-sm text-gray-600 mt-1">fecha del evento: {{ $Evento->invitacion->fecha }}</p>
        </div>
        <div>{!! QrCode::size(150)->generate($text) !!} </div>


    </div>
    <br>
    <div class="m-10">
        <h1>Imagenes donde AParezo</h1>
        <div>
            @if ($miImagen->count())

                    <section class="bg-white ">

                        <ul class="grid grid-cols-3">
                            @foreach ($miImagen as $unaimagen)
                                <li class="relative" wire:key="image-{{ $unaimagen->fotografia->id }}">
                                    <img class="w-30 h-30 object-cover" src="{{ asset($unaimagen->fotografia->Direccion) }}" alt="">
                                    <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                                      <p class="text-white font-bold text-lg">marca</p>
                                    </div>

                                </li>
                                
                            @endforeach

                        </ul>
                    </section>

                @endif
        </div>
    </div>
    <div class="grid grid-cols-2 border-r-5 border-purple-800 rounded-lg shadow-lg mx-8 max-lg">

        


        @if ($verif_organizador)
            <div> <button class=" my-4 text-center px-2 py-1 bg-blue-400 text-teal-100">
                    Imagenes Privadas
                </button>
                <div>
                    @if ($fotografias->count())
                      <section class="bg-white ">
                        <ul class="grid grid-cols-3">
                          @foreach ($fotografias as $image)
                            <li class="relative" wire:key="image-{{ $image->id }}">
                              <img class="w-30 h-30 object-cover" src="{{ asset($image->Direccion) }}" alt="">
                              <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                                <p class="text-white font-bold text-lg">Compre la imagen</p>
                             
                              </div>
                            </li>
                          @endforeach
                        </ul>
                      </section>
                    @endif
                  </div>
                  
            </div>


        @endif

        <div>
            <button class=" my-4 text-center px-2 py-1 bg-purple-300 text-teal-100">
                Imagenes Publicas
            </button>
            <section class="bg-white ">

                <ul class="grid grid-cols-3">
                    @foreach ($fotografiasPublicas as $image)
                    <li class="relative" wire:key="image-{{ $image->id }}">
                        <img class="w-30 h-30 object-cover" src="{{ asset($image->Direccion) }}" alt="">
                        <div class="absolute top-0 left-0 w-full h-full flex items-center justify-center">
                          <p class="text-white font-bold text-lg">Compre la imagen</p>
                        </div>
                      </li>
                        
                    @endforeach

                </ul>
            </section>
        </div>


    </div>
   
   
</div>
