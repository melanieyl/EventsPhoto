<?php

namespace App\Http\Livewire\Transacciones;

use App\Models\Invitacion;
use App\Models\Order;
use App\Models\Suscripciones;
use Livewire\Component;

class CreateOrder extends Component
{

    Public $Suscripcion;
    Public $Invitacion;  
    public $tabla; 
    public $contact, $carnet, $phone, $email;

    public $rules=[
        'carnet' => 'required',
        'phone'=> 'required',
        'email'=> 'required'
    ];
    public function mount($cadena, $id){
        $this->tabla= $cadena;
       if( $cadena ==5){          
          $this->Suscripcion = Suscripciones::find($id);
          
        }else{
            if ($cadena ==6) {
                $this->Invitacion= Invitacion::find($id);
            }
        }
    }

    public function create_order(){
        $rules= $this->rules;
        $this->validate();
        if( $this->tabla == 5){                
           $order = Order::create(
                [                    
                    'user_recibe'=> 1,
                    'user_paga'=> auth()->user()->id,
                    'carnet'=> $this->carnet,
                    'phone'=> $this->phone,
                    'email'=> $this->email,
                    'table'=> 'Suscripcion',                    
                    'total'=>$this->Suscripcion->PrecioS ,
                    'content'=> null,
                    'factura'=> $this->Suscripcion->NombreS
                ]
                );
           
            return redirect()->route('paypal',$order); 
          }else{
            if ($this->tabla == 6) {
                $order = Order::create(
                    [                    
                        'user_recibe'=> $this->Invitacion->estudio_fotografico_id,
                        'user_paga'=> auth()->user()->id,
                        'carnet'=> $this->carnet,
                        'phone'=> $this->phone,
                        'email'=> $this->email,
                        'table'=> 'Evento',                    
                        'total'=>$this->Invitacion->especialidad->PrecioE ,
                        'content'=> $this->Invitacion->id,
                        'factura'=> $this->Invitacion->NombreI
                    ]
                    );
               
                return redirect()->route('paypal',$order); 
            }
          }

        // $order= new Order();        
        // $order->user_id= auth()->user()->id; //recupera la info del usuario AUTENTICADO
        // $order->user_id= auth()->user()->id; //recupera la info del usuario AUTENTICADO
        // $order->carnet= $this->carnet;
        // $order->phone= $this->phone;
        // $order->email= $this->email;
        // $order->total= Cart::subTotal();
        // $order->content= Cart::content();
        // $order->save(); //cuando se guarda
        // // foreach(Cart::content() as $item){
        // //     discount($item);
        // // }
        // // // Cart::destroy(); //limpio el carrito
        // return redirect()->route('paypal',$order); 
    }

    public function render()
    {
        return view('livewire.transacciones.create-order');
    }
}
