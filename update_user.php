<?php
if(isset($_POST['submit'])){

    require_once 'includes/connection.php';
    

    // recoger los campos
    $name = (isset($_POST['name']))? mysqli_real_escape_string($db, $_POST['name']) : false;
    $lastname = (isset($_POST['lastname']))? mysqli_real_escape_string($db,$_POST['lastname']) : false;
    $email = (isset($_POST['email']))? mysqli_real_escape_string($db,$_POST['email']) : false;

    $errors = array();

    // validar los datos
    if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]", $name)) {
        $name_valid = true;
    } else {
        $name_valid = false;
        $errors['name'] = 'El nombre está vacío o no es válido';
    }

    if(!empty($lastname) && !is_numeric($lastname) && !preg_match("/[0-9]", $lastname)) {
        $lastname_valid = true;
    } else {
        $lastname_valid = false;
        $errors['lastname'] = 'El apellido está vacío o no es válido';
    }

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_valid = true;
    } else {
        $email_valid = false;
        $errors['email'] = 'El correo está vacío o no es válido';
    }


    if(count($errors) == 0) {
        
        //insertar usuario
        $sql = "UPDATE usuarios SET nombre='$name', apellidos='$lastname', email='$email' WHERE id=".$_SESSION['user']['id'].";";

        $cmd = mysqli_query($db, $sql);

        if($cmd) {
            $_SESSION['user']['nombre'] = $name;
            $_SESSION['user']['apellidos'] = $lastname;
            $_SESSION['user']['email'] = $email;
            $_SESSION['finished'] = 'La actualizacion se ha realizado con exito';
        } else {
            $_SESSION['errors']['general'] = 'Fallo al registrar el usuario';
        }
        header('Location: index.php');
    } else {
        $_SESSION['errors'] = $errors;
        header('Location: edit_user.php');
    }
}