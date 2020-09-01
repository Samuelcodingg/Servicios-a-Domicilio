<?php 
    require 'con_db.php';
    session_start();
    session_destroy();
    session_start();

    if(isset($_POST['login'])){
        $usuario = $_POST['email'];
        $pass = $_POST['password'];

        $consulta_loguear = "SELECT COUNT(*) as contar FROM datos WHERE email = '$usuario' and password = '$pass';";
        $resultado = mysqli_query($conex,$consulta_loguear);
        $array = mysqli_fetch_array($resultado);

        if($array['contar']>0){
            $consulta_nombre = "SELECT nombre FROM datos WHERE email='$usuario' and password='$pass'";
            $result = mysqli_query($conex,$consulta_nombre);
            $nombre = mysqli_fetch_array($result);
            echo '<h1 class="bueno">Bienvenido!</h1>';
            $_SESSION['username']=$nombre['nombre'];
            header("refresh:5;url=principal.php");
        }
        else{
            echo '<h1 class="malo">Datos Incorrectos...!</h1>';
        }
    }
?>