<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relacion uno a muchos
    public function persIdentificaciones(){
        return $this->hasMany('App\Models\Persidentificacione');
    }

/*     //Relacion uno a muchos inversa
    public function expresiongenero(){
        return $this->belongsTo('App\Models\Expresiongenero');
    }

    public function sexobio(){
        return $this->belongsTo('App\Models\Sexobio');
    }

    public function vive(){
        return $this->belongsTo('App\Models\Vive');
    }

    public function estadocivile(){
        return $this->belongsTo('App\Models\Estadocivile');
    }

    public function gruposanguineo(){
        return $this->belongsTo('App\Models\Gruposanguineo');
    }

    public function lente(){
        return $this->belongsTo('App\Models\Lente');
    }

    public function laterialidade(){
        return $this->belongsTo('App\Models\Lateralidade');
    }

    public function usoarmasfuego(){
        return $this->belongsTo('App\Models\Usoarmasfuego');
    }

    public function ciudade(){
        return $this->belongsTo('App\Models\Ciudade');
    }
 
    public function mac(){
        return $this->belongsTo('App\Models\Mac');
    }

    public function user(){
        return $this->belongsTo('App\Models\User');
    }

    public function regestado(){
        return $this->belongsTo('App\Models\Regestado');
    }


    //Relacion muchos a muchos
 */    
}
