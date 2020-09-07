<?php
   
    function validation(){
        if(isset($_GET['error'])){
            if($_GET['error'] == 'null'){
                echo "All field is required.";
            }
            else if($_GET['error'] == 'invalid'){
                echo "Something went wrong";
            } 
            else if($_GET['error'] == 'invalid_request'){
                echo "Please login first..";
            }
           
        }

    }

    
?>


<fieldset align="center">
    <legend><b>LOGIN</b></legend>
    <form action="../controller/loginController.php" method="POST">
        <table align = "center">
            <tr>
                <td>Username</td>
				<td>:</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
				<td>:</td>
                <td><input type="password" name="password"></td>
            </tr>
        </table>
        <hr/>
		<input name="remember" type="checkbox">Remember Me
		<br/><br/>
        <input type="submit" name="submit" value="Submit"> 
        <a href="signup.php">Register</a>  

        <?php validation(); ?>
          

		
    </form>
</fieldset>