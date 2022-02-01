<?php
$A=$_POST['flexRadioDefault'];
echo $A;
$B=$_POST['VehicleNumber'];
$C=$_POST['ContactNumber'];
$D=$_POST['PIN'];


$servername="localhost";
$username = "root";
$password ="";
$dbname = "carparking";

$time=time();

$conn = new mysqli ($servername, $username, $password, $dbname);

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
		header("location:parkingnotassign.php");
	}
	
		else
 		{

 			$one = "SELECT * FROM customer Where VehicleNumber='$B'";
 			$re = mysqli_query($conn,$one);
	
			if($ro = mysqli_fetch_array($re))
				header("location:parkingexist.php");

			else
			{
				$up = "UPDATE car  SET slot=1 Where CarSlot='$num'";
			 	$conn->query($up);

    			$sql =" INSERT INTO  customer (Type,VehicleNumber,ContactNumber,PIN,ParkingSlot,PintTime) VALUES ('$A','$B','$C','$D','$num','$time')";
    			$conn->query($sql);

    			session_start();
    		    $_SESSION['slot'] = $num;
    			header("location:parkingassign.php");
    			
   				
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
			$num2=$rows2 ['CarLSlot'];	
			$got2=1;
		}
	
	if($got2==0)
	{
		header("location:parkingnotassign.php");
	}	
		else
 		{

 			$two = "SELECT * FROM customer Where VehicleNumber='$B'";
 			$re2 = mysqli_query($conn,$two);
	
			if($ro2 = mysqli_fetch_array($re2))
				header("location:parkingexist.php");
			else

			{
				$up2 = "UPDATE carlarge  SET Lslot=1 Where CarLSlot='$num2'";
			 $conn->query($up2);

    		$sql2 =" INSERT INTO  customer (Type,VehicleNumber,ContactNumber,PIN,ParkingSlot,PintTime) VALUES ('$A','$B','$C','$D','$num2','$time')";
    		$conn->query($sql2);
    		session_start();
    		$_SESSION['slot'] = $num2;

    		    header("location:parkingassign.php");
    		

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
		header("location:parkingnotassign.php");
	}
	
		else
 		{


 			$three = "SELECT * FROM customer Where VehicleNumber='$B'";
 			$re3 = mysqli_query($conn,$three);
	
			if($ro3 = mysqli_fetch_array($re3))
			{
				header("location:parkingexist.php");
			
			}
			else
			{
				$up3 = "UPDATE bike  SET Bslot=1 Where BikeSlot='$num3'";
			 $conn->query($up3);

    		$sql3 =" INSERT INTO  customer (Type,VehicleNumber,ContactNumber,PIN,ParkingSlot,PintTime) VALUES ('$A','$B','$C','$D','$num3','$time')";
    		$conn->query($sql3);

    		session_start();
    		$_SESSION['slot'] = $num3;

    		header("location:parkingassign.php");
    		
			}


     		
 		}

}

$conn->close();
?>