<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuscripcionUsuario extends Model
{
    use HasFactory;
    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function suscripciones()
    {
        return $this->belongsTo(Suscripciones::class, 'suscripcion_id');
    }

}
