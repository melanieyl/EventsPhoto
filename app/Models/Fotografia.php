<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fotografia extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'Direccion', 'estado', 'Precio','evento_id'];

    public function evento(){
        return $this->belongsTo(Evento::class, 'evento_id', 'id');
    }
    public function usuario(){
        return $this->belongsToMany(User::class, 'fotografia_id','usuario_id')
        ->as('transaccion')
        ->withPivot('id','fotografia_id','usuario_id');
    }
}
