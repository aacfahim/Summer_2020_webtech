<?php
    
    include("connection.php");
    session_start();
	
	if(isset($_POST['submit'])){

		$username = $_POST['userName'];
		$password = $_POST['password'];
		
		if($username == "" || $password == "" ){
            header('location: login.html?msg=All fields are required');
		}else{
			
			$sql = "select * from userLogin where id='".$username."' and password='".$password."'";


			$result = mysqli_query($connection, $sql);
			$row = mysqli_fetch_assoc($result);


			if(count($row) > 0){

                $userName = $row['ID'];
                $name = $row['Name'];
                $email = $row['Email'];
                $userType = $row['Type'];

                //echo  $userType;

                setcookie('STATUS', 'OK', time()+3600, '/');
                //echo "succeeded";
				//setcookie('password', $password, time()+3600, '/');

				// storing name and emails from database to cookie
				setcookie('name', $name, time()+3600, '/');
                setcookie('email', $email, time()+3600, '/');
                setcookie('userType', $userType, time()+3600, '/');
                setcookie('userName', $userName, time()+3600, '/');

                
               // echo $userType;

                if($userType == "user")
                {
                     $_SESSION['status'] = "OK";
                     //echo "OK";
				     header('location: UserHome.html');

                }
                if($userType == "admin")
                {
                    $_SESSION['status'] = "OK";
                    header('location: AdminHome.html');

                }

				//echo "WELCOME";
				
				
			}else{
                echo " Invalid username or password";
               // header('location: login.html?msg=invalid username or password');
			}
		}	

	}else{
		echo "invalid request";
		
	}




?>