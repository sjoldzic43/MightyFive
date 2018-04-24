<?php include 'adminheader.php'; ?>

<!DOCTYPE html>
<html>
	<body>
	    <!--Employee Creation Form-->
 <div class="container-fluid" style = "background-color: #b0c4de;">
<h1 style="padding-left:200px">Create Employee Account</h1>
<form action="employeeaccountconfirm.php" method="POST" style="width:60%; padding-left:200px">
  <div class="form-group">
    <label>First Name:</label>
    <input class="form-control" type="text" name="firstname" placeholder="Firstname" required>
  </div>
  <div class="form-group">
    <label>Last Name:</label>
    <input class="form-control" type="text" name="lastname" placeholder="Lastname" required>
  </div>

<div class="form-group">
    <label>Address</label>
    <input class="form-control" type="text" name="address" placeholder="Home Address" required>

  <div class="form-group">
    <label>Phone:</label>
    <input class="form-control" type="tel" name="phone" placeholder="123-456-7890" pattern="^\d{3}-\d{3}-\d{4}$" required>
  </div>

  <div class="form-group">
    <label>Date of Birth:</label>
    <input class="form-control" type="text" name="dob" placeholder="YYYY-MM-DD" pattern="[0-9]{4}-(0[1-9]|1[012])-(0[1-9]|1[0-9]|2[0-9]|3[01])" required>
  </div>

  <div class="form-group">
    <label>SSN:</label>
    <input class="form-control" type="text" name="ssn" placeholder="000-00-0000" pattern="\d{3}-?\d{2}-?\d{4}" required>
  </div>

  <div class="form-group">
    <label>Username:</label>
    <input class="form-control" type="text" name="username" placeholder="Username" required>
  </div>
    <div class="form-group">
    <label>Password:</label>
    <input class="form-control" name="pass" required="required" type="password" id="password">
  </div>
   <div class="form-group">
    <label>Confirm Password:</label>
    <input class="form-control" name="password_confirm" required="required" type="password" id="password_confirm" oninput="check(this)">
    <script language='javascript' type='text/javascript'>
    	function check(input) {
        	if (input.value != document.getElementById('password').value) {
            	input.setCustomValidity('Password Must be Matching.');
        	} else {
            	// input is valid -- reset the error message
            	input.setCustomValidity('');
        	}
    	}
	</script>
	</div>
	<button type="submit" class="btn btn-primary" name="submit">Register</button>
	</form>

	</body>

</html>
