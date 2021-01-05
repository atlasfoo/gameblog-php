<?php 
    $server = 'localhost';
    $username = 'root';
    $password = 'toorlin547';
    $database = 'gameblog';
    $db = mysqli_connect($server, $username, $password, $database);

    mysqli_query($db, "SET NAMES 'utf-8'");    
?>