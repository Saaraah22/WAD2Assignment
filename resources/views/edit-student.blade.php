<!DOCTYPE html>
<html lang="en">
<head>
	
	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">


<style type="text/css">	
body {	
	background: #517fa4; 
	background: -webkit-linear-gradient(to left, #517fa4 , #243949); 
	background: linear-gradient(to left, #517fa4 , #243949); 
}

#content{
	height: 100%;
    background-color: white;
	padding-left: 40px;
	padding-right: 40px;
	padding-bottom: 30px;
	padding-top: 15px;
	margin-top: 60px;
	margin-left: 400px;
	margin-right: 400px;
	color:black;
	border-radius: 3px;
}
</style>
</head>
<body> 

<div id="content">
<h1>EDIT STUDENTS</h1>
<form method="POST" action="/saveEdit">

{{ csrf_field() }}

	<input type="text"  name="id" class="form-control" value="{{ $student->id }}" hidden>

	<label for="name">Full Name:</label> 
	<input type="text" class="form-control" name="full_name" value="{{ $student->full_name }}"><br>

	<label for="Course"> Course: </label>
	<input type="text" name="course" value="{{ $student->course }}"><br>
	
	<label for="ID Number"> Student No.: </label> 
	<input type="text" name="student_number" value="{{ $student->student_number }}"><br>

	<button class="btn btn-success">Save</button>
</form>
</div>

</body>
</html>