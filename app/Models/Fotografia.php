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
    public function organizador(){
        return $this->belongsToMany(Organizador::class, 'fotografia_id','organizador_id')
        ->as('transaccion')
        ->withPivot('id','fotografia_id','organizador_id');
    }
}
