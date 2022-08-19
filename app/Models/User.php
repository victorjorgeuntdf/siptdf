<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
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
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    //Relación uno a uno 

    //Relación uno a uno inversa

    //Relación uno a muchos 
    public function estadosciviles(){
        return $this->hasMany('App\Models\Estadocivile');
    }

    public function expresiongeneros(){
        return $this->hasMany('App\Models\Expresiongenero');
    }

    public function gruposanguineos(){
        return $this->hasMany('App\Models\Gruposanguineo');
    }
    public function lentes(){
        return $this->hasMany('App\Models\Lente');
    }
    public function lateralidades(){
        return $this->hasMany('App\Models\Lateralidade');
    }
    public function usoarmasfuegos(){
        return $this->hasMany('App\Models\Usoarmasfuego');
    }

    public function persIdentificaciones(){
        return $this->hasMany('App\Models\Persidentificacione');
    }

    public function tiposIdentificaciones(){
        return $this->hasMany('App\Models\Tiposidentificacione');
    }

    public function personas(){
        return $this->hasMany('App\Models\Persona');
    }

    public function entes(){
        return $this->hasMany('App\Models\Ente');
    }

    public function ciudades(){
        return $this->hasMany('App\Models\Ciudade');
    }

    public function provincias(){
        return $this->hasMany('App\Models\Provincia');
    }
    
    public function paises(){
        return $this->hasMany('App\Models\Paise');
    }


    //Relación uno a muchos inversa
    

}
