<?php
	require_once('../controller/sessionController.php');	
?>

<!DOCTYPE html>
<html>

<head>

<style>
	.dashboard-left-panel{
		background-color: red;
		padding-bottom: 100%;
	}
</style>

    <title>Employer | Dashboard</title>
</head>

<body>
    <h5>Welcome Home <?=$_SESSION['username']?></h5>

    <!-- <a href="create.php"> Create New User</a> |
	<a href="user_list.php"> User List</a> |
	<a href="../controller/logoutController.php"> logout</a> -->

    <form>
        <table>
            <tr>
                <td>
                    <div class="dashboard-left-panel">
                        <nav> <a href="dashboard.php">Employer Dashboard</a></nav>
                        <nav> <a href="add_job.php">Add Job</a></nav>
                        <nav> <a href="#">Edit Job</a></nav>
                        <nav> <a href="profile.php">Profile</a></nav>
                        <nav> <a href="../controller/logoutController.php">Logout</a></nav>
                    </div>

                </td>
            </tr>
        </table>
    </form>

</body>

</html>