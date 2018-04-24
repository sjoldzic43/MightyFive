<?php include 'adminheader.php'; ?>

<html>
<body>
    <!--Form to Create Admin-->
 <div class="container-fluid" style = "background-color: #b0c4de;">
<h1 style="padding-left:200px">Create Admin Account</h1>
<form action="accountconfirm.php" method="POST" style="width:60%; padding-left:200px">
  <div class="form-group">
    <label>First Name:</label>
    <input class="form-control" type="text" name="firstname" placeholder="Firstname" required>
  </div>
  <div class="form-group">
    <label>Last Name:</label>
    <input class="form-control" type="text" name="lastname" placeholder="Lastname" required>
  </div>
  <div class="form-group">
    <label>Email:</label>
    <input class="form-control" type="email" name="email" placeholder="Email" required>
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
     <button type="submit" class="btn btn-primary"/>Register</button>
 </form>

</body>
