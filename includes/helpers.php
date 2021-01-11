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

        if(isset($_SESSION['errors'])){
            $_SESSION['errors'] = null;
            session_unset($_SESSION['errors']);
        }

        if(isset($_SESSION['entry_errors'])){
            $_SESSION['entry_errors'] = null;
            session_unset($_SESSION['errors']);
        }

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

    function get_last_entries($db, $limit = null){
        $q = "SELECT e.*, c.nombre as 'categoria' FROM entradas e INNER JOIN categorias c ON e.categoria_id = c.id ORDER BY e.id DESC";

        if($limit)
            $q .=" LIMIT 4";
        
        $entries = mysqli_query($db, $q);

        if($entries && mysqli_num_rows($entries)>=1){
            return $entries;
        }

        return array();
    }

?>