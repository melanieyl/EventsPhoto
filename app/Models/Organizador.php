<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    use HasFactory;
    
    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
                  
    }
    public function estudiofotografico(){
        return $this->belongsToMany(EstudioFotografico::class, 'organizador_id', 'estudio_fotografico_id')
        ->as('invitacion')
        ->withPivot('id','estudio_fotografico_id','organizador_id');

    }
    public function fotografia(){
        return $this->belongsToMany(Fotografia::class, 'organizador_id', 'fotografia_id')
        ->as('transaccion')
        ->withPivot('id','fotografia_id','organizador_id');
    }

}
