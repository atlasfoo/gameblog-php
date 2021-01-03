<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--Header-->
    <header id="cabecera">
        <div id="logo">
            <a href="index.php">
                <h1>Blog Gaimer</h1>
            </a>
        </div>

        <!--Menu-->
        <nav id="menu">
            <ul>
                <li>
                    <a href="index.html">Inicio</a>
                </li>
                <li>
                    <a href="index.html">Categoria</a>
                </li>
                <li>
                    <a href="index.html">Sobre mi</a>
                </li>
                <li>
                    <a href="index.html">Contacto</a>
                </li>
            </ul>
        </nav>
    </header>
    <div id="contenedor">
        <!--Sidebar-->
        <aside id="sidebar">
            <section id="login" class="bloque">
                <h3>Inicia Sesion</h3>
                <form action="login.php" method="post">
                    <label for="email">Email</label>
                    <input type="email" name="email"/>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Entrar" />
                </form>
            </section>

            <section id="register" class="bloque">
                <h3>Registrate</h3>
                <form action="register.php" method="post">
                    <label for="name">Nombres</label>
                    <input type="text" name="name"/>

                    <label for="lastname">Apellidos</label>
                    <input type="text" name="lastname"/>


                    <label for="email">Email</label>
                    <input type="email" name="email"/>

                    <label for="password">Contraseña</label>
                    <input type="password" name="password"/>

                    <input type="submit" value="Registrarse" />
                </form>
            </section>

        </aside>
        <!--Main-->
        <main id="principal">
            <h1>Ultimas entradas</h1>
            <article class="entrada">
                <h2>Titulo de entrada</h2>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloremque odio quaerat aliquid fugiat alias sapiente blanditiis eaque eos impedit magni eum esse placeat culpa sit, vero at dolorem a atque.</p>
            </article>
        </main> 
    </div>
    <!--Footer-->
</body>
</html>