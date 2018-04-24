<?php
    include 'adminheader.php';
  include '../dbh.php';
  global $db;

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];


    $user_name = $_POST['username'];
    $password = $_POST['pass'];
    $bool = true;

    $query = run_query("SELECT * FROM employee");

    foreach($query as $row)
    {
      $table_username = $row['emp_UserName'];
      if($user_name == $table_username)
      {
        $bool = false;
        print '<script>alert("Username has been taken!");</script>';
        print '<script>window.location.assign("employeecreateaccount.php");</script>';
      }


    }

    if($bool)
    {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      run_query("INSERT INTO employee (emp_FName, emp_LName, emp_username, emp_password)
        VALUES (:fname, :lname, :uname, :hash)", array(':fname' => $first_name, ':lname' => $last_name, ':uname' => $user_name, ':hash' => $hash));
      print '<script>alert("Successfully registered!");</script>';
    }
  }
?>

<!DOCTYPE html>
<html>
  <body>
<div class="container-fluid" style = "background-color: #b0c4de;">
      <h1>Employee Account Confirmation </h1><br>
      <h4>First Name:</h4>
      <?php echo $first_name; ?><br>
      <h4>Last Name:</h4>
      <?php echo $last_name; ?><br>
      <h4>Username:</h4>
      <?php echo $user_name; ?><br>

     </div>

  </body>

</html>
