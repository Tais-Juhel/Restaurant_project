<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateurs extends Model
{
    protected $name = "Utilisateurs";
    
    protected $fillable = [
        'pseudo','mdp','type','mail','adresse'
    ];
}
