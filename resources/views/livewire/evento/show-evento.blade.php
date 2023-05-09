<div>
    <br>
    <div class=" grid grid-cols-2 border-r-2 border-purple-700 rounded-lg shadow-lg mx-8 max-lg">
        <div class="px-4 py-2">
            <h2 class="text-lg font-semibold text-gray-800">{{ $Evento->invitacion->NombreI }}</h2>
            <p class="text-sm text-gray-600 mt-1">Organizador: {{ $Evento->invitacion->organizador->user->name }}</p>
            <p class="text-sm text-gray-600 mt-1">fecha del evento: {{ $Evento->invitacion->fecha }}</p>
        </div>
        <div>{!! QrCode::size(150)->generate($text); !!}  </div>
       
        
    </div>
    <br>
    <div class="grid grid-cols-2 border-r-5 border-purple-800 rounded-lg shadow-lg mx-8 max-lg">

      

        @if ($verif_organizador)
          <button class=" my-4 text-center px-2 py-1 bg-blue-400 text-teal-100">
            Imagenes Privadas
        </button>
        @endif
       <button class=" my-4 text-center px-2 py-1 bg-purple-300 text-teal-100">
            Imagenes Publicas

        </button>

    </div>

</div>
