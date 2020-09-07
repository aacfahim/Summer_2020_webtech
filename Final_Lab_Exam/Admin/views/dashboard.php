<?php
    require_once('../controller/sessionController.php');	
    require_once('../services/userService.php');


    $user = SearchByUsername($_SESSION['username']);

    if(isset($_GET['error'])){
		if($_GET['error'] == 'dberror'){
			echo "something wrong ...please try again.";
		}
    }
    


?>

<!DOCTYPE html>
<html>

<head>

<style>
	.dashboard-left-panel{
		background-color: yellow;
		padding-bottom: 100%;
	}
    .search-panel{
        padding-right: 50%;
        padding-top: 10%;
    }

</style>
   

    <title>ADMIN | Dashboard</title>
</head>

<body>
    <h5>Welcome Home <?=$_SESSION['username']?></h5>

    <!-- <a href="create.php"> Create New User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../controller/logoutController.php"> logout</a> -->

    <form action="../controller/searchController.php">
        <table>
            <tr>
                <td>
                    <div class="dashboard-left-panel">
                        <nav> <a href="dashboard.php">Admin Dashboard</a></nav>
                        <nav> <a href="register_employer.php">Register New Employer</a></nav>
                        <nav> <a href="employer_list.php">Edit Employer</a></nav>
                        <nav> <a href="profile.php">Profile</a></nav>
                        <nav> <a href="../controller/logoutController.php">Logout</a></nav>
                    </div>

                    <div>
                        <td>
                            <input type="text" placeholder="Enter Username" id="username" name="username">
                            <input type="button" id="submit" name="submit"value="SEARCH" onclick="searchAuthor()">
                        </td>
                        
                    </div>

                </td>

                <td class="search-panel">
                    <div id="search-result"></div>

                </td>
            </tr>


            <!-- <tr>
                <td class="search-panel">
                    <div id="search-result"></div>

                </td>
            </tr> -->


        </table>
    </form>

    <script>
            function searchAuthor(){

                var username = document.getElementById("username").value;
                var xhttp = new XMLHttpRequest();

                xhttp.open("POST", "../controller/searchController.php?username="+username, true);
                xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                xhttp.send('username='+username);
                // xhttp.setRequestHeader()
                // xhttp.send("name="+name+"&&username="+username);
                //document.getElementById("result").innerHTML = xhttp.responseText;

                xhttp.onreadystatechange = function(){

                    if(this.readyState == 4 && this.status == 200){
                        //alert(this.responseText);
                        document.getElementById("search-result").innerHTML = this.responseText;
                    }
                }



        }
    </script>

</body>

</html>