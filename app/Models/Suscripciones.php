<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suscripciones extends Model
{
    use HasFactory;
    protected $table = 'suscripciones';
    protected $fillable = ['id','DescripcionS','Numero_foto_portafolio','Numero_evento','PrecioS'];

    //relacion de muchos a muchos con user

    public function user(){
        return $this->belongsToMany(User::class,'suscripciones_id', 'user_id')
                    ->as('suscripciones_usuarios')
                    ->withPivot('id','suscripciones_id', 'user_id');
    }
    
}
