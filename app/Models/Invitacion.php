<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitacion extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'NombreI',
        'DescripcionI',
        'UbicacionI',
        'DuracionI',
        'EstadoI',
        'fecha',
        'organizador_id',
        'espcialidad_id',
        'estudio_fotografico_id'];
    public function evento(){
        return $this->hasMany(Evento::class, 'invitacion_id');
    }
    public function especialidad(){
        return $this->belongsTo(Especialidad::class, 'especialidad_id', 'id');
    }

}
