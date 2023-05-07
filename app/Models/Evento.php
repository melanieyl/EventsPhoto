<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Evento extends Model
{
    use HasFactory;
    protected $fillable= ['id','qr','invitacion_id'];

    public function invitacion(){
        return $this->belongsTo(Invitacion::class, 'invitacion_id', 'id');
    }

    public function fotografia(){
        return $this->hasMany(Fotografia::class, 'evento_id');
    }

    //relacion de muchos a muchos 
    public function usuario(){
        return $this->belongsToMany(User::class, 'evento_id','user_id')
                    ->as('invitados')
                    ->withPivot('id','evento_id', 'user_id');
    }
    
    //imagenes para un eventos
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

   
}
