<?php

    session_start();

    if(isset($_POST['submit'])){

        $userName = $_POST['userName'];
        $password = $_POST['password'];

        if(empty($userName) || empty($password)){
            echo "Username/Password is needed";
        }
        else{
            if(isset($_COOKIE['userName']) && isset($_COOKIE['password'])){
                if($uname == $_COOKIE['userName'] && $password == $_COOKIE['password']){

                    setcookie('STATUS', 'OK', time()+3600, '/');
                    header('location: dashboard.html');


                }else{
                    header('location:login.php');
                }
            }
            else{
                echo "Account doesn't exist";
            }
            
        }

    }
    else{
        //echo "invalid request";
        header('location:login.php'); //generates http request.

    }


?>