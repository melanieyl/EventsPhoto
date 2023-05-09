<div>

    <div class="container m-6">
        <div class="grid grid-cols-2 gap-6"> {{-- defino dos columnas --}}


            <div class="col-span-1">{{-- lo que entra a la izquierda --}}
                <div class="bg-white rounded-lg shadow-lg px-6 py-4 mb-6">
                    <p class="text-gray-700 uppercase"><span class="font-semibold">Número de Orden:
                        </span>{{ $order->id }}</p>
                </div>
                <div class="bg-white rounded-lg shadow-lg p-6 mb-6">

                    <div>
                        <p class="text-lg font-semibold uppercase">Datos de contacto</p>

                        <p class="text-sm mb-2">Carnet: {{ $order->carnet }}</p>
                        <p class="text-sm mb-2">Teléfono: {{ $order->phone }}</p>
                        <p class="text-sm mb-2">Email: {{ $order->email }}</p>
                    </div>
                </div>

            </div>


            <div class="col-span-1">{{-- lo que entra a la derecha --}}
                {{-- AGREGO IMAGEN DE PAYPAL --}}
                <div class="bg-white rounded-lg shadow-lg px-6 pt-6 ">
                    <div class="flex justify-between items-center mb-4">
                        <img class="h-12" src="{{ asset('img/paypal2.png') }}" alt="">
                        <div class="text-gray-700">
                            <p class="text-lg font-semibold uppercase">
                                Total a pagar: {{ $order->total }} BS
                            </p>
                        </div>
                    </div>

                    {{-- <div id="paypal-button-container"></div> --}}
                    <div id="paypal-button" ></div>
                </div>

            </div>


        </div>
    </div>





    @push('script')
        <script src="https://www.paypalobjects.com/api/checkout.js"></script>
        <script>
            paypal.Button.render({
                // Configure environment
                env: 'sandbox',
                client: {
                    sandbox: 'demo_sandbox_client_id',
                    production: 'demo_production_client_id'
                },
                // Customize button (optional)
                locale: 'en_US',
                style: {
                    size: 'small',
                    color: 'gold',
                    shape: 'pill',
                },

                // Enable Pay Now checkout flow (optional)
                commit: true,

                // Set up a payment
                payment: function(data, actions) {
                    return actions.payment.create({
                        transactions: [{
                            amount: {
                                total: 10,
                                currency: 'USD'
                            }
                        }]
                    });
                },
                // Execute the payment
                onAuthorize: function(data, actions) {
                    return actions.payment.execute().then(function() {
                        // Show a confirmation message to the buyer
                        //window.alert('Gracias por tu compra!');
                        Livewire.emit('payOrder');
                    });
                }
            }, '#paypal-button');
        </script>
    @endpush
</div>
