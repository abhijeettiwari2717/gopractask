<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "goprac";

	$con=mysqli_connect($servername,$username,$password);
	
	if(!$con){
		echo "not connected...";
	}
	if(!mysqli_select_db($con,$dbname))
	{
		echo "not selected...";
	}
	

	$code = $_POST['code_field'];
	$startdate = $_POST['start_date'];
	$enddate = $_POST['end_date'];
	$sql = "INSERT INTO goprac (code,start_date,end_date) VALUES ('$code','$startdate','$enddate')";
	if(!mysqli_query($con,$sql)){
	echo "not inserted...";
	}
	else{
	echo "inserted";
	header("Location:index.php");
    exit;
	}
    
?>