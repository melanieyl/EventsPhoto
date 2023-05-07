<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitado extends Model
{
    use HasFactory;  
    protected $fillable = [
        'id',        
        'evento_id',
        'user_id',
        ];

    public function usuario(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    public function evento(){
        return $this->belongsTo(Evento::class, 'evento_id', 'id');
    }
}
