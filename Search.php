<?php
$servername="localhost";
$username = "root";
$password ="";
$dbname = "carparking";
$conn = new mysqli ($servername, $username, $password, $dbname);

$VN=$_POST['VehicleNumber'];
$PN=$_POST['PIN'];

$tax=time();


	$show=" SELECT * FROM customer Where VehicleNumber='$VN' AND PIN='$PN'";
	$result = mysqli_query($conn,$show);
	
	if($rows = mysqli_fetch_array($result))
	{	
		$numm = $rows ['ParkingSlot'];
		$check = $rows ['Type'];
		$real= $rows ['PintTime'];
		if($check == 'Car')
		{
			
			$copy = " INSERT INTO customerrecord (Type,VehicleNumber,ContactNUmber,PIN,ParkingSlot,PintTime,ParkingTime)  SELECT * FROM customer Where VehicleNumber='$VN' ";
	        $conn->query($copy);

	        $costt = "UPDATE customerrecord  SET EintTime=$tax, Cost=round (30+((($tax-PintTime)/3600)*60)) Where  VehicleNumber='$VN'";	  
	        $conn->query($costt);
	        $taka ="SELECT Type, Cost From customerrecord Where VehicleNumber='$VN' and Type='Car' and PintTime= '$real'";
	        $re = mysqli_query($conn,$taka);
	        $r = mysqli_fetch_array($re);
	        $one=$r ['Cost'];
	        echo $one;
	     
	       
	         
	        
	        $upd = "UPDATE car  SET slot=0 Where CarSlot='$numm'";
	        $conn->query($upd);    
	    
	        $delete = "DELETE FROM customer Where VehicleNumber='$VN'";
		    $conn->query($delete);
		    
    		
		    ?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Vehicle Exit</title>

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
						<div >
					
									<h1 class="d-flex justify-content-center" style="color: green;">Vehicle Checked Out!</h1>
									<h3 class="d-flex justify-content-center" style="color: green;">
										Your Parking Cost is: 
										<?php
										echo $one;
										echo "৳";
										?>
									</h3>
								
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
	else if($check == 'Car Large') 
		{
			$copy2 = " INSERT INTO customerrecord (Type,VehicleNumber,ContactNUmber,PIN,ParkingSlot,PintTime,ParkingTime)  SELECT * FROM customer Where VehicleNumber='$VN' ";
	        $conn->query($copy2);

	        $costt2 = "UPDATE customerrecord  SET EintTime=$tax, Cost=round(40+((($tax-PintTime)/3600)*100)) Where  VehicleNumber='$VN'";
	        $conn->query($costt2);
	         $taka ="SELECT Cost From customerrecord Where VehicleNumber='$VN' and Type='Car Large' and PintTime= '$real' ";
	        $re = mysqli_query($conn,$taka);
	        $r = mysqli_fetch_array($re);
	        $one=$r ['Cost'];

	     
	        
	        $upd2 = "UPDATE carlarge  SET Lslot=0 Where CarLSlot='$numm'";
	        $conn->query($upd2);    
	    
	        $delete2 = "DELETE FROM customer Where VehicleNumber='$VN'";
		    $conn->query($delete2);
		    ?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Vehicle Exit</title>

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
						<div >
					
									<h1 class="d-flex justify-content-center" style="color: green;">Vehicle Checked Out!</h1>
									<h3 class="d-flex justify-content-center" style="color: green;">
										Your Parking Cost is: 
										<?php
										echo $one;
										echo "৳";
										?>
									</h3>
								
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
	else if($check =='Bike')
	   {
		    $copy3 = " INSERT INTO customerrecord (Type,VehicleNumber,ContactNUmber,PIN,ParkingSlot,PintTime,ParkingTime)  SELECT * FROM customer Where VehicleNumber='$VN' ";
	        $conn->query($copy3);

	        $costt3 = "UPDATE customerrecord  SET EintTime=$tax, Cost=round(10+((($tax-PintTime)/3600)*40)) Where  VehicleNumber='$VN'";
	        $conn->query($costt3);
	        session_start();
    		 $taka ="SELECT Cost From customerrecord Where VehicleNumber='$VN' and Type='Bike' and PintTime= '$real'";
	        $re = mysqli_query($conn,$taka);
	        $r = mysqli_fetch_array($re);
	        $one=$r ['Cost'];
	     
	        
	        $upd3 = "UPDATE bike  SET Bslot=0 Where BikeSlot='$numm'";
	        $conn->query($upd3);   
	    
	        $delete3 = "DELETE FROM customer Where VehicleNumber='$VN'";
		    $conn->query($delete3);
		    ?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Vehicle Exit</title>

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
						<div >
					
									<h1 class="d-flex justify-content-center" style="color: green;">Vehicle Checked Out</h1>
									<h3 class="d-flex justify-content-center" style="color: green;">
										Your Parking Cost is: 
										<?php
										echo $one;
										echo "৳";
										?>
									</h3>
								
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
	else
	{

		?>
    			<!DOCTYPE html>
						<html>
						<head>
							<meta charset="utf-8">
							<title>Invalid</title>

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
						<div >
					
								<h1 class="d-flex justify-content-center" style="color: red;">Invalid Vehicle Number Or PIN</h1>
								
						</div>

						<div class="d-flex justify-content-center">
							     <a href="home.php"  class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
							     <a href="exit.php"  class="btn btn-danger mt-3 fs-4 ms-4">Back</a>
							</div>

						<!-- JavaScript Bundle with Popper -->
						<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
						</body>
						</html>
    			<?php
	}

$conn->close();
?>