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
            echo "<div class='alert alert-danger'>acceso denegado</div>";
        }
        
            } catch (\Exception $e) {
           echo "Recargar la pagina o contactar con tecnico@lemavii.com.ar";
        }
      

    } else {
        echo "introducir campos";
    }
}
?>