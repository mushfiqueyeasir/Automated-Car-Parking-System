<!DOCTYPE html>
<html>
<head>
	<title>Specified Vehicle</title>
	<style>
		table {
			border-collapse: collapse;
			width: 70%;
			color: #d96459;
			font-family: monospace;
			font-size: 20px;
			text-align: center;
			margin-left: 300px;
		}

		th{
			background-color: #d96459;
			color: white;
		}
		tr:nth-child(even) {background-color: #f2f2f2}

		.MyButton2 {
width: 100px;
padding: 20px;
cursor: pointer;
font-weight: bold;
font-size: 15px;
margin-left: 920px;
margin-top: 100px;


background: #FF0000;
color: #fff;
border: 1px solid #3366cc;
border-radius: 10px;

}

.MyButton2:hover {
color: #fff;

border: 1px solid #fff;
}

	</style>
</head>
<body>
	<table>
		<tr>
			<th>Type</th>
			<th>Vehicle Number</th>
			<th>Contact Numbe</th>
			<th>PIN</th>
			<th>Parking Slot</th>
			<th>Parking Time</th>
			<th>Exit Time</th>
			<th>Parking Cost</th>
		</tr>

		<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'dbh.inc.php';

$VN=$_POST['VehicleNumber'];
$sql = "SELECT * FROM customerrecord";
$res = $conn-> query($sql);
$temp=0;
$massage=0;

	while($row = $res-> fetch_assoc() )
{   
	if($VN==$row["VehicleNumber"])
	{
		if($massage==0)
		{
			echo "<ol align='center'> <font color=red size='4pt' face='monospace'><h1> History </h1> ";
		}
		

		echo "<tr><td>".$row["Type"]."</td><td>".$row["VehicleNumber"]."</td><td>".$row["ContactNumber"]."</td><td>".$row["PIN"]."</td><td>".$row["ParkingSlot"]."</td><td>".$row["ParkingTime"]."</td><td>".$row["ExitTime"]."</td><td>".$row["Cost"]."</td></tr>";
		$temp=1;
		$massage=1;
	}	
	
}
if($temp==0)
{
	echo "<ol align='center'> <font color=red size='4pt' font face='monospace'><h1> No Data Found </h1> ";
}

		
		
echo "</table>";







$conn->close();
?>

<input class="MyButton2" type=" button" value="Admin Panel" onclick="window.location.href='Admin Panel.php'" />
</form>







	</table>

</body>
</html>


