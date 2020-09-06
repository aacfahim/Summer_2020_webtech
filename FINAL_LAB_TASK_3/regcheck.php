<?php

    require_once("connection.php");
    session_start();


    // if(isset($_POST['name'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        $type = $_POST['type'];

        //echo $email;



        if(empty($username) || empty($email) || empty($password) || empty($name)){
            echo "null";

        }else{

            $sql = "INSERT INTO mini_project VALUES ('$username' ,'$name','$password','$email','$type')";
            $data = mysqli_query($connection, $sql);

            if($data){

                $data = mysqli_query($connection, $sql);

                //echo "<h1>ok</h1>";
                echo "done";

           }

        }


  
    //         //header('location:login.html');
    //     }
    // }

    // else{
    //     echo "invalid request";
    //     //header('location:login.html'); 

    // }

  


?>