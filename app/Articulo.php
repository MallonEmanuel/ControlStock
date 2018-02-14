<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    //
    protected $table = 'articulos';
    protected $fillable = ['codigo', 'descripcion', 'stock','stock_minimo','precio'];

}
