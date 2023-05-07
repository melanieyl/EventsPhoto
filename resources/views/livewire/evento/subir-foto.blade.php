<div>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css"
    integrity="sha512-jU/7UFiaW5UBGODEopEqnbIAHOI8fO6T99m7Tsmqs2gkdujByJfkCbbfPSN4Wlqlb9TGnsuC0YgUgWkRBK7B9A=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <br>
    <div class="border-r-2 border-purple-700 rounded-lg shadow-lg mx-8 max-lg">
        <div class="px-4 py-2">
            <h2 class="text-lg font-semibold text-gray-800">{{ $Evento->invitacion->NombreI }}</h2>
            <p class="text-sm text-gray-600 mt-1">Cliente: {{ $Evento->invitacion->organizador->user->name }}</p>
            <p class="text-sm text-gray-600 mt-1">fecha: {{ $Evento->invitacion->fecha }}</p>
        </div>
    </div>
    <br>
    <div class="grid grid-cols-2 border-r-5 border-purple-800 rounded-lg shadow-lg mx-8 max-lg">
        <form wire:submit.prevent="guardar" enctype="multipart/form-data">
            @csrf
            <input type="file" name="privada[]" id="privada" wire:model="privada">
            <button type="submit" class="px-2 py-1 bg-black text-teal-100" wire:click=''>Subir Imagenes Privadas</button>

        </form>
        <form wire:submit.prevent="guardarPrivada" enctype="multipart/form-data">
            @csrf
            <input type="file" name="imagen[]" id="imagen" wire:model="imagen">
            <button type="submit" class="px-2 py-1 bg-black text-teal-100" wire:click=''>Subir Imgenes Publicas</button>
        </form>
    </div>
   

    <button hidden id="btnNotificaciones" class="">
        <i class="fa-solid fa-bell"></i> Notificar </button>
    <script src="{{ asset('js/face-api.min.js') }}" type="text/javascript"></script>
    <script>
        Livewire.on('face-api', (usuarios) => {

            console.log(usuarios);
            const imageUpload = document.getElementById('imagen') //toma la imagen que se esta subiendo
            const btnNotificaciones = document.getElementById('btnNotificaciones')


            //cargo los modelos de FACEAPI cuanndo la funcion start comience
            Promise.all([
                faceapi.nets.faceRecognitionNet.loadFromUri('/models'),
                faceapi.nets.faceLandmark68Net.loadFromUri('/models'),
                faceapi.nets.ssdMobilenetv1.loadFromUri('/models')
            ]).then(start)

            function loadLabeledImages() {
                //nombre de las carpetas(usuarios)
                const labels = usuarios;
                return Promise.all(
                    labels.map(async label => {
                        const descriptions = [];
                        for (let i = 1; i <= 3; i++) {
                            //console.log(label)
                            const img = await faceapi.fetchImage(`/storage/usuarios/${label}/${i}.jpg`);
                            const detections = await faceapi.detectSingleFace(img).withFaceLandmarks()
                                .withFaceDescriptor();
                            descriptions.push(detections.descriptor);
                            //console.log(label, descriptions)
                        }

                        return new faceapi.LabeledFaceDescriptors(label, descriptions);
                    })
                )
            }



            async function start() {

                //obtengo los nombres de las caras de las imagenes del servidor
                const labeledFaceDescriptors = await loadLabeledImages();
                console.log(labeledFaceDescriptors);
                //console.log(labeledFaceDescriptors)

                //que tenga una presicion arriba de 60%
                const faceMatcher = new faceapi.FaceMatcher(labeledFaceDescriptors, 0.6);
                console.log(faceMatcher);

                console.log('Listo');
                btnNotificaciones.addEventListener('click', async () => {

                    //obtengo la imagen subida en el input
                    resultados = [];
                    for (i = 0; i < imageUpload.files.length; i++) {
                        image = await faceapi.bufferToImage(imageUpload.files[i]);
                        const displaySize = {
                            width: image.width,
                            height: image.height
                        };
                        //detecta todas las caras de la imagagen del input
                        const detections = await faceapi.detectAllFaces(image).withFaceLandmarks()
                            .withFaceDescriptors();

                        const resizedDetections = faceapi.resizeResults(detections, displaySize);

                        //las coincidencias
                        const results = resizedDetections.map(d => faceMatcher.findBestMatch(d
                            .descriptor));

                        resultados.push(results);
                    }
                    console.log(resultados);
                    idusuarios = []
                    for (i = 0; i < resultados.length; i++) {
                        let result = resultados[i];
                        for (j = 0; j < result.length; j++) {
                            //console.log(result[j].label)
                            idusuarios.push(result[j].label);
                        };
                    }
                    console.log(idusuarios);
                    Livewire.emit('notiAparecesFoto', idusuarios);
                })
                btnNotificaciones.click()


            }


        });
    </script>
       {{-- dropzone --}}
       <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"
       integrity="sha512-VQQXLthlZQO00P+uEu4mJ4G4OAgqTtKG1hri56kQY1DtdLeIqhKUp9W/lllDDu3uN3SnUNawpW7lBda8+dSi7w=="
       crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</div>
