<!DOCTYPE html>
<html>
<head>
	<title>SEARCH GOPRAC</title>
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
			color: red;
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
		<h2>YOU DELETED FOLLOWING DATA !</h2>
	

<?php
	$connection=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($connection,'goprac');

	if(isset($_POST['delete'])){
		$id=$_POST['id1'];

		$query="SELECT * FROM goprac where code='$id'";
		$query_run=mysqli_query($connection,$query);
		while($row=mysqli_fetch_array($query_run))
		{
			?>
		<form action="index.php" method="post">
			<input type="text" name="code" value="<?php echo $row['code'] ?>"><br>
			<input type="text" name="start_date" value="<?php echo $row['start_date'] ?>"><br>
			<input type="text" name="end_date" value="<?php echo $row['end_date'] ?>"><br>
			<input type="submit" name="home" value="BACK TO HOME">
		</form>
		<?php
		}
	}

	if(isset($_POST['delete'])){
		$id=$_POST['id1'];

		$query="DELETE FROM goprac where code='$id'";
		$query_run=mysqli_query($connection,$query);
		
	}


?>
	</center>
</body>
</html>