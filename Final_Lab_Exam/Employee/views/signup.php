<?php

function validation(){

	if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "Service error ... Please try again.";
		}
		else if($_GET['error'] == 'name_error'){
			echo "Name should not contain Numbers.";
		}
		else if($_GET['error'] == 'null'){
			echo "All field are required.";
		}
		else if($_GET['error'] == 'null'){
			echo "All field are required.";
		}
		else if($_GET['error'] == 'username_error'){
			echo "Please make sure You username doesn't contain space and longer than 6 character";
		}
		else if($_GET['error'] == 'password_error'){
			echo "Please set a password of 6 or more charcaters long";
		}
	}

	if(isset($_GET['msg'])){
		if($_GET['error'] == 'success'){
			echo "Registration successfull";
		}
	}

}
	

?>
<!DOCTYPE html>
<html>

<head>
    <title>Signup page</title>
</head>

<body>
    <form action="../controller/signupController.php" method="post">
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