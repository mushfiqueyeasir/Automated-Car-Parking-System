<!DOCTYPE html>
<html>
<head>
	<title>Add Drop</title>
	<link rel="stylesheet" type="text/css" href="CSS/parkingassign.css">

<header>

<div class="row">
<ul class="main-nav">

<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'dbh.inc.php';

$add_drop=$_POST['ad_dr'];
$type=$_POST['Type'];
$start=$_POST['Start'];
$end=$_POST['End'];


if($add_drop == 'Add')
{
	if( $type == 'car')
	{
	     for($i=$start; $i<=$end; $i++)
	    {
			$add = "INSERT INTO $type (`CarSlot`, `slot`) VALUES ( 'C' '$i', '0')";
			$conn->query($add);
		}
		echo '<div style="font-size:2em;color:green">Successfully Car Slot Added'.'</div>';
		echo '<br>';
	}
	else if( $type == 'carlarge')
	{
		 for($i=$start; $i<=$end; $i++)
	    {
			$add = "INSERT INTO $type (`CarLslot`, `Lslot`) VALUES ( 'CL' '$i', '0')";
			$conn->query($add);
		}
		echo '<div style="font-size:2em;color:green">Successfully Car Large Slot Added'.'</div>';
		echo '<br>';
	}
	else if( $type == 'bike')
	{
		 for($i=$start; $i<=$end; $i++)
	    {
			$add = "INSERT INTO $type (`BikeSlot`, `Bslot`) VALUES ( 'B' '$i', '0')";
			$conn->query($add);
		}
		echo '<div style="font-size:2em;color:green">Successfully Bike Slot Added'.'</div>';
		echo '<br>';
	}

		
}
else if( $add_drop == 'Drop' )
{
	if( $type == 'car')
	{
	     for($i=$start; $i<=$end; $i++)
	    {
	    	$slot = 'C'.$i;	    
			$Drop = "DELETE FROM $type WHERE CarSlot = '$slot' ";
			$conn->query($Drop);		
		}
		echo '<div style="font-size:2em;color:red">Successfully Car Slot Dropped'.'</div>';
		echo '<br>';
	}
	else if( $type == 'carlarge')
	{
		 for($i=$start; $i<=$end; $i++)
	    {
	    	$slot = 'CL'.$i;	 
			$Drop = "DELETE FROM $type WHERE CarLSlot = '$slot'";
			$conn->query($Drop);
		}
		echo '<div style="font-size:2em;color:red">Successfully Car Large Slot Dropped'.'</div>';
		echo '<br>';
	}
	else if( $type == 'bike')
	{
		 for($i=$start; $i<=$end; $i++)
	    {
	    	$slot = 'B'.$i;
			$Drop = "DELETE FROM $type WHERE BikeSlot = '$slot'";
			$conn->query($Drop);
		}
		echo '<div style="font-size:2em;color:red">Successfully Bike Slot Dropped'.'</div>';
		echo '<br>';
	}

}



$conn->close();
?>
<form>
	</form>
<input class="MyButton" type="button" value="Admin Panel" onclick="window.location.href='Admin Panel.php'" />
</form>





</ul>



</div>

</header>


</html>
