<?php

error_reporting(E_ALL);
ini_set('display_errors','1');
  /*When the admin goes to create a manager account, it
    checks that the username has not already been used.
     If not, it successfully creates the manager account.*/

  //connect to database
  include '../dbh.php';

  //receives user input from form
  if($_SERVER["REQUEST_METHOD"] == "POST")
  {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $user_name = $_POST['username'];
    $password = $_POST['pass'];
    $bool = true;

    //query the employee table
    $query = run_query("SELECT * FROM manager");

    //displaying all rows from query
    foreach($query as $row)
    {
      /*the first username row is passed on to $table_username,
      and so on until the query is finished */
      $table_username = $row['manager_Username'];

      //checks if there are any matching fields
      if($user_name == $table_username)
      {
        $bool = false;
        //tell the user that the username has been taken
        print '<script>alert("Username has been taken!");</script>';
        //redirects to createmanager.php
        print '<script>window.location.assign("createmanager.php");</script>';
      }


    }

    //if there are no conflicts of username
    if($bool)
    {
      $hash = password_hash($password, PASSWORD_DEFAULT);
      //insert the values to table admins
      run_query("INSERT INTO manager (manage_FName, manage_LName, manage_Username, manage_Password)
        VALUES (:fname, :lname, :uname, :hash)", array(':fname' => $first_name, ':lname' => $last_name, ':uname' => $user_name, ':hash' => $hash));
      //prompt to let user know registration was succesful
      print '<script>alert("Successfully registered!");</script>';
    }
  }
?>

<!DOCTYPE html>
<html>
<?php include 'adminheader.php'; ?>
  <body>

      <h1>Manager Account Confirmation </h1><br>
      <h4>First Name:</h4>
      <?php echo $first_name; ?><br>
      <h4>Last Name:</h4>
      <?php echo $last_name; ?><br>
      <h4>Email:</h4>
      <?php echo $email; ?><br>
      <h4>Username:</h4>
      <?php echo $user_name; ?><br>


  </body>

</html>
