<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Membres extends Model
{
    protected $name = "Membres";

    protected $fillable = [
        'prenom','nom','solde'
    ];
}
