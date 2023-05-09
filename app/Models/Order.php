<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    const PENDIENTE=1; //SE HA GENERADO LA ORDEN PERO NO SE HA PAGADO (ESTA SE PONE POR DEFECTO)
    const RECIBIDO=2; //SE HA GENERADO Y SE HA PAGADO A ORDEN
    const CONFIRMADO=3;
    const ANULADO=4;  //SE HA GENERADO LA ORDEN, NO SE PAGA, PERO TIENE VIGENCIA DE TIEMPO

    const Susc = 5;
    const Fotos =6;
    Const Evento= 7;
    protected $fillable = ['id','user_recibe','user_paga','carnet','phone','email','table','status','total','content','factura'];
    public function userRecibe(){
        return $this->belongsTo(User::class,'user_recibe');
    }
    public function userPaga(){
        return $this->belongsTo(User::class,'user_paga');
    }
}
