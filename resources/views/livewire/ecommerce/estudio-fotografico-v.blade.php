<div>
    <div class="w-full bg-blue-100">
        <section class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-4 py-12">
            <div class="text-center pb-12">
                <h1 class="font-bold text-3xl md:text-4xl lg:text-5xl font-heading text-indigo-600">
                    Estudios Fotograficos
                </h1>
            </div>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <!-- Estudio fotograficos -->
                @foreach ($estudiosFotograficos as $estudio)
                    <div class="mx-auto max-w-md overflow-hidden rounded-lg bg-white shadow">
                        <img src="https://images.unsplash.com/photo-1552581234-26160f608093?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1000&q=80"
                            class="aspect-video w-full object-cover" alt="" />
                        <div class="p-4">

                            <h3 class="text-xl font-medium text-gray-900">{{ $estudio->NombreEF }}</h3>
                            <p class="mb-1 text-sm text-primary-500">{{ $estudio->user->name }}</p>

                            <br>
                            <p class="mt-1 text-gray-500">
                                {{ substr($estudio->DescripcionEF, 0, strpos($estudio->DescripcionEF, ' ', 30)) . '...' }}
                            </p>
                            <br>
                            <a href="{{ route('ecommerce.estudiofotografico.unico', $estudio->id) }}">
                                <x-secondary-button wire:click="" wire:loading.attr="disabled">
                                    Ver mas
                                </x-secondary-button>
                            </a>
                            {{--                            
                            <div class="mt-4 flex gap-2">
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-blue-50 px-2 py-1 text-xs font-semibold text-blue-600">
                                    Design
                                </span>
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-indigo-50 px-2 py-1 text-xs font-semibold text-indigo-600">
                                    Product
                                </span>
                                <span
                                    class="inline-flex items-center gap-1 rounded-full bg-orange-50 px-2 py-1 text-xs font-semibold text-orange-600">
                                    Develop
                                </span>
                            </div> --}}
                        </div>
                    </div>
                @endforeach

            </div>
        </section>
    </div>

</div>
