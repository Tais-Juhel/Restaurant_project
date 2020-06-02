<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membres extends Model
{
    protected $name = "Membres";
    protected $primaryKey = 'id_membre';

    protected $fillable = [
        'prenom','nom','solde'
    ];
}
