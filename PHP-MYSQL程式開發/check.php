<?php
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(!empty($username) && !empty($password))
    {
        if($username == "abc" && $password == "123")
            echo "Welcome Back! C++";
        else if($username == "polar" && $password == "bear")
            echo "Welcome Back! Polar";
        else
            echo "Try it again!";
    }
    else
    {
        echo "Error!";
    }
    
?>