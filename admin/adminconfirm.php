<?php
  session_start();

  include '../dbh.php';

  $user_name = $_POST['username'];
  $password = $_POST['pass'];
  //query the admin table
  $query = run_query("SELECT * FROM admin WHERE admin_Username=:uname", array(':uname' => $user_name));
  $exists = count($query);
  $table_users = "";
  $table_password = "";

if ($exists > 0){
      foreach($query as $row)
      {
        $table_users = $row['admin_Username'];
        $table_password = $row['admin_Password'];
      }
      //takes username while also checking against hashed password
      if($user_name == $table_users && password_verify($password, $table_password))
      {
          $_SESSION['user_name'] = $user_name;
      }

      else
      {
        print '<script>alert("Incorrect Password!");</script>';

        print '<script>window.location.assign("adminlogin.php");</script>';
      }
}
 else
      {
        print '<script>alert("Incorrect Username!");</script>';

        print '<script>window.location.assign("adminlogin.php");</script>';
      }

?>

<!DOCTYPE html>
<html>
<?php include 'adminheader.php'; ?>
<style type=text/css>
    center{
        font-family:verdana;
        font-size:35px;
    }
</style>
<body>
      <div class="container-fluid" style = "background-color: #b0c4de;">
      <h1><center>Admin Login Confirmation </center></h1><br>
      <h4><center>Welcome, <?php echo $_SESSION['user_name']; ?>!</center></h4><br>
      <script>window.location.assign("adminfunctions.php");</script>

</div>
  </body>

</html>
