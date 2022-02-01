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

<form method="post" action="test.php">
	<div class="d-flex justify-content-center margin-top">
		<div class="w-25">
		<div class="d-flex justify-content-center mb-4">
			<h4 class="text-white fs-1">Add Drop Slot</h4>
		</div>

<div class="accordion" id="accordionExample">

  <div class="accordion-item mb-2">
    <h2 class="accordion-header" id="headingOne">
      <option class="accordion-button" name="ad_dr"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" required>
        Select
      </option>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

       	<div class="form-check">
            <input class="form-check-input" value="Add" type="radio" name="ad_dr" id="flexRadioDefault1" required>
            <label class="form-check-label" for="flexRadioDefault1">
              Add
            </label>
        </div>

<div class="form-check">
  <input class="form-check-input" value="Drop" type="radio" name="ad_dr" id="flexRadioDefault1" required checked>
  <label class="form-check-label" for="flexRadioDefault1">
    Drop
  </label>
</div>

     </div>
    </div>
</div>



 <div class="accordion-item mb-3">
    <h2 class="accordion-header" id="headingOne">
      <option class="accordion-button" name="Type"  type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" required>
        Type
      </option>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">

        <div class="form-check">
            <input class="form-check-input" value="car" type="radio" name="Type" id="flexRadioDefault2" required>
            <label class="form-check-label" for="flexRadioDefault2">
              Car
            </label>
        </div>

      <div class="form-check">
        <input class="form-check-input" value="carlarge" type="radio" name="Type" id="flexRadioDefault2" required checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Car Large
        </label>
      </div>

      <div class="form-check">
        <input class="form-check-input" value="bike" type="radio" name="Type" id="flexRadioDefault2" required checked>
        <label class="form-check-label" for="flexRadioDefault2">
          Bike
        </label>
      </div>

     </div>
    </div>
</div>



<div class="form-floating mb-3">
  <input type="text" class="form-control" name="Start" id="floatingInput" placeholder="Vehicle Number" required>
  <label for="floatingInput">Starting Slot</label>
</div>

<div class="form-floating mb-3">
  <input type="text" name="End" pattern="[0-9]{0,11}" class="form-control" id="floatingPassword" placeholder="Contact Number" required>
  <label for="floatingPassword">Ending Slot</label>
</div>


</div>

<div class="d-flex justify-content-center">
	
<button type="submit" class="btn btn-success mt-3 fs-4">Submit</button>
<a href="Admin Panel.php" class="btn btn-warning mt-3 fs-4 ms-4">Admin</a>
</div>
	</div>
	</div>
</form>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>