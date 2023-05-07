<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EstudioFotografico extends Model
{
    use HasFactory;
    // protected $table = '';
    protected $fillable = [
        'id',
        'NombreEF',
        'DescripcionEF',
        'UbicacionEF',
        'telefono',
        'user_id',
      
    ];

    public function user(){
        return $this->belongsTo(User::class,'user_id','id' );
    }

    public function imagenPortafolio(){
        return $this->hasMany(Portafolio::class,'estudio_fotografico_id','id');
    }
    public function especialidad(){
        return $this->hasMany(Especialidad::class,'estudio_fotografico_id','id');
    }

    public function Organizador(){
        return $this->belongsToMany(Organizador::class, 'estudio_fotografico_id','organizador_id')
                    ->as('invitacion')
                    ->withPivot('id','estudio_fotografico_id','organizador_id');
    }

    //imagenes para el portafolio
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }

}
