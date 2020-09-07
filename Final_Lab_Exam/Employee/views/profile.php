<?php
	
	require_once('../controller/sessionController.php');	
    require_once('../services/userService.php');	
    
    //$username = $_SESSION['username'];
    // $name = $_SESSION['name'];
    // $email = $_SESSION['email'];

    $user = getByUsername($_SESSION['username']);


	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
</head>
<body>
    <h5><?=$_SESSION['username']?></h5>

    <form>
        <table>
            <tr>
                <td>Name</td>
                <td><?=$user['name']?></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><?=$user['username']?></td>
            </tr>
            <tr>
                <td>Contact</td>
                <td><?=$user['contact']?></td>
            </tr>

        </table>
    </form>
    
</body>
</html>