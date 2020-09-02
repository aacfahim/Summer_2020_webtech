<?php
	session_start();

	if(isset($_COOKIE['STATUS'])){
		if($_COOKIE['STATUS'] == "OK"){
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin profile</title>
</head>
<body>
    <table border = "1">
        <tr>
            <td colspan = "3" align="center">
                <img width="50" height="40" src="Profile Picture">
            </td>
            <td rowspan = "5">
                <button type="submit" formaction="edit_profile.html">Edit Profile</button>
            </td>
        </tr>

        <tr>
            <td><strong>Name</strong></td>
            <td><?php echo $_COOKIE["name"];?></td>
        </tr>
        <tr>
            <td><strong>Username</strong></td>
            <td><?php echo $_COOKIE["userName"];?></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><?php echo $_COOKIE["email"];?></td>
        </tr>
        <tr>
            <td><strong>Email</strong></td>
            <td><?php echo $_COOKIE["userType"];?></td>
        </tr>
        
    </table>
</body>
</html>

<?php
}else{
		header('location: SuperAdminLogin.php');
		}
	}else{
		header('location: SuperAdminLogin.php?msg=Please Log in');
	}
?>
