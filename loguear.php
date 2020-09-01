<?php 
    require 'con_db.php';
    session_start();

    if(isset($_POST['login'])){
        $usuario = $_POST['email'];
        $pass = $_POST['password'];

        $consulta_loguear = "SELECT COUNT(*) as contar FROM datos WHERE email = '$usuario' and password = '$pass';";
        $resultado = mysqli_query($conex,$consulta_loguear);
        $array = mysqli_fetch_array($resultado);

        if($array['contar']>0){
            $_SESSION['username']=$usuario;
            header("location:principal.php");
        }
        else{
            echo '
            <style>
                .malo {
                    width: 100%!important;
                    padding: 1.2rem!important;
                    color: #fff!important;
                    animation-name: mianimacion;
                    animation-duration: 4s!important;
                    animation-timing-function: linear;
                }

                @keyframes mianimacion {
                    0% {background:#c21d17}
                    50% {background:#a31915}
                    100% {background:#6914of}
                }
            </style>
            <h1 class="malo">Datos Incorrectos...!</h1>';
        }
    }
?>