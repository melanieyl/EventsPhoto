<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuscripcionUsuario extends Model
{
    use HasFactory;
    protected $table = 'suscripcion_usuarios';
    protected $fillable = ['id','user_id','suscripciones_id'];

    
    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function suscripciones()
    {
        return $this->belongsTo(Suscripciones::class, 'suscripciones_id');
    }

}
