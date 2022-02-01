<?php
$error = "";
$success = "";

if(isset(($_POST['submit'])))
{
    $username = $_POST['username'];
     $password = $_POST['password'];
    if($username == "admin")
    {
        if($password == "admin")
        {
            $error = "";
            $success = "Welcome Admin!!!";           
            header("location:Admin Panel.php");
        }
        else
        {
            $error = "Invalid Password!!!";
            $success = "";
        }
    }
    else
    {
            $error = "Invalid Username!!!";
            $success = "";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>index</title>

	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<script src="https://kit.fontawesome.com/e5de7da259.js" crossorigin="anonymous"></script>

<style>

	.background-img{
		background-color:#101820FF;
		height: 700px;
	}

	.margin-top{
		margin-top: 250px;
	}
	.rounded-bottom-st{
		border-bottom-right-radius: 10px;
		border-bottom-left-radius: 10px;
	}
.rounded-bottom-st-1{
 border-radius: 10px;
}

</style>

</head>
<body class="" style="background-color: #101820FF;">
<div class="container  rounded-bottom-st"  style="background-color: #F2AA4CFF;">
	<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-md">
  	<a class="navbar-brand fw-bolder fs-1 d-flex align-items-center" href="#">
    <img src="parking.png" width="40%"  class="d-inline-block align-top" alt="">
    CAR PARKING
  </a>
  </div>

  <div>
  	<div class="dropdown w-50 p-3 rounded-bottom-st-1">
  <a class="btn btn-secondary dropdown-toggle rounded-bottom-st-1" style="background-color: #101820FF;" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
   <i class="fas fa-user fa-2x"></i>
   <p>ADMIN</p>
  </a>

  <ul class="dropdown-menu" style="width: 250px; background-color: #B1B3B3FF;" aria-labelledby="dropdownMenuLink">
  	<form method="post"> 
    <li>
    	<div class="form-floating mb-3 w-75 mt-5 position-relative top-0 start-50 translate-middle">
    	
  <input type="text" name="username" class="form-control" id="floatingInput" placeholder="User Id">
  <label for="floatingInput">User Id</label>
</div>
<div class="form-floating w-75 position-relative top-50 start-50 translate-middle">
  <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
  <label for="floatingPassword">Password</label>
  <p1 class="error d-flex justify-content-center" style="color: red;" ><?php echo $error; ?></p1>


</div>

<div class="d-flex justify-content-center">

	<input type="submit" name="submit" class="btn btn-outline-success" value="Login">

</div>

    </li>
    	</form>
    
  </ul>
</div>
  </div>

</nav>

</div>


<div class=" background-img">
	<div class="d-flex justify-content-center">
	<div class="margin-top">
		<a href="entry.php" type="button" class="btn btn-outline-success mb-3 pt-3 pb-3 ps-4 pe-4 fs-3 fw-bolder border border-3 rounded-2 border border-success">Vehicle Entry</a> <br>
        <a href="exit.php" type="button" class="btn btn-outline-danger mb-2 pt-3 pb-3 ps-4 pe-4 fs-3 fw-bolder border border-3 border border-danger">Vehicle Exit &nbsp;</a>
	</div>
</div>
</div>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>