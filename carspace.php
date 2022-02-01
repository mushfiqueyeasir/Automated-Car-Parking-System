<!DOCTYPE html>
<html>
<head>
	<title>Check Space</title>
	<style>
		table {
			border-collapse: collapse;
			width: 20%;
			color: #d96459;
			font-family: monospace;
			font-size: 25px;
			text-align: center;
			margin-top: 50px;
			margin-left: 40%;
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
			<th>Car</th>
			<th>Car Large</th>
			<th>Bike</th>
		</tr>
		<?php
error_reporting(E_ERROR | E_PARSE);
include_once 'dbh.inc.php';

$check=0;
$counter=0;

$sqlcheck = "SELECT CarSlot FROM car";
$rescheck = $conn-> query($sqlcheck);
while($rowcheck = $rescheck-> fetch_assoc())
{
	$counter = $counter+1;
}
$check=$counter;
$counter=0;

$sqlcheck2 = "SELECT CarLSlot FROM carlarge";
$rescheck2 = $conn-> query($sqlcheck2);
while($rowcheck2 = $rescheck2-> fetch_assoc())
{
	$counter = $counter+1;
}
if($counter>$check)
	$check=$counter;
$counter=0;

$sqlcheck3 = "SELECT BikeSlot FROM bike";
$rescheck3 = $conn-> query($sqlcheck3);
while($rowcheck3 = $rescheck3-> fetch_assoc())
{
	$counter = $counter+1;
}
if($counter>$check)
	$check=$counter;
$counter=0;


$sql = "SELECT CarSlot FROM car WHERE slot='0'";
$res = $conn-> query($sql);

$sql2 = "SELECT CarLSlot FROM carlarge WHERE Lslot='0'";
$res2 = $conn-> query($sql2);

$sql3 = "SELECT BikeSlot FROM bike WHERE Bslot='0'";
$res3 = $conn-> query($sql3);
echo "</br>";
echo "</br>";
echo "<ol align='center'> <font color=red size='4pt' face='monospace'><h1>Available Space </h1> ";
for($i=0; $i<$check ; $i++)
{
	$row = $res-> fetch_assoc();
    $row2 = $res2-> fetch_assoc();
    $row3 = $res3-> fetch_assoc();
	echo "<tr><td>".$row["CarSlot"]."</td><td>".$row2["CarLSlot"]."</td><td>".$row3["BikeSlot"]."</td></tr>";
}

echo "</table>";




$conn->close();
?>

<input class="MyButton2" type=" button" value="Admin Panel" onclick="window.location.href='Admin Panel.php'" />







	</table>

</body>
</html>


