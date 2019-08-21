
<!DOCTYPE html>
<html>
<head>
	<title>Edit Student</title>
</head>
<body>

	<h2>Edit Student</h2>

	<a href="{{route('home.stdlist')}}">Back</a> |
	<a href="/logout">logout</a>

<form method="post">
	@csrf
	<table border="0">
		<tr>
			<td>UserId</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Username</td>
			<td><input type="text" name="uname" value="{{$std['username']}}"></td>
		</tr>
		<tr>
			<td>Name</td>
			<td><input type="text" name="name" value="{{$std['name']}}"></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type="text" name="email" value="{{$std['email']}}"></td>
		</tr>
		
			<td></td>
			<td><input type="submit" name="save" value="Save"></td>
		</tr>
</table>
</form>
</body>
</html>