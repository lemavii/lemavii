<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <div class="login-content">
        <form action="" method="POST">
            <img  src="assets/img/logos/lemaviicono.svg">            
            <br>     
            <?php
                include  "models/connection.php";
                include "controller/controller_login.php";
            ?>
            <div class="input-user">
                <input type ="text" name ="user" placeholder="Usuario">
            </div>
            <br>
            <div class="inputs-pass">
                <input type="password" name = "pass" placeholder="contraseña">
            </div>                        
            <br>
            <input name="btnin" class = "btn" type="submit" value="iniciarsesion">
        </form>
        <a href="./indix2.html">Ir a la pagina 3djs</a>
    </div>
    <canvas id="canvas" width="500" height="500"></canvas>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/110/three.min.js"></script-->
    <script src="./js/cubo.js" type="module"></script>    
</body>
</html>