<?php
	
	require_once('../controller/sessionController.php');	
	require_once('../services/userService.php');	


	$user = getByUsername($_GET['username']);

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Employers</title>
</head>
<body>
	<form action="../services/userService.php" method="post">
		<fieldset>
			<legend>Edit User</legend>
			<table>
                <tr>
					<td>Name</td>
					<td><input type="text" name="name" value="<?=$user['name']?>"></td>
                </tr>
				<tr>
					<td>Username</td>
					<td><input type="text" name="username" value="<?=$user['username']?>"></td>
                </tr>
                <tr>
					<td>Company Name</td>
					<td><input type="text" name="company_name" value="<?=$user['company_name']?>"></td>
				</tr>
				<tr>
					<td>Password</td>
					<td><input type="password" name="password" value="<?=$user['password']?>"></td>
				</tr>
				<tr>
					<td>Contact</td>
					<td><input type="text" name="contact" value="<?=$user['contact']?>"></td>
				</tr>
				<tr>
					<td></td>
					<td>
						<input type="hidden" name="id" value="<?=$user['username']?>">
                        <input type="submit" name="update" value="update">
                        
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>