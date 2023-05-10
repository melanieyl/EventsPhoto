<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Organizador extends Model
{
    use HasFactory;
    protected $fillable = ['id','user_id'];
    
    public function user(){
        return $this->belongsTo(User::class,'user_id', 'id');
                  
    }
    public function estudiofotografico(){
        return $this->belongsToMany(EstudioFotografico::class, 'organizador_id', 'estudio_fotografico_id')
        ->as('invitacion')
        ->withPivot('id','estudio_fotografico_id','organizador_id');

    }
 

}
