<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Regestado extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

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
