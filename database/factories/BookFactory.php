<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Book;
use Faker\Generator as Faker;
//se indica el campo que deseamos llenar
$factory->define(Book::class, function (Faker $faker) {
    return [
        'titulo'=>$faker->title,
        'nombre'=>$faker->name,
        'email'=>$faker->email,
        'telefono'=>$faker->e164PhoneNumber,

    ];
});
