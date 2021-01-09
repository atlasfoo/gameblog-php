<?php require_once 'includes/redir.php'; ?>
<?php require_once 'includes/header.php'; ?>
<div id="contenedor">
<?php require_once 'includes/sidebar.php'; ?>

<main id="principal">
    <h1>Crear Categor&iacute;as</h1>
    <p>Añade nuevas categorías para todos los usuarios</p>
    <br/>
    <form action="save_cat.php" method="POST">
        <label for="name">Nombre de la categor&iacute;a</label>

        <input type="text" name="name"/>

        <input type="submit" value="Guardar">
    </form>
</main>
</div>

<?php require_once 'includes/footer.php'; ?>