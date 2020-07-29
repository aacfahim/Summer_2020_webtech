

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROFILE</title>
</head>
<body>
    <form>
        
        <table border="1">
            <tr>
            <td colspan ="2">
            <img width="50" height="40" src="images/logo.png">
             
             <align = right> Logged in as <?php

                echo $_COOKIE["userName"]
                ?> </align>
           

            </td>
           
            </tr>

            <tr rowspan>
            <td >
            <legend>Account</legend>
            <ul>
                <li><a href="dashboard.php">Dashboard</a></li>
            </ul>
            <ul>
                <li><a href="">View Profile</a></li>
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
                <fieldset>
                    <legend>PROFILE</legend>
                    <table>
        
                        <tr>
                            <td>Name: </td>
                            <td> <?php echo $_COOKIE["name"];?> </td>
                        </tr>

                        <tr>
                            <td>Email: </td>
                            <td> <?php echo $_COOKIE["email"];?> </td>
                            <td colspan="3">
                                <img align="right" width="100" height="120" src="images/user.png">
                            </td>
                        </tr>

                        <tr>
                            <td>Gender: </td>
                            <td> <?php echo $_COOKIE["gender"];?> </td>
                        </tr>

                        <tr>
                            <td>Date of Birth: </td>
                            <td><?php echo $_COOKIE["day"];?>/
                            <?php echo $_COOKIE["month"];?>/
                            <?php echo $_COOKIE["year"];?></td>

                        </tr>
                        

                    </table>
                </fieldset>

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