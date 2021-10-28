<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
//tiene la funcion de llamar a la tabla,
class Book extends Model
{
    protected $table='books';
    public $timestamps=false;
    protected $fillable=[
        'id', 'titulo', 'nombre', 'email', 'telefono'
    ];
    protected $primaryKey='id';
}
