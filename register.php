<?php
    

    if(isset($_POST['submit'])){

        require_once 'includes/connection.php';
        

        if(!isset($_SESSION))
            session_start();

        // recoger los campos
        $name = (isset($_POST['name']))? mysqli_real_escape_string($db, $_POST['name']) : false;
        $lastname = (isset($_POST['lastname']))? mysqli_real_escape_string($db,$_POST['lastname']) : false;
        $email = (isset($_POST['email']))? mysqli_real_escape_string($db,$_POST['email']) : false;
        $password = (isset($_POST['password']))? mysqli_real_escape_string($db,$_POST['password']) : false;
    
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
            // cifrar contraseña
            $password_crypt = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);
            
            //insertar usuario
            $sql = "INSERT INTO usuarios VALUES(null, '$name', '$lastname', '$email', '$password_crypt', CURDATE());";

            $cmd = mysqli_query($db, $sql);

            if($cmd) {
                $_SESSION['finished'] = 'El registro se ha realizado con exito';
            } else {
                $_SESSION['errors']['general'] = 'Fallo al registrar el usuario';
            }
            header('Location: index.php');
        } else {
            $_SESSION['errors'] = $errors;
            header('Location: index.php');
        }
    }

?>
