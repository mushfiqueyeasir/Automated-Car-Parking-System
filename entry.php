<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Entry</title>
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

<form method="post" action="status.php">
	<div class="d-flex justify-content-center margin-top">
		<div class="w-25">
		<div class="d-flex justify-content-center mb-4">
			<h4 class="text-white fs-1">Provide Your Information</h4>
		</div>

<div class="accordion" id="accordionExample">
  <div class="accordion-item mb-3">
    <h2 class="accordion-header" id="headingOne">
      <option class="accordion-button" name="Type"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" required>
        Vehicle Type
      </option>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

       	<div class="form-check">
            <input class="form-check-input" value="Car" type="radio" name="flexRadioDefault" id="flexRadioDefault1" required>
            <label class="form-check-label" for="flexRadioDefault1">
              Car
            </label>
        </div>

<div class="form-check">
  <input class="form-check-input" value="Car Large" type="radio" name="flexRadioDefault" id="flexRadioDefault2" required checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Car Large
  </label>
</div>

<div class="form-check">
  <input class="form-check-input" value="Bike" type="radio" name="flexRadioDefault" id="flexRadioDefault2" required checked>
  <label class="form-check-label" for="flexRadioDefault2">
    Bike
  </label>
</div>

     </div>
    </div>
</div>



<div class="form-floating mb-3">
  <input type="text" class="form-control" name="VehicleNumber" id="floatingInput" placeholder="Vehicle Number" required>
  <label for="floatingInput">Vehicle Number</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="ContactNumber" pattern="[0-9]{0,11}" class="form-control" id="floatingPassword" placeholder="Contact Number" required>
  <label for="floatingPassword">Contact Number</label>
</div>

<div class="form-floating">
  <input type="text" name="PIN" class="form-control" id="floatingPassword" placeholder="Pin" required >
  <label for="floatingPassword">Pin</label>
</div>

</div>

<div class="d-flex justify-content-center">
	
<button type="submit" class="btn btn-success mt-3 fs-4">Submit</button>
<a href="home.php" " class="btn btn-warning mt-3 fs-4 ms-4">Home</a>
</div>
	</div>
	</div>
</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>