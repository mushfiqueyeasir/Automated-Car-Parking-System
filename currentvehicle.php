<!DOCTYPE html>
<html>
<head>
	<title>Current Vehicles</title>
	<style>
		table {


			margin-left: 400px;
			margin-top: 50px;
			border-collapse: collapse;
			width: 60%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
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
margin-left: 900px;
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
		</tr>
		<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'dbh.inc.php';


$sql = "SELECT * FROM customer";
$res = $conn-> query($sql);
echo "</br>";
echo "</br>";
echo "<ol align='center'> <font color=red size='4pt' face='monospace'><h1>ALL Current Vehicles </h1> ";
while($row = $res-> fetch_assoc())
{   
	echo "<tr><td>".$row["Type"]."</td><td>".$row["VehicleNumber"]."</td><td>".$row["ContactNumber"]."</td><td>".$row["PIN"]."</td><td>".$row["ParkingSlot"]."</td><td>".$row["ParkingTime"]."</td></tr>";
}

echo "</table>";




$conn->close();
?>

<input class="MyButton2" type=" button" value="Admin Panel" onclick="window.location.href='Admin Panel.php'" />







	</table>

</body>
</html>


