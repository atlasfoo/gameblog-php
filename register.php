<?php
    session_start();

    if(isset($_POST['submit'])){

        // recoger los campos
        $name = (isset($_POST['name']))? $_POST['name'] : false;
        $lastname = (isset($_POST['lastname']))? $_POST['lastname'] : false;
        $email = (isset($_POST['email']))? $_POST['email'] : false;
        $password = (isset($_POST['password']))? $_POST['password'] : false;
    
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

        if(!empty($password)) {
            $password_valid = true;
        } else {
            $password_valid = false;
            $errors['password'] = 'La contraseña está vacía o no es válida';
        }

        if(count($errors) == 0) {
            //insertar usuario
            $s = true;
        } else {
            $_SESSION['errors'] = $errors;
            header('Location: index.php');
        }
    }

?>
