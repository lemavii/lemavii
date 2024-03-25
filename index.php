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

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
            <div class="container px-5 ">
                <a class="navbar-brand" href="index.html"><img src="assets/img/logos/logo1.svg" alt="Lemavii" class="tlogopers" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link  mx-5" href="index.html">Inicio</a></li>

                        <li class="nav-item"><a class="nav-link  mx-5" href="contact.html">Contacto</a></li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  mx-5" id="navbarDropdownPortfolio" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Productos</a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="portfolio-overview.html">Portfolio Overview</a></li>
                                <li><a class="dropdown-item" href="portfolio-item.html">Portfolio Item</a></li>

                            </ul>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle mx-5 " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <?php
                                echo $_SESSION["nombre"];
                                ?>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownPortfolio">
                                <li><a class="dropdown-item" href="portfolio-overview.html">Perfil</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="controller/close_session.php">Cerrar sesión</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5 fondopers">
            <div class="container px-5 position-absolute top-50 start-50 translate-middle">
                <div class="row gx-5 align-items-center justify-content-center">
                    <div class="col-lg-8 col-xl-7 col-xxl-6">
                        <div class="my-5 text-center text-xl-start">
                            <h1 class="display-5 fw-bolder text-white mb-2">Bienvenidos a Lemavii</h1>
                            <p class="lead fw-normal text-white-50 mb-4">Somos una empresa joven y dinámica especializada en el diseño de instrumentos de detección y medición para empresas dedicadas al mantenimiento de redes eléctricas de baja, media y alta tensión.</p>
                            <div class="d-grid gap-3 d-sm-flex justify-content-sm-center justify-content-xl-start">
                                <a class="btn btn-primary btn-lg px-4 me-sm-3" href="#features">Empecemos</a>
                                <a class="btn btn-outline-light btn-lg px-4" href="#productos">Productos</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-xxl-6 d-none d-xl-block text-center"><img class="img-fluid rounded-3 my-5" src="https://dummyimage.com/600x400/343a40/6c757d" alt="..." /></div>
                </div>
            </div>
        </header>
        <!-- Features section-->
        <section class="py-5" id="features">
            <div class="container px-5 my-5">
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h2 class="fw-bolder mb-0">La mejor manera de abordar el desarrollo.</h2>
                    </div>
                    <div class="col-lg-8">
                        <div class="row gx-5 row-cols-md-1">
                            <div class="col mb-1 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Tecnología Innovadora</h2>

                                <p class="mb-0">Nuestra amplia gama de productos está desarrollada con tecnología de punta que cumple con las normas internacionales más exigentes. Además, presentan características innovadoras, como la integración de IA en los productos, lo que nos distingue en el rubro.</p>
                            </div>
                            <div class="col mb-1 h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-building"></i></div>
                                <h2 class="h5">Laboratorio de Ensayos</h2>
                                <p class="mb-0">Contamos con un laboratorio de ensayos de última generación equipado con tecnología de automatización propia. Esto nos permite garantizar la rigurosidad y la repitibilidad de los ensayos, lo que se traduce en mediciones de alta calidad y confiabilidad para nuestros clientes en Latinoamérica.</p>
                            </div>
                            <div class="col h-100">
                                <div class="feature bg-primary bg-gradient text-white rounded-3 mb-3"><i class="bi bi-toggles2"></i></div>
                                <h2 class="h5">Nuestro equipo</h2>
                                <p class="mb-0">Con dos décadas de experiencia en la industria y un equipo altamente calificado, ofrecemos soluciones a medida que optimizan el rendimiento y la seguridad de tus sistemas. Desde la conceptualización hasta la implementación, estamos comprometidos a brindar resultados excepcionales que impulsen tu éxito y garanticen la tranquilidad de nuestros clientes en cada proyecto.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial section-->
        <div class="py-5 bg-light">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="fs-4 mb-4 fst-italic">"En Lemavii, nos comprometemos a brindar soluciones de alta calidad que contribuyan al éxito y la seguridad de nuestros clientes.
                                "</div>
                            <div class="d-flex align-items-center justify-content-center">
                                <img class="rounded-circle me-3" src="https://dummyimage.com/40x40/ced4da/6c757d" alt="..." />
                                <div class="fw-bold">
                                    Pareto
                                    <span class="fw-bold text-primary mx-1">/</span>
                                    CEO, Cacique
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog preview section-->
        <section class="py-5">
            <div class="container px-5 my-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-8 col-xl-6">
                        <div class="text-center">
                            <h2 class="fw-bolder" id="productos">Nuestros productos</h2>
                            <p class="lead fw-normal text-muted mb-5">¡Descubre todo lo que Lemavii tiene para ofrecerte, únete a la excelencia en detección y medición, únete a Lemavii!</p>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="./assets/img/others/producto1.png" alt="..." style="min-height: 17vw;" />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nuevo</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Kilovoltimetros</h5>
                                </a>
                                <p class="card-text mb-0">Equipos para la medicion de AC y DC.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="./assets/img/others/producto2.png" alt="..." style="min-height: 17vw;" />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nuevo</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Detectores por contacto</h5>
                                </a>
                                <p class="card-text mb-0">Detectores de BT, MT y AT por contacto.</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card h-100 shadow border-0">
                            <img class="card-img-top" src="./assets/img/others/producto3.png" alt="..." style="min-height: 17vw;" />
                            <div class="card-body p-4">
                                <div class="badge bg-primary bg-gradient rounded-pill mb-2">Nuevo</div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!">
                                    <h5 class="card-title mb-3">Perfilador de aisladores</h5>
                                </a>
                                <p class="card-text mb-0">Pensado exclusivamente para ceramicos.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Call to action-->

            </div>
        </section>
    </main>
    <!-- Footer-->
    <footer class="bg-dark py-4 mt-auto">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="small m-0 text-white">Copyright &copy; Lemavii 2024</div>
                </div>
                <div class="col-auto">
                    <a class="link-light small" href="#!">Privacy</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Terms</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Contact</a>
                    <span class="text-white mx-1">&middot;</span>
                    <a class="link-light small" href="#!">Coockies</a>

                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
</body>

</html>