<?php

  require_once('../services/userService.php');

  $username = $_POST['username']; 
  $user = SearchByUsername($username);

  
  if(empty($username)){

    echo "Username field is required";

    }
    else{


        $data = "<table border=1>
        <tr>
            <td>Name</td>
            <td>Company Name</td>
            <td>Username</td>
            <td>Contact</td>
        </tr>";

    $data .= "<tr>
            <td>{$user['name']}</td>
            <td>{$user['company_name']}</td>
            <td>{$user['username']}</td>
            <td>{$user['contact']}</td>
        </tr>";

    $data .= "</table>";
    echo $data;

    }

?>