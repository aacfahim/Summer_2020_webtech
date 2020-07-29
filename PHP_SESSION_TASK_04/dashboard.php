

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Page</title>
</head>
<body>
    <form>
        
        <table border="1" align="center" size="100%">
            <tr>
            <td colspan ="2">
            <img width="50" height="40" src="images/logo.png">
             
             <align="right"> Logged in as <?php

                echo $_COOKIE["userName"]
                ?> </align>
           

            </td>
           
            </tr>

            <tr>
            <td >
            <legend>Account</legend>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
            </ul>
            <ul>
                <li><a href="view_profile.php">View Profile</a></li>
            </ul>
            <ul>
                <li><a href="edit_profile.php">Edit Profile</a></li>
            </ul>
            <ul>
                <li><a href="">Chanage Profile Picture</a></li>
            </ul>
            <ul>
                <li><a href="change_password.html">Change Password</a></li>
            </ul>
            <ul>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            </td>   
            <td>
                <strong> Welcome <?php echo $_COOKIE["name"]; ?></strong>
            </td>
        </tr>



        <tr>
            <td colspan="2" align=center>
            <footer>Copyright <span>&#169;</span>2020</footer></td>
        </tr>
        

        </table>
    </form>
    
</body>
</html>