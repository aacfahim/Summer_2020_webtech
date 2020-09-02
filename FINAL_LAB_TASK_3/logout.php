<?php
    //session_start();
    //session_destroy();
    setcookie('STATUS', 'OK', time()-3600, '/');

    header('location:login.html');

?>