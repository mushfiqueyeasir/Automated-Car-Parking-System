<!DOCTYPE html>
<html>
<head>
<title>Customer Entry</title>
<style>
			.main-nav
{  
	
	padding: 300px;
    float: center;
    text-align: center;
    font-size: 20px;   
   font-family: "Calibri", Times, serif;
   font-weight: bold;

}
*{

	margin: 0;
	padding: 0;


}

header  {

	background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)), url(bob/2908111.jpg);
	height: 100vh;
	background-size: cover;
	background-position: center;
}

.button {
    -webkit-border-radius: 18;
  -moz-border-radius: 18;
  border-radius: 18px;
  font-family: Arial;
  color: #ffffff;
  font-size: 17px;
  padding: 10px;
  background: #000000;
  text-decoration: none;	
  cursor: pointer;
}

.button:hover {
  background: #615461;
  text-decoration: none;
}
</style>


</head>

<header>

<div class="row">
<ul class="main-nav">
	<h1>Provide Your Information</h1><br><br>
 <form action="specified.php" method="post">
 Vehicle Number: <input type="text" name="VehicleNumber" required><br><br>
<button class="button" type="submit"  value="Submit">Submit</button>

</form>

	</ul>

</div>
</header>

</html>