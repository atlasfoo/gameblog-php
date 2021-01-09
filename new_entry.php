<?php require_once 'includes/redir.php'; ?>
<?php require_once 'includes/header.php'; ?>
<div id="contenedor">
<?php require_once 'includes/sidebar.php'; ?>

<main id="principal">
    <h1>Crear Entrada</h1>
    <p>Añade una nueva entrada para el blog</p>
    <br/>
    <form action="save_entry.php" method="POST">

        <label for="title">T&iacute;tulo</label>
        <input type="text" name="title"/>
        <?php echo isset($_SESSION['entry_errors'])? show_error($_SESSION['entry_errors'], 'title') : ''?>

        <label for="description">Descripci&oacute;n</label>
        <textarea rows="10" cols="50" name="description"></textarea>
        <?php echo isset($_SESSION['entry_errors'])? show_error($_SESSION['entry_errors'], 'description') : ''?>

        <label for="category">Categor&iacute;a</label>
        <select name="category" id="category">
            <?php
                $cats = get_categories($db);
                if(!empty($cats)):
                while($cat = mysqli_fetch_assoc($cats)):
            ?>
            <option value="<?=$cat['id']?>"><?=$cat['nombre']?></option>
            
            <?php endwhile; endif; ?>
        </select>
        <?php echo isset($_SESSION['entry_errors'])? show_error($_SESSION['entry_errors'], 'category') : ''?>

        <input type="submit" value="Guardar">
    </form>
</main>
<?php del_error();?>
</div>

<?php require_once 'includes/footer.php'; ?>