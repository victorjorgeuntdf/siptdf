<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    //Relación uno a uno 

    //Relación uno a uno inversa

    //Relación uno a muchos
    public function ciudades(){
        return $this->hasMany('App\Models\Ciudade');
    }

    //Relación uno a muchos inversa
    public function paise(){
        return $this->belongsTo('App\Models\Paise');
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

}
