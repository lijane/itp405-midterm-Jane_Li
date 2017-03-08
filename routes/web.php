<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', 'AdminController@index')->middleware('protected');
Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@login');
Route::get('/logout', 'LoginController@logout');

// Question 1 - SQL Joins and Prepared Statements
Route::get('/books/{id}',function(){

$host = 'itp460.usc.edu';
$database_name = 'itp405-midterm';
$username='student';
$password = 'ttrojan';

$pdo = new PDO("mysql:host=$host;dbname=$database_name", $username, $password);

$sql = "
SELECT headline, body, rating, title, first_name, last_name, name AS publisher_name
FROM books
INNER JOIN authors
ON books.author_id = authors.id
INNER JOIN publishers
ON books.publisher_id = publishers.id
INNER JOIN reviews
ON books.id = reviews.book_id
WHERE books.id = ?
";

$bookId = 1;

// $songs = mysqli_query($connection, $sql);
$statement = $pdo->prepare($sql);
$statement->bindParam(1, $bookId);
$statement->execute();
$reviews = $statement->fetchAll(PDO::FETCH_OBJ);
return $reviews;

});

//Question 2 - Object Relational Mapping
Route::get('/books', 'BookController@search');











































