<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persidentificacione extends Model
{
    use HasFactory;  
    protected $guarded = ['id']; 

    //Relación uno a uno 

    //Relación uno a uno inversa

    //Relación uno a muchos

    //Relación uno a muchos inversa
    public function persona(){
        return $this->belongsTo('App\Models\Persona');
    }

/*     public function tiposIdentificacion(){
        return $this->belongsTo('App\Models\Tipoidentificacione');
    }

    public function ente(){
        return $this->belongsTo('App\Models\Ente');
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
    
 */
}
