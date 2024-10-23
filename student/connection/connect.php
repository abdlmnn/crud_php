<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'school';

    $mysqli = new mysqli($hostname,$username,$password,$database);

    if ($mysqli->connect_error)
    {
        die('Connection Failed: ' . $mysqli->connect_error);
    }
    // else
    // {
    //     echo 'Connection Successfully';
    // }
?>