<?php require_once 'includes/redir.php'; ?>
<?php require_once 'includes/header.php'; ?>
<div id="contenedor">
    <section id="register" class="bloque">
        <h3>Mis Datos</h3>
        <?php if(isset($_SESSION['finished'])): ?>
            <div class="alerta alerta-exito">
                <?=$_SESSION['finished']?>
            </div>
        <?php elseif(isset($_SESSION['errors']['general'])): ?>
            <div class="alerta alerta-error">
                <?=$_SESSION['errors']['general'] ?>
            </div>
        <?php endif; ?>
        <form action="update_user.php" method="post">
            <label for="name">Nombres</label>
            <input type="text" name="name" value="<?=$_SESSION['user']['nombre']?>" />
            <?php echo isset($_SESSION['errors'])? show_error($_SESSION['errors'], 'name') : ''?>

            <label for="lastname">Apellidos</label>
            <input type="text" name="lastname" value="<?=$_SESSION['user']['apellidos']?>"/>
            <?php echo isset($_SESSION['errors'])? show_error($_SESSION['errors'], 'lastname') : '' ?>

            <label for="email">Email</label>
            <input type="email" name="email" value="<?=$_SESSION['user']['email']?>"/>
            <?php echo isset($_SESSION['errors'])? show_error($_SESSION['errors'], 'email') : ''?>

            <input type="submit" name="submit" value="Registrarse" />
        </form>
        <?php del_error(); ?>
    </section>
</div>