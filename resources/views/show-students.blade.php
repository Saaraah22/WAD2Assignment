  <!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.theme.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<style type="text/css">
body {background: #517fa4; /* fallback for old browsers */
background: -webkit-linear-gradient(to left, #517fa4 , #243949); /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to left, #517fa4 , #243949); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
/**background-color: #000; font-family: helvetica, sans-serif;*/ }
#content{
	
    background-color: white;
    padding-left: 30px;
    padding-right: 30px;
	padding-bottom: 30px;
	padding-top: 20px;
	margin-top: 40px;
	margin-bottom: 40px;
	margin-left: 400px;
	margin-right: 400px;
	border-radius: 3px;
	width: 50%;
	

}
table{
	border-collapse: collapse;
	width: 100%;
	color: black;
}
/*td {
	padding: 10px;
	text-align: left;
	border-bottom: 1px solid #ddd;
}
th{
	padding: 10px;
	background-color: #4CAF50;
	color: white;
}
tr:hover{background-color: #000}
}*/
/*button[type=submit]{
	background-color: #4CAF50;
	color: white;
	padding: 14px 20px;
	margin: 8px 0;
	border-radius: 4px;
	cursor: pointer;
}*/
thead{
	background-color: #4CAF50;
}
</style>
</head>
<body><div id="content">

	<table class="table table-striped">
		<thead>
			<tr>
				<th hidden> ID </th>
				<th> Full Name </th>
				<th> Course </th>
				<th> Student Number </th>
				<th> Options </th>
				
			</tr>
			
		</thead>

		<tbody>
			@foreach ($users as $user)
			<tr>
				<td hidden>{{ $user->id }} </td>
				<td> {{ $user->full_name }} </td>
				<td> {{ $user->course }} </td>
				<td> {{ $user->student_number }} </td>
				<td> 
					<a href="/edit/{{ $user->id }}">
						<button class="btn btn-success" class="fa fa-pencil">Edit</button>
						</a>
					<a href="/delete/{{ $user->id }}">
						<button class="btn btn-danger" class="fa fa-trash">Delete</button>
					</a>
			    </td>
			
			</tr>
			@endforeach
		</tbody>
	</table>

	<a href="/add-student"><button class="btn btn-success" type="submit">Add Student</button></a><br><br>
</div>
</body>
</html>