<?php 
    include("con_db.php");

    if(isset($_POST['register'])){
        if(strlen($_POST['name'])>=1 && strlen($_POST['mail'])>=1 && strlen($_POST['password'])>=1){
            $name = $_POST['name'];
            $email = $_POST['mail'];
            $password = $_POST['password'];
            $consulta = "INSERT INTO datos(nombre,email,password) VALUES ('$name','$email','$password');";
            mysqli_query($conex,$consulta);
            if($resultado){
                echo '<h3>Te has inscrito correctamente!</h3>';
            }
            else{
                echo '<h3>Ups, no se pudo!</h3>';
            }
        }
        else{
            echo '<h3>Por favor complete campos!</h3>';
        }
    }

?>