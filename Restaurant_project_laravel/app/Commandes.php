<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    protected $fillable = [
        'total','date_commande','date_livraison','adresse_livraison','etat'
    ];
}
