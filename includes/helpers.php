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

    function get_categories($db){
        $query = "SELECT * FROM categorias ORDER BY id ASC;";
        $cats = mysqli_query($db, $query);

        if($cats && mysqli_num_rows($cats)>=1){
            return $cats;
        }
        return false;
    }

?>