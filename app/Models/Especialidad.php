<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especialidad extends Model
{
    use HasFactory;
    protected $fillable = ['id','estudio_fotografico_id','PrecioE','CantidadFotos','NombreE','Descripcion'];

    public function estudio_fotografico(){
        return $this->belongsTo(estudio_fotografico::class, 'estudio_fotografico_id', 'id');
    }
    public function invitacion(){
        return $this->hasMany(invitacion::class, 'especialidad_id');
    }

    //una imagen por especialidad
    public function images()
    {
        return $this->morphMany(Image::class, 'imageable');
    }


}
