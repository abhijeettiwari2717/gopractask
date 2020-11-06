
<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
	<link rel="shortcut icon" href="logo1.png">
	
	<meta name="author" content="Abhijeet Tiwari">
	
	<meta name="description" content="">
	<meta name="keywords" content="">
	<meta charset="UTF-8">
	<title>Goprac</title>

	<link href="https://fonts.googleapis.com/css?family=Lora:400,700|Roboto:300,400" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">

	<script src="https://use.fontswesome.com/f890af1ed2.js"></script>
</head>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
   		<img src="logo1.png">
   		<ul class="navbar-nav mr-auto mt-4 mt-lg-0">
    		<li class="nav-item active">
        		<a class="nav-link" href="#">       </a>
    		</li>
			<li>
	    		<form action="search.php" method="post" class="form-inline my-2 my-lg-0">
      				<input class="form-control mr-sm-2" type="search" placeholder="Search by CODE" name="id" aria-label="Search">
      				<button action="search.php" name="search" class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form>
			</li>
    	</ul>
    	<form action="delete.php" method="post" class="form-inline my-2 my-lg-0">
			<input class="form-control mr-sm-2" type="search" placeholder="DLEETE by CODE" name="id1" aria-label="Search">
      		<button action="delete.php" name="delete" class="nav-link btn btn-outline-danger" >DELETE REOCRDS</button>  
    	</form>
	</div>
</nav>

<body onload="addDate(); dates();">
<main>
<div class="container">	
	<div class="d-flex justify-content-center">
		<form action="operation.php" method="post" class="w-50">
			<div class="py-2">
			<div class="form-group">
				<label class="abhi"><b>Enter 6 Digit Code</b></label>
				<?php $length = 6;
				$randomString = substr(str_shuffle(str_repeat($x='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ', ceil($length/strlen($x)) )),1,$length);
				?>

	     		<input name="code_field" class="form-control" type="text" value="<?php echo $randomString;?>" maxlength="50" size="30">
	 
				<small id="inpt" class="form-text text-muted">Alphanumeric Code Only</small>
	  		</div>
	  		<div class="form-group">
		    	<label class="abhi" ><b>Start Date</b></label>
		    	<input type="date" id="dates" name="start_date">
		 		</div>
		 		<div class="form-group">
		    	<label class="abhi"><b>End Date</b></label>
		    	<input type="text" id="end_date" name="end_date">
		    	<small id="inpt" class="form-text text-muted">Select the date after one year</small>
	    	</div>
	  		<div class="form-group">
	    		<button  class="btn btn-outline-success" name="create">Submit</button>
			</div>
			</div>	
		</form>
	</div>
</div>

<span ></span>
<?php
include_once 'fetch.php';
  
$query = "SELECT * FROM goprac";
$result=mysqli_query($GLOBALS['conn'],$query);


?>
<div class="container">

<table class="table table-striped table-class" id= "table-id">
  <thead class="thead-dark">
    <tr>
	  
      <th scope="col">Code</th>
      <th scope="col">Start Date</th>
      <th scope="col">End Date</th>
    </tr>
  </thead>
  <tbody>
    <?php
    	while($rows=mysqli_fetch_array($result)){
       ?>
       	<tr>
       		<td><?php echo $rows['code']; ?></td>
       		<td><?php echo $rows['start_date']; ?></td>
       		<td><?php echo $rows['end_date']; ?></td>
       	</tr>	
       	<?php	
    		}
    		?>
  </tbody>
</table>
</div>
</main>
<script>
	 	function addDate()
	 	{
	 		document.getElementById("dates").valueAsDate = new Date()
		    
		    
		    
		    date = new Date();
		    var month = date.getMonth()+1;
		    var day = date.getDate()-1;
		    var year = date.getFullYear()+1;

		    	document.getElementById("end_date").value = day + '-' + month + '-' + year;
			 
		}  					  
</script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>