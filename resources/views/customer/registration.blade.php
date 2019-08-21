<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<h2>Registration</h2>

	
	<a href="/">Home</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email"></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>

@foreach ($errors->all() as $error)
    {{ $error }} <br>
@endforeach 


</body>
</html>