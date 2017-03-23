<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="Bootstrap/css/bootstrap.min.css">


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
<h1>REGISTER</h1>

<form method="POST" action="/student-reg">

	{{ csrf_field() }}

	<div class="text"> 
    	<label for="name">Full Name:</label>
    	<input type="text" name="full_name" class="form-control" id="name">
    </div>

    <div class="text">
    	<label for="Course">Course:</label>
    	<input type="text" name="course" class="form-control" id="course">
    </div>

  	<div class="text">
    	<label for="ID Number">Student No:</label>
    	<input type="number" name="student_number" class="form-control" id="number">
    </div> 
    <div class="text">
    	<br>
  		<button type="submit" value="register" class="btn btn-success">Submit</button>
  	</div>

</form>
</div>
</body>
</html>



