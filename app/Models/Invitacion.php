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
        'especialidad_id',
        'estudio_fotografico_id'];
    public function evento(){
        return $this->hasMany(Evento::class, 'invitacion_id');
    }
    public function especialidad(){
        return $this->belongsTo(Especialidad::class, 'especialidad_id', 'id');
    }
    public function organizador(){
        return $this->belongsTo(Organizador::class, 'organizador_id', 'id');
    }
    public function estudio_fotografico(){
        return $this->belongsTo(EstudioFotografico::class, 'estudio_fotografico_id', 'id');
    }

}
