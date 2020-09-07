<?php 
    require_once('../controller/sessionController.php');	
    require_once('../services/userService.php');

?>
<!DOCTYPE html>
<html>

<head>
    <title>Register New Employer</title>
</head>

<body>
    <form action="../controller/registerController.php" method="post">
        <fieldset>
            <legend>SignUp</legend>
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Company Name</td>
                    <td><input type="text" name="company_name"></td>
                </tr>
                <tr>
                    <td>Username</td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td><input type="contact" name="contact"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="Submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>

</html>