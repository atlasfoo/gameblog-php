<?php  
    require_once 'includes/connection.php';

    if(isset($_POST)) {

        if(isset($_SESSION['error_login'])) {
            session_unset($_SESSION['error_login']);
        }

        $email = trim($_POST['email']);
        $password = $_POST['password'];

        $sql = "SELECT * FROM usuarios WHERE email='$email'";

        $login = mysqli_query($db, $sql);

        if($login && mysqli_num_rows($login) == 1) {
            $user = mysqli_fetch_assoc($login);

            $ver = password_verify($password, $user['password']);

            if($ver) {
                $_SESSION['user'] = $user;

                if(isset($_SESSION['error_login'])){
                    session_unset($_SESSION['error_login']);
                }
            } else {
                $_SESSION['error_login'] = 'Correo o contraseña incorrectos';
            }

        } else {
            $_SESSION['error_login'] = 'Correo o contraseña incorrectos';
        }
    }
    header('Location: index.php');
?>