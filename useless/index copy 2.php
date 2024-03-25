<?php
session_start();
if (empty($_SESSION["nombre"])) {
    header("location: pagestart.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>LEMAVII</title>
    <link href="css/index.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="fondopers bg-secondary-subtle text-light">
    <!-- Navigation/////////////////////////////////////////////////////////////////-->
    <div class="navbar navbar-expand-lg mt-3 bg-transparent" style="height: 2.5em;">
    </div>

    <nav class="navbar navbar-expand-lg bg-dark fixed-top mx-5 rounded-3 mt-3 text-light" data-bs-theme="dark">
        <div class="container-fluid mx-3">
            <a class="navbar-brand " href="#page-top"><img src="assets/img/logos/logo1.svg" alt="Lemavii" class="tlogopers" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse me-5" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0  me-2 fs-5">
                    <li class="mx-5 nav-item">
                        <a class="nav-link text-light" aria-current="page" href="#">Inicio</a>
                    </li>
                    <li class="mx-5 nav-item">
                        <a class="nav-link text-light" href="#">Productos</a>
                    </li>
                    <li class="mx-5 nav-item">
                        <a class="nav-link text-light" href="#">Contacto</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-light mx-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php
                            echo $_SESSION["nombre"];
                            ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-dark">
                            <li><a class="dropdown-item" href="#">Tu perfil</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="controller/close_session.php">Cerrar sesión</a></li>
                        </ul>
                    </li>
                </ul>
                <!-- <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form> -->
            </div>
        </div>
    </nav>
    <div class="container py-4">
        <header class="pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-body-emphasis text-decoration-none">
                <span class="fs-4"></span>
            </a>
        </header>

        <div class="p-5 mb-4 bg-dark  rounded-3">
            <div class="container-fluid py-5">
                <h1 class="display-5 fw-bold">Bienvenidos a Lemavii</h1>
                <p class="col-md-8 fs-4">Somos una empresa joven y dinámica especializada en el diseño de instrumentos de detección y medición para empresas dedicadas al mantenimiento de redes eléctricas de baja, media y alta tensión.</p>
                <button class="btn btn-primary btn-lg" type="button">Example button</button>
            </div>
        </div>

        <div class="row align-items-md-stretch">

            <div class="col-md-6">
                <div class="h-100 p-5 bg-dark  rounded-3">
                    <h2>Laboratorio de Ensayos</h2>
                    <p>
                        Contamos con un laboratorio de ensayos de última generación equipado con tecnología de automatización propia. Esto nos permite garantizar la rigurosidad y la repitibilidad de los ensayos, lo que se traduce en mediciones de alta calidad y confiabilidad para nuestros clientes en Latinoamérica.</p>
                    <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
                </div>
            </div>
            <div class="col-md-6">
                <div class="h-100 p-5 bg-dark  rounded-3 ">
                    <h2>Tecnología Innovadora</h2>
                    <p>Nuestro enfoque innovador en el desarrollo electrónico para alta tensión garantiza soluciones seguras, confiables y eficientes para tus necesidades energéticas más exigentes.</p>
                    <p>Con dos décadas de experiencia en la industria y un equipo altamente calificado, ofrecemos soluciones a medida que optimizan el rendimiento y la seguridad de tus sistemas. Desde la conceptualización hasta la implementación, estamos comprometidos a brindar resultados excepcionales que impulsen tu éxito y garanticen la tranquilidad de nuestros clientes en cada proyecto</p>
                    <!-- <button class="btn btn-outline-secondary" type="button">Example button</button> -->
                </div>
            </div>
        </div>

        <!-- <footer class="pt-3 mt-4 text-body-secondary border-top">
      &copy; 2024
    </footer> -->
    </div>


    <!-- <div id="carouselExampleAutoplaying" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="5000">
                <img src="./assets/img/others/producto1.png" class="d-block w-100" alt="imagen1">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./assets/img/others/producto2.png" class="d-block w-100" alt="imagen2">
            </div>
            <div class="carousel-item" data-bs-interval="5000">
                <img src="./assets/img/others/producto3.png" class="d-block w-100" alt="imagen3">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->


    <script type="importmap">
        {
				"imports": {
					"three": "./node_modules/three/build/three.module.js",
					"three/addons/": "./node_modules/three/examples/jsm/"
				}
			}
		</script>
    <script type="module" src="js/cabezas.js"></script>
    <script src="js/scripts.js"></script>
    <!-- <a href="https://www.freepik.com/free-photo/rendering-abstract-futuristic-background-with-glowing-neon-blue-orange-lights_10860238.htm#query=technology%20wallpaper&position=1&from_view=search&track=sph">Image by wirestock</a> on Freepik-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>