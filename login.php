<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/estilos2.css">
</head>
<body>
    <form class="formulario">
        <h1>Login</h1>
        <div class="contenedor">

            <div class="input-contenedor icon">
                <i class="fas fa-envelope"></i>
                <input type="email" placeholder="Correo Electrónico">
            </div>

            <div class="input-contenedor icon">
                <i class="fas fa-key"></i>
                <input type="password" placeholder="Contraseña">
            </div>

            <input type="submit" value="Login" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes cuenta?<a href="registrarse.php" class="link">Regístrate</a></p>
            <p><a href="index.php" class="link">Regresar a Inicio</a></p>
        </div>
    </form>
</body>
</html>