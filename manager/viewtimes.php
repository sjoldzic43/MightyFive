<?php include 'managerheader.php';
	include '../dbh.php';
    $queryOrders = run_query("SELECT * FROM clocking INNER JOIN employee ON (employee.emp_ID=clocking.emp_ID) WHERE `inorout` = 'i'");

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
	<p><b>Clock Ins Recorded...</b></p>
	<table>
	<tbody>
		<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Clock In</th>
		</tr>

		<?php foreach ($queryOrders as $i => $in) : ?>
			<tr>
				<?php if ((count($queryOrders[$i]) > 0) && ($queryOrders[$i]['emp_ID'] === $queryOrders[$i-1]['emp_ID'])){ ?>
					<td><?php echo " "; ?></td>
					<td><?php echo " "; ?></td>
				<?php } else{ ?>
					<td><?php echo $queryOrders[$i]['emp_FName']; ?></td>
					<td><?php echo $queryOrders[$i]['emp_LName']; ?></td>
					<?php } ?>
			<td><?php echo $queryOrders[$i]['timedate']; ?></td>
			</tr>
		<?php endforeach; ?></p>

	</tbody>
	</table>

  <?php
  	$queryOrders = run_query("SELECT * FROM clocking INNER JOIN employee ON (employee.emp_ID=clocking.emp_ID) WHERE `inorout` = 'i'");

  ?>
  <br>

  <p><b>Clock Outs Recorded...</b></p>
	<table>
	<tbody>
		<tr>
		<th>First Name</th>
		<th>Last Name</th>
		<th>Clock Out</th>
		</tr>

		<?php foreach ($queryOrders as $i => $out) : ?>
			<tr>
				<?php echo $queryOrders['emp_FName']; ?>
				<?php if ((count($queryOrders[$i]) > 0) && ($queryOrders[$i]['emp_ID'] === $queryOrders[$i-1]['emp_ID'])){ ?>
					<td><?php echo " "; ?></td>
					<td><?php echo " "; ?></td>
				<?php } else{ ?>
					<td><?php echo $queryOrders[$i]['emp_FName']; ?></td>
					<td><?php echo $queryOrders[$i]['emp_LName']; ?></td>
					<?php } ?>
			<td><?php echo $queryOrders[$i]['timedate']; ?></td>
			</tr>
		<?php endforeach; ?></p>

	</tbody>
	</table>
</div>

</body>
</html>
