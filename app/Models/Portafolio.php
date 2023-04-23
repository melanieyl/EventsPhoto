<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portafolio extends Model
{
    use HasFactory;
    protected $fillable = ['id','url','imageable_estudio', 'estudio_fotografico_id'];

    public function estudio_fotografico(){
        return $this->belongsTo(estudio_fotografico::class, 'estudio_fotografico_id', 'id');
    }
}
