<?php

    if(isset($_POST['submit'])){

        // recoger los campos
        $name = (isset($_POST['name']))? $_POST['name'] : false;
        $last_name = (isset($_POST['lastname']))? $_POST['lastname'] : false;
        $email = (isset($_POST['email']))? $_POST['email'] : false;
        $password = (isset($_POST['password']))? $_POST['password'] : false;
    
        // validar los datos
        if(!empty($name) && !is_numeric($name) && !preg_match("/[0-9]", $name))
            echo 'El nombre es valido';
    }

?>
