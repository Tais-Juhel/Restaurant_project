<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    protected $name = "Commandes";

    protected $fillable = [
        'total','date_commande','date_livraison','adresse_livraison','etat'
    ];
}
