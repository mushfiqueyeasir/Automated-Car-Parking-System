<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Exit</title>
		<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<style>
	body{
		background-color: #101820FF;
	}
	.margin-top{
		margin-top: 200px;
	}
</style>

<body>

	<div class="d-flex justify-content-center margin-top">
		<div class="w-25">
		<div class="d-flex justify-content-center mb-4">
			<h4 class="text-white fs-1">Verify Your Information</h4>
		</div>


<form action="Search.php" method="post">
<div class="form-floating mb-3">
  <input type="text" name="VehicleNumber" class="form-control" id="floatingInput" placeholder="Vehicle Number">
  <label for="floatingInput">Vehicle Number</label>
</div>

<div class="form-floating">
  <input type="Password" name="PIN" class="form-control" id="floatingPassword" placeholder="Pin">
  <label for="floatingPassword">Pin</label>
</div>

</div>
  </div>

  <div class="d-flex justify-content-center">
  
<button type="submit" class="btn btn-danger mt-3 fs-4">Submit</button>
<a href="home.php" " class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
</div>
</form>
   






<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>