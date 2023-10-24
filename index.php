<?php
session_start();
if(empty($_SESSION["nombre"])){
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
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation/////////////////////////////////////////////////////////////////-->         
        <nav class="bienvenido-nav" id="av" >
        <div>          
                <?php 
                echo "Bienvenido ".strtoupper($_SESSION["nombre"] );
                ?>
            </div>
        </nav>     
     
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">        
            <div class="container">  
                <a class="navbar-brand" href="#page-top"><img src="assets/img/logos/lemaviicono.svg" alt="..."  /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars ms-1"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                        
                        <li class="nav-item"><a class="nav-link" href="#portfolio">Productos</a></li>
                        <li class="nav-item"><a class="nav-link" href="#servicios">Servicios</a></li>
                        <li class="nav-item"><a class="nav-link" href="#contacto">Contacto</a></li>
                        <li class="nav-item"><a class="nav-link" href="controller/close_session.php">Salir</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead/////////////////////////////////////////////////////////////////-->
        <header class="masthead">
            <div class="container">
                <div class="masthead-subheading">INNOVACIONES TECNOLOGICAS</div>
                <div class="masthead-heading text-uppercase">LEMAVII</div>
                <a class="btn btn-primary btn-xl text-uppercase" href="#servicios">Conocenos</a>
            </div>
        </header>

        <!-- Portfolio Grid/////////////////////////////////////////////////////////////////-->
        <section class="page-section bg-light" id="portfolio">
            <div class="container">
                <div class="casco3d">
                    <canvas id="myCanvasis" style="background-color=transparent"></canvas>
                    <a href="#" class="download-link"> Descargar PDF</a>
                </div>
            </div>

            
        </section>

                <!-- Servicios/////////////////////////////////////////////////////////////////-->
                <section class="page-section" id="servicios">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Servicios</h2>
                    <h3 class="section-subheading text-muted">Estos son nuestros principales fuertes. Mirá con lo que contamos!</h3>
                </div>
                <div class="row text-center">
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-shopping fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Desarrollo</h4>
                        <p class="text-muted">Contamos con equipo hábil, dinámico, eficiente y veloz, para dar solución a todos tus problemas.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-laptop fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Laboratorio</h4>
                        <p class="text-muted">Un laboratorio de ensayos armado con instrumentos de presicion, para ofrecer reportes y normativas seguras.</p>
                    </div>
                    <div class="col-md-4">
                        <span class="fa-stack fa-4x">
                            <i class="fas fa-circle fa-stack-2x text-primary"></i>
                            <i class="fas fa-lock fa-stack-1x fa-inverse"></i>
                        </span>
                        <h4 class="my-3">Posventa</h4>
                        <p class="text-muted"> Todos nuestros productos cuentan con un servicio posventa personalizado, tu seguridad siempre es primero.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contacto/////////////////////////////////////////////////////////////////-->
        <section class="page-section" id="contacto">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">CONTACTENOS</h2>
                    <h3 class="section-subheading text-muted">Brindamos atención personalizada para cada cliente.</h3>
                </div>
                
                <form id="contactForm" data-sb-form-api-token="API_TOKEN">
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input class="form-control" id="name" type="text" placeholder="Nombre completo *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="name:required">Nombre requerido.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input class="form-control" id="email" type="email" placeholder="Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">Email requerido</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email inválido.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input class="form-control" id="phone" type="tel" placeholder="Telefono *" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="phone:required">Número de teléfono requerido.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <!-- Message input-->
                                <textarea class="form-control" id="message" placeholder="Mensaje *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">Escriba aquí.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at tukla                            
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase disabled" id="submitButton" type="submit">Enviar mensaje</button></div>
                </form>
            </div>
        </section>
        <!-- Footer/////////////////////////////////////////////////////////////////-->
        <footer class="footer py-4">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-start">Copyright &copy; LEMAVII 2022</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-dark btn-social mx-2" href="#!" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-end">
                        <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                        <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
                    </div>
                </div>
            </div>
        </footer>

        <div id="particles-js">
        </div>
        <script  src="js/particles.min.js" ></script>
    
        <script  src="js/particles.config.js" ></script>
        <script type="importmap">
			{
				"imports": {
					"three": "./node_modules/three/build/three.module.js",
					"three/addons/": "./node_modules/three/examples/jsm/"
				}
			}
		</script>
        <script type="module" src="js/cabezas.js" ></script>    
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <!-- <a href="https://www.freepik.com/free-photo/rendering-abstract-futuristic-background-with-glowing-neon-blue-orange-lights_10860238.htm#query=technology%20wallpaper&position=1&from_view=search&track=sph">Image by wirestock</a> on Freepik-->
      
    </body>
</html>
