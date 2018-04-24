<?php include 'adminheader.php';


	include '../dbh.php';

    $query = run_query("SELECT * FROM manager");

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
	<p><b>The following manager information is in the system:</b></p>

	<table>
	<tbody>
		<tr>
		<td>First Name</td>
		<td>Last Name</td>
		<td> </td>
		</tr>
<!-- Print out employees from database -->
		<?php foreach ($query as $manager) : ?>
			<tr>
			<td><?php echo $manager['manage_FName']; ?></td>
			<td><?php echo $manager['manage_LName']; ?></td>
			<td align="center" style="padding-top: 4px; padding-bottom: 4px;">
				<a href="deletemanager.php?id=<?php echo $manager['manage_Username']; ?>" class="btn btn-default btn-sm"
					style="background-color:#990000; color:white; border-color:#990000">
          		<span class="glyphicon glyphicon-trash"></span> Delete</a></td>
			</tr>
			</tr>
		<?php endforeach; ?></p>

	</tbody>
	</table>

</body>
</html>
