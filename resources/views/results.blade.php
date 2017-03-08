<html>
<head>
	<title>Book Results</title>
	<link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container">
	<h1>Book Results</h1>
	@foreach ($books as $book)
		{{ $book->title }}
		<br>
		{{ $book->author->first_name }}
		{{ $book->author->last_name }}
		<br>
		{{ $book->publisher->name }}
		<br><br>
	@endforeach
	</div>
</body>
</html>