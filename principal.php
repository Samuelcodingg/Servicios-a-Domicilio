<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Domesticos</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="styles/estilos.css">
</head>
<body>
    <!-- Adentro ira barra de navegacion e imagen de fondo -->
    <header class="site-header barra">
        <a href="principal.php"><h1>Servicios Domésticos</h1></a>

        <nav class="opcionesBarra">
            <?php 
                session_start();
                if(!empty($_SESSION['username'])){
                    $nombre = $_SESSION['username'];
                    echo '<h3 class="usuario">'.$nombre.'</h3>';
                    echo '<a href="index.php"><h3>Salir<h3></a>';
                }
                else{
                    echo '<a href="registrarse.php"><h3>Registrarse</h3></a>';
                    echo '<a href="index.php"><h3>Login</h3></a>';
                }
            ?>
        </nav>
    </header>
    <!--Breve descripcion-->
    <section class="seccion1">
        <img src="img/imagen-seccion.jpg" alt="imagen-seccion">
        <p class="contenidoSeccion">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque dignissimos nesciunt vel beatae nisi molestiae, a provident illum dicta. Molestias dolor ab iste exercitationem, voluptatibus perferendis dolorum cum officiis recusandae! Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam, tempore quidem expedita debitis fugit fugiat minus atque consequuntur, cupiditate voluptates accusamus, consequatur facilis dignissimos sunt quas? Velit, amet. Quis, assumenda. Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum rerum magni nihil odit veniam. Iusto ipsum, cumque molestias molestiae a deleniti porro neque, eos quaerat cum, reprehenderit optio atque? At.</p>
    </section>

    <!--Anuncios-->
    <section class="contenedor seccion">
        <h1 class="fw-300 centrar-texto">Servicios Disponibles</h1>

        <div class="contenedor-anuncios">
            <div class="anuncio">
                <img src="img/gasfiteria.jpg" alt="gasfitero">
                <div class="contenido-anuncio">
                    <h2>Gasfitería</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, voluptas molestiae</p>
                    <p>S/0.000</p>
                    <a href="#" class="boton boton-amarillo d-block">Ver Servicio</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/electricidad.png" alt="electricista">
                <div class="contenido-anuncio">
                    <h2>Elictricidad</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, voluptas molestiae</p>
                    <p>S/0.000</p>
                    <a href="#" class="boton boton-amarillo d-block">Ver Servicio</a>
                </div>
            </div>

            <div class="anuncio">
                <img src="img/carpinteria.jpg" alt="carpintero">
                <div class="contenido-anuncio">
                    <h2>Carpintería</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reprehenderit, voluptas molestiae</p>
                    <p>S/0.000</p>
                    <a href="#" class="boton boton-amarillo d-block">Ver Servicio</a>
                </div>
            </div>
        </div>
    </section>
    <!--Barra navegacion footer-->
    <footer class="site-header barra">
        <nav class="opcionesBarra">
            <?php 
                if(!empty($_SESSION['username'])){
                    echo '<h3 class="usuario">'.$nombre.'</h3>';
                    echo '<a href="index.php"><h3>Salir<h3></a>';
                }
                else{
                    echo '<a href="registrarse.php"><h3>Registrarse</h3></a>';
                    echo '<a href="index.php"><h3>Login</h3></a>';
                }
            ?>
        </nav>

        <a href="principal.php"><h1>Servicios Domésticos</h1></a>
    </footer>
</body>
</html>