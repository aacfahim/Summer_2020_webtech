<?php

    session_start();  //SESSION IS ASSOCIATIVE ARRAY*

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $userName = $_POST['userName'];
        $password = ( $_POST['password']);
        $gender = $_POST['gender'];

        if(empty($uname) || empty($email) || empty($password)){
            echo "Null submission found";
        }else{
            // $_SESSION['uname'] = $uname;
            // $_SESSION['email'] = $email;
            // $_SESSION['password'] = $password;

            setcookie('name', $name, time()+3600, '/'); //holds the data for 5 mins
            setcookie('email', $email, time()+3600, '/');
            setcookie('userName', $userName, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');

            //echo "Registration Done..!";
            header('location:login.php');
        }
    }

    else{
        //echo "invalid request";
        header('location:login.php'); //generates http request.

    }


?>