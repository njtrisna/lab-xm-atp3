<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>
	<h1>Profile</h1> 

	
	<table border="0">
		<tr>
			<td>UserId :</td>
			<td>{{$std['id']}}</td>
		</tr>
		<tr>
			<td>Username :</td>
			<td>{{$std['username']}}</td>
		</tr>
		<tr>
			<td>Name :</td>
			<td>{{$std['name']}}</td>
		</tr>
		<tr>
			<td>Email:</td>
			<td>{{$std['email']}}</td>
		</tr>
		<a href="{{route('home.proedit',$std['id'])}}">Edit</a> |
		<a href="{{route('home.index')}}">home</a> |
		
</table>




</body>
</html>