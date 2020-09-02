<?php

    require_once("connection.php");
    session_start();


    //if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];



        if(empty($userName) || empty($email) || empty($password) || empty($name)){
            echo "Can't accept null";

        }else{

            $sql = "INSERT INTO mini_project VALUES ('$username' ,'$name','$password','$email','$type')";
    
            $data = mysqli_query($connection, $sql);

            if($data){

                $data = mysqli_query($connection, $sql);

                echo "done";

            }

            // setcookie('name', $name, time()+3600, '/'); 
            // setcookie('email', $email, time()+3600, '/');
            // setcookie('userName', $userName, time()+3600, '/');
            // setcookie('password', $password, time()+3600, '/');
            // setcookie('type', $type, time()+3600, '/');
  
            //header('location:login.html');
        }
    //}

    // else{
    //     echo "invalid request";
    //     //header('location:login.html'); 

    // }


?>