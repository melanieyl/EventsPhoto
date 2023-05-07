<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
<div class="main flex flex-col m-5">
    <div class="header">
        <div class="text-3xl font-bold text-gray-600 mb-4">Mis Suscripciones</div>
    </div>
    <div class="grid grid-cols-2">
    @foreach ($MySuscripciones as $suscripcion)
        <div
            class="each flex hover:shadow-lg select-none p-10 rounded-md border-gray-300 border mb-3 hover:border-gray-500 ">
            <div class="left">
                <div class="header text-blue-600 font-semibold text-2xl">{{ $suscripcion->suscripciones->NombreS }}</div>
                <div class="desc text-gray-600">Descripcion: {{ $suscripcion->suscripciones->DescripcionS }}</div>
                <div class="desc text-gray-600">Limite de eventos: {{ $suscripcion->suscripciones->Numero_evento }}</div>
                <div class="desc text-gray-600">Cantidad de imagenes en portafolio:
                    {{ $suscripcion->suscripciones->Numero_foto_portafolio }}</div>
                <div class="desc text-gray-600">Precio {{ $suscripcion->suscripciones->PrecioS }}</div>
                <div class="desc text-gray-600">Creado {{ $suscripcion->suscripciones->created_at }}</div>
                {{-- <div class="desc text-gray-600">finaliza en:  {{ $suscripcion->suscripciones->created_at }}</div> --}}
            </div>

        </div>
    @endforeach
</div>
</div>
</div>
