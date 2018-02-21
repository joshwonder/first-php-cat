<!DOCTYPE html>
<html>
<head>
	<title>GRADE CALCULATIONS</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
	#fum{
		
		
	}
</style>
</head>
<h2>GRADE CALCULATOR</h2>
<body style="text-align: center; background-image: url(schul.jpg);background-repeat:no-repeat;background-size: 100%;text-align: center;color:black;">
	<div class="container">
		
	<form method="_GET" id="fum">
		Maths:<br>
		<input class="form-control" type="text" name="maths" placeholder="Enter  score" required="">
		<br>
		English:<br>
		<input class="form-control" type="text" name="English" placeholder="Enter score" required="">
		<br>
		Kiswahili:<br>
		<input class="form-control" type="text" name="Kiswahili" placeholder="Enter  score" required="">
		<br>
		Chemistry:<br>
		<input class="form-control" type="text" name="Chemistry" placeholder="Enter  score" required="">
		<br>
		Physics:<br>
		<input class="form-control" type="text" name="Physics" placeholder="Enter  score" required="">
		<br>
		Computer:<br>
		<input class="form-control" type="text" name="Computer" placeholder="Enter  score" required="">
		<br>
<br>
<br>
<button class="btn-success" type="submit">SUBMIT</button>
<button class="btn-danger" type="reset">RESET</button>
<?php 
$Maths=$_GET['maths'];
$English=$_GET['English'];
$Kiswahili=$_GET['Kiswahili'];
$Chemistry=$_GET['Chemistry'];
$Physics=$_GET['Physics'];
$Computer=$_GET['Computer'];

$total=$Maths+$English+$Kiswahili+$Chemistry+$Physics+$Computer;
$meanscore=$total/6;

if (isset($_GET['grade']))	 {
	# code...

	$grade=$_GET['grade'];
} 

if ($meanscore>=90) {
 	# code...
 	echo "<strong>You scored grade A</strong>";

 } 
elseif ($meanscore>=80) {
	# code...
	echo " <strong>You scored grade A-</strong>";
}

elseif ($meanscore>=70) {
	# code...
	echo "<strong>You Scored grade B+</strong>";

}

elseif($meanscore>=60) {
	# code...
	echo "<strong>You scored grade B</strong>";

}

elseif($meanscore>=50) {
	# code...

	echo "<strong> You scored grade B-</strong>";

}

elseif ($meanscore>=40) {
	# code...
	echo "<strong>You scored grade C</strong>";
}



 else {

 	# code...
 	echo "Work Harder next Time";

 }

 ?>



	</form>
	<a href="homes.php"><h2>Go to Homepage</h2></a>

</div>
</body>
</html>