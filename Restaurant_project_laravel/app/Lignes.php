<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lignes extends Model
{
    protected $name = "Lignes";
    protected $primaryKey = 'num_ligne';

    protected $fillable = [
        'num_ligne','id_plat','id_commande'
    ];
}
