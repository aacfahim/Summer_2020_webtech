
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
    <title>Users</title>
</head>
<body>

<form>
        <table border=1>
            <h1>USERS </h1>
            <tr>
                <td>ID</td> 
                <td>NAME</td>
                <td>EMAIL</td>
                <td>USER TYPE</td>
            </tr>
                <td><?php echo $_COOKIE["userName"];?> </td> 
                <td> <?php echo $_COOKIE["name"];?> </td>
                <td><?php echo $_COOKIE["email"];?></td>
                <td><?php echo $_COOKIE["userType"];?></td>

            <tr>
                <td></td>
            </tr>

        </table>
    </form>
    
</body>
</html>


<?php

}else{
		header('location: login.html');
		}
	}else{
		header('location: login.html?msg=Please Log in');
	}



?>