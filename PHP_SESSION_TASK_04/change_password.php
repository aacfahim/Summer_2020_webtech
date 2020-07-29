<?php

    session_start();
    
    $CurrPassword = $_COOKIE['password'];

    if(isset($_POST['submit'])){

        if($CurrPassword == $_POST['currPassword'])
        {
            $CurrPassword =  $_POST['newPassword'];
            setcookie('password', $CurrPassword, time()+3600, '/');
            header("location:login.html");
        }
        else{
            echo "Wrong old password";
        }
        
    }
    else{
        echo "Error";
    }

?>