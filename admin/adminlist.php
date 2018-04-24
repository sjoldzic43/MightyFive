<?php include 'adminheader.php';
//connect to the database
	include '../dbh.php';

   //gets ready to display admins
    $query = run_query("SELECT * FROM admin");

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
	<p><b>The following admin information is in the system:</b></p>

	<table>
	<tbody>
		<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td>Email</td>
		<td>Username</td>
		</tr>



		<?php foreach ($query as $admin) : ?>
			<tr>
			<td><?php echo $admin['admin_FName']; ?></td>
			<td><?php echo $admin['admin_LName']; ?></td>
			<td><?php echo $admin['admin_Email']; ?></td>
			<td><?php echo $admin['admin_Username']; ?></td>
			</tr>
		<?php endforeach; ?></p>

	</tbody>
	</table>

</body>
</html>
