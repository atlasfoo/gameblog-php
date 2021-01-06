<?php 

function show_error($errors, $field){   
    $alert = '';
    if(isset($errors[$field]) && !empty($field)) {
        $alert = "<div class='alerta alerta-error'>".$errors[$field]."</div>";
    }
    return $alert;
}

function del_error(){
    $_SESSION['errors'] = null;
    $del = session_unset($_SESSION['errors']);

    return $del;
}

?>