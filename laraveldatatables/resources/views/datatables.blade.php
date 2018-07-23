<!DOCTYPE html>
<html>
<head>
	<title>Laravel Toastr Nitification</title>
</head>
<body>
<center>
	<h1>
		<form action="submitdata" method="post">
			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<span>Name : </span><input id="name_id" name="testname"><br><br>
			<button type="submit">Submiit</button>
		</form>
	</h1>
</center>
</body>
</html>