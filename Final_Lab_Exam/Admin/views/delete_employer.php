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
	<title>Delete Employer</title>
</head>
<body>
	<form action="../services/userService.php" method="post">
		<fieldset>
			<legend>Delete Employer</legend>
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
                        <input type="hidden" name="username" value="<?=$user['username']?>">
                        <?php echo "Are you sure want to delete?" ?>
						
                        <input type="submit" name="yes_delete" value="Delete">
                        <input type="submit" name="no_delete" value="Cancel">
                        
					</td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>