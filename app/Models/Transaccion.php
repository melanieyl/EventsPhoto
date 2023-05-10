<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
   
    protected $fillable = ['id','usuario_id','fotografia_id'];

    
    public function user()
    {
        return $this->belongsTo(User::class, 'usuario_id');
    }

    public function fotografia()
    {
        return $this->belongsTo(Fotografia::class, 'fotografia_id');
    }
}
