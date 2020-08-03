<?php

    session_start(); 

    if(isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $userName = $_POST['userName'];
        $password = ( $_POST['password']);
        $type = ( $_POST['type']);

        


        if(empty($userName) || empty($email) || empty($password)){
            echo "Can't accept null";
        }else{

            setcookie('name', $name, time()+3600, '/'); 
            setcookie('email', $email, time()+3600, '/');
            setcookie('userName', $userName, time()+3600, '/');
            setcookie('password', $password, time()+3600, '/');
            setcookie('type', $type, time()+3600, '/');

            
            if($type == 'user')
            {
                $file = fopen('user.txt', 'w');
                $user = $userName."|".$password."|".$email."|".$type;
                fwrite($file, $user);
                fclose($file);

            }
            else{
                $file = fopen('admin.txt', 'w');
                $user = $userName."|".$password."|".$email."|".$type;
                fwrite($file, $user);
                fclose($file);
            }

            echo "Registration Done..!";
            //header('location:login.html');
        }
    }

    else{
        echo "invalid request";
        //header('location:login.html'); 

    }


?>