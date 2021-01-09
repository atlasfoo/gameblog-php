<?php

if(isset($_POST)){
    require_once 'includes/connection.php';

    $title = (isset($_POST['title']))? mysqli_real_escape_string($db, $_POST['title']) : false; 
    $description = (isset($_POST['description']))? mysqli_real_escape_string($db, $_POST['description']) : false;
    $category = (isset($_POST['category']))? $_POST['category'] : false;
    $user = $_SESSION['user']['id'];

    $errors = array();

    if(empty($title))
        $errors['title'] = 'El titulo esta vacio';

    if(empty($description))
        $errors['title'] = 'La descripcion esta vacia';

    if(empty($category) && !is_numeric($category))
        $errors['title'] = 'La categoria esta vacio';
    
    if(count($errors) == 0) {
        $q = "INSERT INTO entradas VALUES(null, $user, $category, '$title', '$description', CURDATE());";
        mysqli_query($db, $q);
    }
    else
    {
        $_SESSION['entry_errors'] = $errors;
    }

}

header('Location: index.php');