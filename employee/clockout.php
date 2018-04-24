<?php
include 'employeeheader.php';

 include '../dbh.php';
  global $db;

  date_default_timezone_set('US/Eastern');
  date_default_timezone_get();

  $unixTime = time();

  $storedate = date("Y-m-d h:i:s", $unixTime);


run_query("INSERT INTO clocking (emp_ID, timedate, inorout)
    VALUES (:id, :stdate, 'o')", array(':id' => $_SESSION['id'], ':stdate' => $storedate));
  print '<script>alert("Clocked out!");</script>';


?>
<link rel="stylesheet" type="text/css" href="../modifyStyle.css">
    <main>
        <div class="container-fluid" style = "background-color: #b0c4de;">
      <h3 align="center">The Time Clocked Out</h3>
      <div class="container" align="center">
        <div class="panel panel-default" style="width:40%;">
          <div class="panel-heading" style="background-color: darkblue; color: white; font-size:18px;">Category ID:</div>
          <div class="panel-body" style="font-size:18px; color: #000"><?php echo $storedate?></div>
        </div>
      </div>

      </div>
    </main>
  </body>
</main>
</html>
