<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plats extends Model
{
    protected $fillable = [
        'nom','prix','photo','note'
    ];
}
