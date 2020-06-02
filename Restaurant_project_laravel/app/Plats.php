<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plats extends Model
{
    protected $name = "Plats";
    protected $primaryKey = 'id_plat';
    
    protected $fillable = [
        'nom','prix','photo','note'
    ];
}
