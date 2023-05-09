<?php

namespace App\Http\Livewire\Transacciones;

use App\Models\Evento;
use App\Models\Order;
use App\Models\Suscripciones;
use App\Models\SuscripcionUsuario;
use Livewire\Component;

class PaymentOrder extends Component
{
    public $order;
    protected $listeners = ['payOrder'];

    public function mount(Order $order)
    {
        $this->order = $order;
    }
    public function payOrder()
    {
        $this->order->status = 2; //RECIBIDO
        $datosreservas = json_decode($this->order->content);
        if ($this->order->table == 'Suscripcion') {
            $id_suscripcion = Suscripciones::where('NombreS', $this->order->factura)->get()->first();
            SuscripcionUsuario::create(
                [
                    'user_id' => $this->order->user_paga,
                    'suscripciones_id' => $id_suscripcion->id,
                ]
            );
            $this->order->save();
            return redirect()->route('fotografo.Mysuscripciones');
        } else {
            if ($this->order->table == 'Evento') {
                
                Evento::create([
                    'qr' => 'melanie',
                    'invitacion_id' => $this->order->content,
                ]);
                $this->order->save();
                return redirect()->route('usuario.show_eventos');
            }
        }

        $this->order->save();

        return redirect()->route('fotografo.Mysuscripciones');
    }


    public function render()
    {
        return view('livewire.transacciones.payment-order');
    }
}
