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
}
