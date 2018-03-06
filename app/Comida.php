<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    protected $primaryKey = 'comidaID';
    protected $table = 'comidas';
    public $timestamps = false;
}
