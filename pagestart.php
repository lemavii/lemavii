<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <link href="css/normalize.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    
</head>
<body>
    <?php
                include  "models/connection.php";
                include "controller/controller_login.php";
    ?>
    <div class="main">
        <!--///////////////////////////////////////////////////////////////////////////////-->
        <div class="encuadre">       
            <div class="header">
                <img class="header__img" src="./assets/img/logos/lemaviicono.svg" alt="logolemavii">
            </div>
            <!--///////////////////////////////////////////////////////////////////////////////-->
            <div class="login">
                <form class="login__form" action="" method="POST">
                <div class="login__input">
                    <input type ="text" name ="user" placeholder="Usuario">
                </div>

                <div class="login__input">
                    <input type="password" name = "pass" placeholder="contraseña">
                </div>   
                <input id="mi-label" name="btnin" class = "login_btn" type="submit" value="Iniciar Sesión">
                </form>
            </div>
        </div>
        <canvas id="myCanvass" style="background-color=transparent"></canvas>
    </div>
    <div id="particles-js">
    </div>
    <!--///////////////////////////////////////////////////////////////////////////////-->
    
    <!--///////////////////////////////////////////////////////////////////////////////-->
    <script type="importmap">
			{
				"imports": {
					"three": "./node_modules/three/build/three.module.js",
					"three/addons/": "./node_modules/three/examples/jsm/"
				}
			}
	</script>
    <!--script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/110/three.min.js"></script-->
    <script type="module" src="js/cabezon.js" ></script>    
    <script  src="js/particles.min.js" ></script>
    
    <script  src="js/particles.config.js" ></script>


</body>
</html>