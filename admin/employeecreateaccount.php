<?php include 'adminheader.php'; ?>

<html>
<title>Sign Up</title>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}

input[type=text], input[type=password] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

.container {
    padding: 16px;
}

.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
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
            	input.setCustomValidity('');
        	}
    	}
	</script>
	</div>
	<button type="submit" class="btn btn-primary" name="submit">Register</button>
	</form>
	</div>
</body>
</html>
