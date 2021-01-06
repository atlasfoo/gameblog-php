<?php require_once 'includes/helpers.php'; ?>

<!--Sidebar-->
<aside id="sidebar">
    <section id="login" class="bloque">
        <h3>Inicia Sesion</h3>
        <form action="login.php" method="post">
            <label for="email">Email</label>
            <input type="email" name="email" />

            <label for="password">Contraseña</label>
            <input type="password" name="password" />

            <input type="submit" value="Entrar" />
        </form>
    </section>

    <section id="register" class="bloque">
        <h3>Registrate</h3>
        <form action="register.php" method="post">
            <label for="name">Nombres</label>
            <input type="text" name="name" />
            <?php echo isset($_SESSION['errors'])? show_error($_SESSION['errors'], 'name') : ''?>

            <label for="lastname">Apellidos</label>
            <input type="text" name="lastname" />
            <?php echo isset($_SESSION['errors'])? show_error($_SESSION['errors'], 'lastname') : '' ?>

            <label for="email">Email</label>
            <input type="email" name="email" />
            <?php echo isset($_SESSION['errors'])? show_error($_SESSION['errors'], 'email') : ''?>

            <label for="password">Contraseña</label>
            <input type="password" name="password" />
            <?php echo isset($_SESSION['errors'])? show_error($_SESSION['errors'], 'password') : '' ?>

            <input type="submit" name="submit" value="Registrarse" />
        </form>
        <?php del_error(); ?>
    </section>
</aside>