<?php 
    include("con_db.php");
    session_start();

    if(isset($_POST['register'])){
        if(strlen($_POST['name'])>=1 && strlen($_POST['mail'])>=1 && strlen($_POST['password'])>=1){
            $name = $_POST['name'];
            $email = $_POST['mail'];
            $password = $_POST['password'];
            $consulta_registrar = "INSERT INTO datos(nombre,email,password) VALUES ('$name','$email','$password');";
            $resultado = mysqli_query($conex,$consulta_registrar);
            if($resultado){
                echo '<h1 class="bueno">Te has inscrito correctamente!</h1>';
                $_SESSION['username']=$name;
                echo header("refresh:5;url=principal.php");
            }
            else{
                echo '<h1 class="malo">Ups, no se pudo!</h1>';
            }
        }
        else{
            echo '<h1 class="malo">Por favor complete campos!</h1>';
        }
    }

?>