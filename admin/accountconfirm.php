<?php include 'adminheader.php';

  include '../dbh.php';

  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $email_address = $_POST['email'];
    $user_name = $_POST['username'];
    $password = $_POST['pass'];

    $bool = true;

    $query = run_query("SELECT * FROM admin");

    foreach($query as $row)
    {
      $table_username = $row['admin_Username'];

      //checks if there are any matching fields
      if($user_name == $table_username)
      {
        $bool = false;
        //tell the user that the username has been taken
        print '<script>alert("Username has been taken!");</script>';
        //redirects to createaccount.php
        print '<script>window.location.assign("createaccount.php");</script>';
      }

      /*the first email row is passed on to $table_email,
      and so on until the query is finished */
      $table_email = $row['admin_Email'];

      //checks if there are any matching fields
      if($email_address == $table_email)
      {
        $bool = false;
        //tell the user that the email has been taken
        print '<script>alert("Email has already been used!");</script>';
        //redirects to createaccount.php
        print '<script>window.location.assign("createaccount.php");</script>';
      }
    }

    if($bool)
    {
        //hash the created password
     $hash = password_hash($password, PASSWORD_DEFAULT);
    //put into admin table
      run_query("INSERT INTO admin (admin_FName, admin_LName, admin_Email, admin_Username, admin_Password)
        VALUES (:fname, :lname, :email, :uname, :hash)", array(':fname' => $first_name, ':lname' => $last_name, ':email' => $email_address, ':uname' => $user_name, ':hash' => $hash));
      print '<script>alert("Registration Successful");</script>';
    }
  }
?>

<div class="container-fluid" style = "background-color: #b0c4de;">
      <!--Print out confirmation-->
      <h1>Admin Account Confirmation</h1><br>
      <h4>First Name:</h4>
      <?php echo $first_name; ?><br>
      <h4>Last Name:</h4>
      <?php echo $last_name; ?><br>
      <h4>Email:</h4>
      <?php echo $email_address; ?><br>
      <h4>Username:</h4>
      <?php echo $user_name; ?><br>
</div>

  </body>

</html>
