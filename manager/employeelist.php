<?php include 'managerheader.php';


	include '../dbh.php';

    $query = run_query("SELECT * FROM employee");
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
	<p><b>The following employee information is in the system:</b></p>

	<table>
	<tbody>
		<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Username</td>
		<td> </td>
		</tr>
<!-- Print out employees from database -->
		<?php foreach ($query as $employee) : ?>
			<tr>
			<td><?php echo $employee['emp_FName']; ?></td>
			<td><?php echo $employee['emp_LName']; ?></td>
			<td><?php echo $employee['emp_UserName']; ?></td>
			<td align="center" style="padding-top: 4px; padding-bottom: 4px;">
				<a href="deleteemployee.php?id=<?php echo $employee['emp_UserName']; ?>" class="btn btn-default btn-sm"
					style="background-color:#990000; color:white; border-color:#990000">
          		<span class="glyphicon glyphicon-trash"></span> Delete</a></td>
			</tr>
			</tr>
		<?php endforeach; ?></p>

	</tbody>
	</table>

</body>
</html>
