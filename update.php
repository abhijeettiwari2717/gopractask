<!DOCTYPE html>
<html>
<head>
	<title>UPDATE GOPRAC</title>
	<style>
		body{
			background-color: whitesmoke;
			color: orange;

		}
		input{
			width: 40%;
			height: 7%;
			border: 1px;
			border-radius: 7px;
			padding: 8px 15px 8px 15px;
			margin: 10px 0px 15px 0px;
			box-shadow: 1px 1px 2px 1px orange;
		}
		h2{
			color: orange;
			font-family: Times New Roman;
		}
	</style>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" href="logo1.png">
	
	<meta name="author" content="Abhijeet Tiwari">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	

	<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<script src="https://use.fontswesome.com/f890af1ed2.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
		<img src="logo1.png">

     </div>
</nav>


<body>
	<center>
		<h2>UPDATE THE CODE !</h2>
		<form method="post">
			<input type="text" name="code2" placeholder="ENTER SIX DIGT CODE TO UPDATE"><br>
			<input type="text" name="code1" placeholder="ENTER NEW SIX DIGT CODE"><br>
			
			<input type="submit" name="update" value="UPDATE">
		</form>
<br><form action="index.php" method="post">
			<input type="submit" name="home" value="BACK TO HOME">
		</form>
<br><form action="search.php" method="post">
			<input type="submit" name="search" value="BACK TO SEARCH">
		</form>

<?php
$conn=mysqli_connect("localhost","root","");
$db=mysqli_select_db($conn,'goprac');
if(isset($_POST['update'])){
		$id=$_POST['code1'];

		$query="UPDATE goprac SET code='$_POST[code1]' WHERE code='$_POST[code2]'";
		$query_run=mysqli_query($conn,$query);
		if($query_run){
			echo '<script type="text/javascript">alert("DATA UPDATED SUCCESSFULLY")</script>';
		}
		else{

			echo '<script type="text/javascript">alert("ERROR WHILE UPDATING")</script>';
		}

}
exit;
?>
