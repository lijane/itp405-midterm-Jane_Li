<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;
use App\Publisher;

class BookController extends Controller
{
    public function search(){
    	$books = Book::all();

    	return view('results',[
    		'books' => $books
    	]);     
    }
}


//Book SQL 
// SELECT title, first_name, last_name, name
// FROM books
// INNER JOIN authors
// ON books.author_id = authors.id
// INNER JOIN publishers
// ON books.publisher_id = publishers.id