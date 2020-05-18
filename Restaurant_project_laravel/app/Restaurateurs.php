<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Restaurateurs extends Model
{
    protected $name = "Restaurateurs";
    
    protected $fillable = [
        'nom','logo'
    ];
}
