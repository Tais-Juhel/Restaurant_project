<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    protected $fillable = [
        'pseudo','mdp','type','mail','adresse'
    ];
}
