<?php 
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'gameblog';
    $db = mysqli_connect($server, $username, $password, $database);

    mysqli_query($db, "SET NAMES 'utf-8'");    
?>