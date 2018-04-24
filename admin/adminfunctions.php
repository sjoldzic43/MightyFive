<?php include 'adminheader.php'; ?>

<!DOCTYPE html>
<html>
    <!--List of what admins can do-->
   <style type="text/css">
      p{
      text-align: center;
      font-size: 35px;

      }
      a{
            text-align: center;
            font-family: verdana;
            color: darkblue;

      }
      h1{
            text-align: center;
            font-family: verdana;
      }
      h4{
            text-align: center;
            font-family: verdana;
      }

</style>
      <div class="container-fluid" style = "background-color: #b0c4de;">
            <h1>Select an option below: </h1><br>
            <h4 style="font-size: 30px;">Welcome, Admin!</h4><br>
            <hr style="border-width: 3px; border-color: black;">
            <p><a href="employeelist.php">View Employee List</a></p>
            <hr style="border-width: 3px; border-color: black;">
            <p><a href="adminlist.php">View Admin List</a></p>
            <hr style="border-width: 3px; border-color: black;">
            <p><a href="managerlist.php">View Manager List</a></p>
            <hr style="border-width: 3px; border-color: black;" >
            <p><a href="createaccount.php">Create Admin Account</a></p>
            <hr style="border-width: 3px; border-color: black;" >
            <p><a href="employeecreateaccount.php">Create Employee Account</a></p>
            <hr style="border-width: 3px; border-color: black;" >
            <p><a href="createmanager.php">Create Manager Account</a></p>
      </div>
  </body>

</html>
