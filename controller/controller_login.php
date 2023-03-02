<?php
include  "controller/functions.php";

session_start();

if(!empty($_POST["btnin"])){
    if (!empty($_POST["user"]) and !empty($_POST["pass"])) {
        clearString($user= $_POST["user"]);
        clearString($pass= $_POST["pass"]);
        $sql=$conexion->query("select * from lemaviic_.users where user='$user' and password='$pass'");
        if ($data=$sql->fetch_object()) {
            $_SESSION["nombre"]=$data->user;
            header("location:index.php");
        } else {
            echo "<div class='alert alert-danger'>acceso denegado</div>";
        }

    } else {
        echo "introducir campos";
    }
}
?>