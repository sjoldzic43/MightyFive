<?php
  session_start();
  include '../dbh.php';
  $user_name = $_POST['username'];
  $password = $_POST['pass'];
  $query = run_query("SELECT * FROM employee WHERE emp_Username=:uname", array(':uname' => $user_name));
  $exists = count($query);
  $table_users = "";
  $table_password = "";
  $id = "";
  if ($exists > 0){
      foreach($query as $row)
      {
        $table_users = $row['emp_UserName'];
        $table_password = $row['emp_Password'];
        $id = $row['emp_ID'];
      }
      if(($user_name == $table_users) && password_verify($password, $table_password))
      {
          $_SESSION['user_name'] = $user_name;
          $_SESSION['id'] = $id;
      }
      else
      {
        print '<script>alert("Incorrect Password!");</script>';
        print '<script>window.location.assign("employeelogin.php");</script>';
      }
  }
  else
      {
        print '<script>alert("Incorrect Username!");</script>';
        print '<script>window.location.assign("employeelogin.php");</script>';
      }

?>

<!DOCTYPE html>
<html>
<?php include 'employeeheader.php'; ?>
<style type=text/css>
    center{
        font-family:verdana;
        font-size:35px;
    }
</style>
<body>
<div class="container-fluid" style = "background-color: #b0c4de;">
      <h1><center>Employee Login Confirmation</center></h1><br>
      <h4><center>Welcome, <?php echo $_SESSION['user_name']; ?>!</center></h4><br>
      <script>window.location.assign("employeeindex.php");</script>
</div>
  </body>

</html>
