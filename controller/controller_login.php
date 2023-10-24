<?php
include  "controller/functions.php";

session_start();

if(!empty($_POST["btnin"])){
    if (!empty($_POST["user"]) and !empty($_POST["pass"])) {
        $user= $_POST["user"];
        $pass= $_POST["pass"];
        $user=clearString($user);
        $pass=clearString($pass);
        try {
             $sql=$conexion->query("select * from lemaviic_.users where user='$user' and password='$pass'");
             
        if ($data=$sql->fetch_object()) {
            $_SESSION["nombre"]=$data->user;
            header("location:index.php");
        } else {
            echo'<h3 class="cartelDenegado">Acceso denegado</h3>';
        }
        
            } catch (\Exception $e) {
           echo "<div class='alert alert-danger'>Recargar la pagina o contactar con tecnico@lemavii.com.aracceso denegado</div>";
        }
      

    } else {
        echo '<h3 class="cartelDenegado">Indroducir campos</h3>';
    }
}
?>