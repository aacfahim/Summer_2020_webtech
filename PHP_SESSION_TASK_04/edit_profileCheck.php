<?php

   session_start();

   $name = $_POST["name"];
   $email = $_POST["email"];
   $gender = $_POST["gender"];

   $day = $_POST["day"];
   $month = $_POST["month"];
   $year = $_POST["year"];



    if(isset($_POST['submit'])){

        setcookie("name", $name, time()+3600, '/');
        setcookie("email", $email, time()+3600, '/');

        if($gender == "male"){
            setcookie("gender", $gender, time()+3600, '/');
        }
        else if($gender == "female"){
            setcookie("gender", $gender, time()+3600,'/');
        }
        else if($gender == "other"){
            setcookie("gender", $gender, time()+3600,'/');
        }

        // setcookie("dob", $day, time()+3600, '/');
        // setcookie("dob", $month, time()+3600, '/');
        // setcookie("dob", $year, time()+3600, '/');

        //echo "Profile updated";
        header("location:view_profile.php");



    }

    else{
        echo "There's an Error";
    }
    
?>