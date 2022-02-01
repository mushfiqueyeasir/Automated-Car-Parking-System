<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'dbh.inc.php';

$A=$_POST['flexRadioDefault'];
$B=$_POST['VehicleNumber'];
$C=$_POST['ContactNumber'];
$D=$_POST['PIN'];

$time=time();


if($A=='Car')
{
	$chose = "SELECT * FROM car Where slot='0' ";
    $result = mysqli_query($conn,$chose);
    $got=0;

    		while ($rows = mysqli_fetch_array($result) and $got==0)
		{
			$num=$rows ['CarSlot'];	
			$got=1;
		}
	
	if($got==0)
	{
		?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							
							<h1 style="color: red;">No Slot Available</h1>
							 
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php" " class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php
	}
	
		else
 		{

 			$one = "SELECT * FROM customer Where VehicleNumber='$B'";
 			$re = mysqli_query($conn,$one);
	
			if($ro = mysqli_fetch_array($re))
			{

				?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							
							<h1 style="color: red;">This Vehicle Already Exist In The ParkingZone</h1>
							 
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php" class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php
			}

			else
			{
				$up = "UPDATE car  SET slot=1 Where CarSlot='$num'";
			 	$conn->query($up);

    			$sql =" INSERT INTO  customer (Type,VehicleNumber,ContactNumber,PIN,ParkingSlot,PintTime) VALUES ('$A','$B','$C','$D','$num','$time')";
    			$conn->query($sql);

    			?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							<?php
							echo "<h1>Parking Slot Assigned:".$num."</h1>";
							 ?>
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php"  class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php     			
   				
			}



     		
 		}

}

else if($A=='Car Large')
{
	$chose2 = "SELECT * FROM carlarge Where Lslot='0' ";
    $result2 = mysqli_query($conn,$chose2);
    $got2=0;

    		while ($rows2 = mysqli_fetch_array($result2) and $got2==0)
		{
			$num2=$rows2['CarLSlot'];	
			$got2=1;
		}
	
	if($got2==0)
	{
		?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							
							<h1 style="color: red;">No Slot Available</h1>
							 
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php" class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php
	}	
		else
 		{

 			$two = "SELECT * FROM customer Where VehicleNumber='$B'";
 			$re2 = mysqli_query($conn,$two);
	
			if($ro2 = mysqli_fetch_array($re2))
			{

				?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							
							<h1 style="color: red;">This Vehicle Already Exist In The ParkingZone</h1>
							 
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php"  class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php
			}
			else

			{
			 $up2 = "UPDATE carlarge  SET Lslot=1 Where CarLSlot='$num2'";
			 $conn->query($up2);

    		$sql2 =" INSERT INTO  customer (Type,VehicleNumber,ContactNumber,PIN,ParkingSlot,PintTime) VALUES ('$A','$B','$C','$D','$num2','$time')";
    		$conn->query($sql2);
    		?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							<?php
							echo "<h1>Parking Slot Assigned:".$num2."</h1>";
							 ?>
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php"  class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php     		

			}

     		
 		}

}
else if($A=='Bike')
{
	$chose3 = "SELECT * FROM bike Where Bslot='0' ";
    $result3 = mysqli_query($conn,$chose3);
    $got3=0;

    		while ($rows3 = mysqli_fetch_array($result3) and $got3==0)
		{
			$num3=$rows3 ['BikeSlot'];	
			$got3=1;
		}
	
	if($got3==0)
	{
		?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							
							<h1 style="color: red;">No Slot Available</h1>
							 
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php"  class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php
	}
	
		else
 		{


 			$three = "SELECT * FROM customer Where VehicleNumber='$B'";
 			$re3 = mysqli_query($conn,$three);
	
			if($ro3 = mysqli_fetch_array($re3))
			{
				?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							
							<h1 style="color: red;">This Vehicle Already Exist In The ParkingZone</h1>
							 
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php"  class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php
			
			}
			else
			{
				$up3 = "UPDATE bike  SET Bslot=1 Where BikeSlot='$num3'";
			 $conn->query($up3);

    		$sql3 =" INSERT INTO  customer (Type,VehicleNumber,ContactNumber,PIN,ParkingSlot,PintTime) VALUES ('$A','$B','$C','$D','$num3','$time')";
    		$conn->query($sql3);

    		?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Status</title>

						 <!-- CSS only -->
						<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
						<style>
							body{
								background-color: #101820FF;
							}
							.margin-top{
								margin-top: 300px;
							}
						</style>
						</head>

						<body class="margin-top">
						<div class="d-flex justify-content-center text-success">
							<?php
							echo "<h1>Parking Slot Assigned:".$num3."</h1>";
							 ?>
							
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php"  class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php 
    		
			}


     		
 		}

}

$conn->close();
?>