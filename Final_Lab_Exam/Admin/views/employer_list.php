<?php
	require_once('../controller/sessionController.php');
	require_once('../services/userService.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>user List</title>
</head>
<body>

	<h1>Employer List page</h1>

	<?php
		$users = getAllUser();
	?>

	<table border=1> 
		<tr>
			<td>NAME</td> 
			<td>USERNAME</td>
			<td>CONTACT</td> 
			<td>USERNAME</td>
            <td>PASSWORD</td>
			<td>ACTION</td>
            
		</tr>
		<?php for($i=0; $i != count($users); $i++ ){ ?>
			<tr>
				<td><?= $users[$i]['name'] ?></td>
				<td><?= $users[$i]['company_name'] ?></td>
				<td><?= $users[$i]['contact'] ?></td>
                <td><?= $users[$i]['username'] ?> </td>
                <td><?= $users[$i]['password'] ?> </td>
				<td>
					<a href="edit_employer.php?username=<?=$users[$i]['username']?>"> Edit</a> |
					<a href="delete.php?username=<?=$users[$i]['username']?>"> Delete</a> 

				</td>
			</tr>
		<?php } ?>
	</table>

</body>
</html>