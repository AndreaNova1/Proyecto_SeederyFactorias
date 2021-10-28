<?php

use Illuminate\Database\Seeder;
use App\Book;
//nos permite llamar el usuario y tambien la cantidad de datos a crear
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       factory(Book::class, 50)->create();
    }
}
