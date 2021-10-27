<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bList(){
        $data['Books'] =Book ::paginate(10);

        return view('libros.listar', $data);
    }
}
