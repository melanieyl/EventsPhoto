<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasRoles;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'foto1',
        'foto2',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //relacion de uno a muchos

    //relacion con las suscripciones
    public function suscripciones(){
        return $this->belongsToMany(Suscripciones::class, 'user_id','suscripciones_id')
                    ->as('suscripciones_usuarios')
                    ->withPivot('id','suscripciones_id', 'user_id');
    }
    //relacion con los eventos
    public function evento(){
        return $this->belongsToMany(Evento::class, 'user_id','evento_id')
                    ->as('invitados')
                    ->withPivot('id','evento_id', 'user_id');
    }

    //relacion con los estudios fotograficos
    public function estudioFotografico(){
        return $this->hasMany(EstudioFotografico::class, 'user_id');
    }
    // relacion de uno a muchos  con organizador
    public function organizador(){
        return $this->hasMany(Organizador::class, 'user_id');
    }
    public function orders(){
        return $this->hasMany(Order::class);
    }
    
   

}
