<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Admin</title>
    <link rel="stylesheet" 
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  </head>
  <body>
  <div class="container">
    @if (session('successStatus'))
      <div class="alert alert-success" role="alert">
        {{  session('successStatus') }}
      </div>
    @endif
  </div>
  <div class="container">
    <h1>Admin</h1>
    <p>...</p>
  </div>
  </body>
</html>