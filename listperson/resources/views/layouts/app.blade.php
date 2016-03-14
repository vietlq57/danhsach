<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
    
    <body>
		<div class="container">
			<div class="jumbotron">
				<h1 class="text-center">This is person information site</h1>
			</div>
			@yield('content')
		</div>
    </body>
</html>

