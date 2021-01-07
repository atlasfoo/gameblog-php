<?php 

function show_error($errors, $field){   
    $alert = '';
    if(isset($errors[$field]) && !empty($field)) {
        $alert = "<div class='alerta alerta-error'>".$errors[$field]."</div>";
    }
    return $alert;
}

function del_error(){
    $del = false;
    $_SESSION['errors'] = null;
    session_unset($_SESSION['errors']);

    if(isset($_SESSION['finished'])){
        $_SESSION['finished'] = null;   
        session_unset($_SESSION['finished']);
    }
    
    return $del;
}

?>