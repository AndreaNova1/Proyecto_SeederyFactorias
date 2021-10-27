<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $table='books';
    public $timestamps=false;
    protected $fillable=[
        'id', 'titulo', 'nombre', 'email', 'telefono'
    ];
    protected $primaryKey='id';
}
