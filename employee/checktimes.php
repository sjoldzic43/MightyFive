<?php include 'employeeheader.php';
	include '../dbh.php';
    $queryOrders = run_query("SELECT `timedate`
                     FROM clocking WHERE `inorout` = 'i' AND `emp_ID` = :id", array(':id' => $_SESSION['id']));

?>

<html>
<head>
	<style>
		td
		{
			border-style: double;
			padding-left: 10px;
			padding-right: 10px;
		}
	</style>
</head>

<body>
    <div class="container-fluid" style = "background-color: #b0c4de;">
      <h1>Here is where you stand...</h1>
      <table>
    	<tbody>
    		<tr>
    		<th>Clocked In...</th>
    		</tr>

    		<?php foreach ($queryOrders as $in) : ?>
    			<tr>
    					<td><?php echo $in['timedate']; ?></td>

    			</tr>
    		<?php endforeach; ?></p>
    	</tbody>
    	</table>
  <br>
  <?php
  $queryOrders = run_query("SELECT `timedate`
                     FROM clocking WHERE `inorout` = 'o' AND `emp_ID` = :id", array(':id' => $_SESSION['id']));

  ?>
  <table>
  <tbody>
    <tr>
    <th>Clocked Out...</th>
    </tr>

    <?php foreach ($queryOrders as $out) : ?>
      <tr>
          <td><?php echo $out['timedate']; ?></td>

      </tr>
    <?php endforeach; ?></p>
  </tbody>
  </table>
</div>

</body>
</html>
