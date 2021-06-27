<?php
    $dbServer = 'localhost';
    $dbName = 'loginsystem';
    $dbUsername = 'root';
    $dbPassword = '';
    $username = $_POST['username'];
    $password = $_POST['password'];
    $db = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
    $query = "SELECT * FROM `profile` WHERE `username` = '$username' AND `password` = '$password'";
    $result = mysqli_query($db, $query);
    $value = mysqli_fetch_all($result);
    //print_r($value);
    if(!empty($username) && !empty($password))
    {
        if(!empty($value))
            echo "Welcome Back! ".$value[0][3];
        else
            echo "Try it again!";
    } 
    else
    {
        echo "Error!";
    }
    
?>