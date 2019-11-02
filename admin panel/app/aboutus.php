<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class aboutus extends Model
{
    protected $table='aboutus';
    protected $fillable =['title','subtitle','description']; 
}
