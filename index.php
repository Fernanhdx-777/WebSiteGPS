<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ingenieria GPS</title>
    <link rel="icon" type="image/webp" href="./assets/images/ICON_GPS.webp">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- Bootstrap y Iconos -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!-- CSS -->
     <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <?php 
    error_reporting(E_ALL);
    ini_set('display_errors', '1'); 
    include_once 'includes/navbar.php' ?>

<!-- INICIO - CAROUSEL -->
<section id="inicio" class="hero d-flex align-items-center justify-content-center reveal-on-scroll">
    <div class="container">
        <div class="row justify-content-center">
            <!-- Limitamos el ancho en pantallas medianas (10/12) y grandes (8/12) -->
            <div class="col-12 col-md-10 col-lg-8">
                
                <div id="carouselExampleIndicators" class="carousel slide carousel-custom" data-bs-ride="carousel">

                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    </div>

                    <div class="carousel-inner">
                        <!-- Añadida la clase w-100 para asegurarnos que la imagen ocupe el contenedor -->
                        <div class="carousel-item active">
                            <img src="./assets/images/SLIDE1.webp" class="d-block w-100" alt="Slide 1">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/SLIDE2.webp" class="d-block w-100" alt="Slide 2">
                        </div>
                        <div class="carousel-item">
                            <img src="./assets/images/SLIDE3.webp" class="d-block w-100" alt="Slide 3">
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div> <!-- /carousel -->

            </div>
        </div>

        <!-- Botón flotante para ir a la sección Acerca (fuera del carrusel para que no se mueva) -->
        <div class="text-center mt-4">
            <a href="#about" id="scrollBtn" class="scroll-btn btn" role="button" aria-label="Ir a ¿Por qué elegirnos?">
                <i class="bi bi-arrow-down-circle-fill"></i>
            </a>
        </div>
  
    </div>
</section>

<!-- Sección Acerca de Nosotros -->
<section id="about" class="about-section reveal-on-scroll">
    <div class="container">
        
        <!-- Título centrado -->
        <h2 class="section-title text-center">¿Por qué elegir a Ingeniería GPS?</h2>

        <!-- Fila contenedora con espacio entre tarjetas (g-4) -->
        <div class="row g-4 justify-content-center">
            
            <!-- Tarjeta 1: Garantía -->
            <div class="col-12 col-md-4 d-flex">
                <div class="card card-elegant w-100 reveal-on-scroll">
                    <div class="card-icon-header">
                        <i class="bi bi-display"></i>
                    </div>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title-elegant">Garantía</h5>
                        <p class="card-text-elegant">Te garantizamos satisfacción en tus compras de tecnología para el campo, porque somos la única empresa en México con personal técnico capacitado directamente en las fábricas de las principales marcas de Agricultura de Precisión a nivel mundial, como: AgLeader, Raven, Plantium y Topcon (en USA, Brasil y Argentina).</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 2: Prestigio -->
            <div class="col-12 col-md-4 d-flex">
                <div class="card card-elegant w-100 reveal-on-scroll">
                    <div class="card-icon-header">
                        <i class="bi bi-people-fill"></i>
                    </div>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title-elegant">Prestigio</h5>
                        <p class="card-text-elegant">Empresas importantes en México y Centro América se han cambiado de otro proveedor a trabajar con nosotros. Tú también puedes ser otro cliente exitoso que nos permita colaborar para ayudarlo a mejorar su manera de hacer Agricultura.</p>
                    </div>
                </div>
            </div>

            <!-- Tarjeta 3: Ambiente -->
            <div class="col-12 col-md-4 d-flex">
                <div class="card card-elegant w-100 reveal-on-scroll">
                    <div class="card-icon-header">
                        <i class="bi bi-leaf-fill"></i>
                    </div>
                    <div class="card-body d-flex flex-column text-center">
                        <h5 class="card-title-elegant">Ambiente</h5>
                        <p class="card-text-elegant">Nuestra visión es lograr optimizar las labores agrícolas para tener beneficios económicos para nuestros clientes, facilitar el trabajo de los operadores y lograr reducir la degradación ambiental derivada de las malas prácticas.</p>
                    </div>
                </div>
            </div>

        </div> <!-- /row -->
    </div>
</section>

<section id="clients" class="py-5 reveal-on-scroll">
    <div class="container py-4">
        
        <div class="clients-box-custom">
            
            <div class="title-wrapper text-center">
                <span class="badge-title">Nuestros clientes y partners</span>
            </div>

            <div class="row g-0 position-relative mt-5">
                
                <div class="col-12 col-lg-6 px-4 mb-5 mb-lg-0">
                    <div class="row row-cols-3 g-4 align-items-center justify-content-center">
                        
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-agrien.jpg" alt="Agrien"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-bayer.jpg" alt="Bayer"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-abe.jpg" alt="ABE"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-berrymex.jpg" alt="Berrymex"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-durmanriego.jpg" alt="Durman Riego"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/cliente-grupogielpeh.jpg" alt="Grupo Gielpeh"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.1s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-impulsora.jpg" alt="Impulsora"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.2s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-zucarmex.jpg" alt="Zucarmex"></div>
                        </div>
                        <div class="col text-center wow fadeInLeft" data-wow-delay="0.3s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client-suavetequila.webp" alt="Suave Tequila"></div>
                        </div>

                    </div>
                </div>

                <div class="vertical-divider d-none d-lg-block"></div>

                <div class="col-12 col-lg-6 px-4">
                    <div class="row row-cols-3 g-4 align-items-center justify-content-center">
                        
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.1s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-agres.jpg" alt="Agres"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.2s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-farmtrx.png" alt="FarmTRX"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.3s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-johndeere.jpg" alt="John Deere"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.1s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-ditchassist.webp" alt="Ditch Assist"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.2s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-agleader.png" alt="AgLeader"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.3s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-sunnav.jpg" alt="SunNav"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.1s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-topcon.png" alt="Topcon"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.2s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-juscafresa.jpg" alt="Juscafresa"></div>
                        </div>
                        <div class="col text-center wow fadeInRight" data-wow-delay="0.3s">
                            <div class="logo-wrapper"><img src="./assets/images/clientes/client2-levelland.jpg" alt="Level Land"></div>
                        </div>

                    </div>
                </div>

            </div> 
        </div> 
    </div>
</section>

<!-- NUESTROS PRODUCTOS -->
<section id="features" class="products-section reveal-on-scroll">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="products-title">Nuestros Productos</h2>
            <span class="products-subtitle">Descubre toda la gama de Agricultura de Precisión</span>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-12 col-md-10 col-lg-9">
                
                <div id="carouselFeatures" class="carousel slide product-carousel" data-bs-ride="carousel">
                    
                    <div class="carousel-indicators-custom carousel-indicators">
                        <button type="button" data-bs-target="#carouselFeatures" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselFeatures" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselFeatures" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselFeatures" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselFeatures" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        <button type="button" data-bs-target="#carouselFeatures" data-bs-slide-to="5" aria-label="Slide 6"></button>
                    </div>

                    <div class="carousel-inner">
                        
                        <div class="carousel-item active">
                            <img src="./assets/images/productos/Drones.jpg" class="d-block w-100" alt="Drones Agrícolas">
                            <div class="product-caption">
                                <h5>Drones</h5>
                                <p>Para aspersión de productos líquidos y sólidos, tenemos los equipos UAV más reconocidos y confiables del mercado.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="./assets/images/productos/Autoguiado.jpg" class="d-block w-100" alt="Autonavegación y guiado">
                            <div class="product-caption">
                                <h5>Autoguiado</h5>
                                <p>Ya sean electrónicos o hidráulicos, tenemos equipos acordes a la necesidad de cada productor. Somos la empresa más especializada en pilotos automáticos de cualquier marca.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="./assets/images/productos/Nivelacion.jpg" class="d-block w-100" alt="Sistemas de Nivelación">
                            <div class="product-caption">
                                <h5>Nivelación</h5>
                                <p>Con la nivelación más precisa y fácil de operar, garantizamos ahorros de al menos la mitad del trabajo en comparación a cualquier tecnología similar.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="./assets/images/productos/Escrepas.jpg" class="d-block w-100" alt="Escrepas de nivelación">
                            <div class="product-caption">
                                <h5>Escrepas</h5>
                                <p>Tenemos niveladoras para todas las potencias de tractores y diseños exclusivos como los de eyección con sistema de tijera que ¡NO SE DESCUADRAN!</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="./assets/images/productos/Fertilizacion.jpg" class="d-block w-100" alt="Fertilización Variable">
                            <div class="product-caption">
                                <h5>Fertilización Variable</h5>
                                <p>Tecnología simple y precisa que te ayuda a realizar la correcta aplicación de los insumos a tus cultivos para lograr ahorros e incrementos en rendimiento.</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="./assets/images/productos/Rendimiento.jpg" class="d-block w-100" alt="Monitoreo de Rendimiento">
                            <div class="product-caption">
                                <h5>Rendimiento de Cosecha</h5>
                                <p>Conoce tus zonas de rendimiento y corrige las desviaciones. Contamos con la tecnología más accesible para el monitoreo de granos y cultivos variables.</p>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselFeatures" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselFeatures" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div>
            </div>
        </div>

        <div class="row justify-content-center g-3 dynamic-pills-container">
            <div class="col-12 col-md-11">
                <ul class="nav nav-pills nav-justified custom-pills mb-2">
                    <li class="nav-item"><a class="nav-link" href="/drones">Drones</a></li>
                    <li class="nav-item"><a class="nav-link" href="/autoguiado">Autoguiado</a></li>
                    <li class="nav-item"><a class="nav-link" href="/nivelacion">Nivelación</a></li>
                    <li class="nav-item"><a class="nav-link" href="/escrepas">Escrepas</a></li>
                    <li class="nav-item"><a class="nav-link" href="/fertilizacion">Fertilización Variable</a></li>
                </ul>
                <ul class="nav nav-pills nav-justified custom-pills">
                    <li class="nav-item"><a class="nav-link" href="/rendimiento">Rendimiento de Cosecha</a></li>
                    <li class="nav-item"><a class="nav-link" href="/mapeo-suelos">Mapeo de Suelos</a></li>
                    <li class="nav-item"><a class="nav-link" href="/monitoreo-cultivo">Monitoreo de Cultivo</a></li>
                    <li class="nav-item"><a class="nav-link" href="/maquinaria-inteligente">Maquinaria Inteligente</a></li>
                </ul>
            </div>
        </div>

    </div>
</section>

<!-- TESTIMONIOS -->
<section id="testimonials" class="testimonials-section py-5 reveal-on-scroll">
    <div class="container">
        
        <div class="text-center mb-5">
            <h2 class="testimonials-title">Lo que dicen nuestros clientes</h2>
            <span class="testimonials-subtitle">Casos de éxito reales en el campo mexicano</span>
        </div>

        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8">
                
                <div id="carouselTestimonials" class="carousel slide carousel-fade testimonial-carousel" data-bs-ride="carousel" data-bs-interval="6000">
                    
                    <div class="carousel-indicators testimonial-indicators">
                        <button type="button" data-bs-target="#carouselTestimonials" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselTestimonials" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselTestimonials" data-bs-slide-to="2" aria-label="Slide 3"></button>
                        <button type="button" data-bs-target="#carouselTestimonials" data-bs-slide-to="3" aria-label="Slide 4"></button>
                        <button type="button" data-bs-target="#carouselTestimonials" data-bs-slide-to="4" aria-label="Slide 5"></button>
                    </div>

                    <div class="carousel-inner px-5 py-4">
                        
                        <div class="carousel-item active">
                            <div class="testimonial-content text-center">
                                <span class="product-tag">Nivelación GPS / Pendiente Variable</span>
                                <p class="quote-text">"La nivelación GPS de Topcon no tiene comparación, pues los costos de nivelar se bajan a la mitad, pero al usar diseños en pendiente variable hemos logrado ahorros de más del 80%."</p>
                                <h6 class="author-name">Martin Porras</h6>
                                <span class="author-location">Porras Ranch, Manuel Doblado, Guanajuato</span>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="testimonial-content text-center">
                                <span class="product-tag">Software de Nivelación AgForm-3D</span>
                                <p class="quote-text">"El software es mucho muy intuitivo y súper fácil de usar. Al principio teníamos miedo de adquirirlo porque pensamos que se necesitarían los conocimientos de un ingeniero... pero hoy en día hasta nosotros capacitamos a otros compañeros para poder usarlo."</p>
                                <h6 class="author-name">Marco Antonio Medina</h6>
                                <span class="author-location">Grupo Gielphe, Palmar de Bravo, Puebla</span>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="testimonial-content text-center">
                                <span class="product-tag">Autoguado Eléctrico Topcon</span>
                                <p class="quote-text">"Nosotros teníamos un Autopilot Hidráulico funcionando perfectamente, pero cuando probamos este sistema eléctrico nos encantó; trabaja igual o mejor pero sin el problema de causarle calentamiento al tractor y con la posibilidad de cambiarlo nosotros mismos si es necesario."</p>
                                <h6 class="author-name">José Alfredo González Quiroz</h6>
                                <span class="author-location">Granja González, Valle de Santiago, Gto</span>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="testimonial-content text-center">
                                <span class="product-tag">Dron Fumigador Agras</span>
                                <p class="quote-text">"El Dron nos permite poder fumigar nuestros plátanos en zonas muy complicadas para hacerlo de manera manual. Así podemos combatir las plagas y enfermedades de una manera más fácil y eficiente."</p>
                                <h6 class="author-name">Sergio Ramírez</h6>
                                <span class="author-location">Asociación de Productores de Plátano de Atzalan, Veracruz</span>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="testimonial-content text-center">
                                <span class="product-tag">Servicio a Otras Marcas</span>
                                <p class="quote-text">"Teníamos meses con problemas en nuestro equipo y el proveedor que nos vendió no nos daba solución, y ustedes en un día nos resolvieron el problema. Un servicio excelente."</p>
                                <h6 class="author-name">Eduardo Santamaria</h6>
                                <span class="author-location">Papas Franco, Perote, Veracruz</span>
                            </div>
                        </div>

                    </div>

                    <button class="carousel-control-prev custom-controls" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="prev">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="carousel-control-next custom-controls" type="button" data-bs-target="#carouselTestimonials" data-bs-slide="next">
                        <i class="bi bi-chevron-right"></i>
                    </button>

                </div> 
            </div>
        </div>

    </div>
</section>

<!-- CONTACTO -->
 <section id="contact" class="contact-section py-5 reveal-on-scroll">
    <div class="container py-4">
        <div class="row g-5 align-items-stretch">
            
            <div class="col-12 col-md-6 d-flex flex-column justify-content-between">
                <div>
                    <h2 class="contact-main-title mb-2">Puedes encontrarnos de varias maneras</h2>
                    <p class="text-muted mb-4" style="font-weight: 500;">Estamos listos para atenderte y optimizar tus labores en el campo.</p>
                    <hr class="my-4 custom-hr">

                    <div class="contact-grid">
                        
                        <div class="contact-info-card mb-4">
                            <h3 class="contact-sub-title"><i class="bi bi-briefcase-fill me-2 text-primary"></i>Contacto Ventas</h3>
                            <div class="contact-links">
                                <div class="link-item">
                                    <a href="tel:+524621182494"><i class="bi bi-telephone me-2"></i>(462) 118 2494</a>
                                    <a href="mailto:ecuellar@ingenieriagpsmexico.com"><i class="bi bi-envelope-at me-2"></i>ecuellar@ingenieriagpsmexico.com</a>
                                </div>
                            </div>
                        </div>

                        <div class="contact-info-card mb-4">
                            <h3 class="contact-sub-title"><i class="bi bi-gear-fill me-2 text-secondary"></i>Contacto Servicio</h3>
                            <div class="contact-links">
                                <div class="link-item">
                                    <a href="tel:+524621815085"><i class="bi bi-telephone me-2"></i>(462) 181 5085</a>
                                    <a href="mailto:pablo.alvarez@ingenieriagpsmexico.com"><i class="bi bi-envelope-at me-2"></i>pablo.alvarez@ingenieriagpsmexico.com</a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="social-box-wrapper mt-4">
                    <h4 class="social-title-header mb-3">Síguenos en nuestras redes</h4>
                    <div class="d-flex flex-wrap gap-2">
                        <a href="https://www.facebook.com/ingenieriagpsmx" target="_blank" class="social-pill fb-pill">
                            <i class="bi bi-facebook"></i>&nbsp;Facebook
                        </a>
                        <a href="https://www.youtube.com/Ingenier%C3%ADaGPS" target="_blank" class="social-pill yt-pill">
                            <i class="bi bi-youtube"></i>&nbsp;YouTube
                        </a>
                        <a href="https://www.instagram.com/ingenieriagps/" target="_blank" class="social-pill ig-pill">
                            <i class="bi bi-instagram"></i>&nbsp;Instagram
                        </a>
                    </div>
                </div>
            </div> <div class="col-12 col-md-6">
                <div class="contact-form-card p-4 p-lg-5 bg-white">
                    <h3 class="form-card-title text-center mb-4">¡Contáctanos!</h3>

                    <form id="form" action="" method="post" class="needs-validation" novalidate>

                        <div class="d-none" aria-hidden="true">
                            <label>Deja este campo vacío:</label>
                            <input type="text" name="honeypot_field" autocomplete="off" value="">
                        </div>

                        <div class="form-floating mb-3">
                            <input type="text" id="name" name="nombre" class="form-control custom-input" placeholder="Nombre / Empresa" required>
                            <label for="name">Nombre / Empresa <span class="text-danger">*</span></label>
                        </div>

                        <div class="form-floating mb-3">
                            <input type="email" id="email" name="correo" class="form-control custom-input" placeholder="ejemplo@correo.com" required>
                            <label for="email">Correo Electrónico <span class="text-danger">*</span></label>
                        </div>

                        <div class="form-floating mb-4">
                            <textarea id="message" name="mensaje" class="form-control custom-textarea" placeholder="¿En qué podemos ayudarte?" style="height: 130px" required></textarea>
                            <label for="message">¿En qué podemos ayudarte? <span class="text-danger">*</span></label>
                        </div>

                        <button class="btn btn-submit-custom w-100 py-3 text-uppercase" type="submit" id="submit">
                            <i class="bi bi-send-fill me-2"></i> Enviar Mensaje
                        </button>

                        <div class="text-start mt-3">
                            <p class="small mb-0" style="color: red;">
                                <span class=" fw-bold">*</span> Los campos marcados son obligatorios.
                            </p>
                        </div>
                    </form>
                </div>
            </div> 
        </div> 
    </div>
</section>

<?php include_once 'includes/footer.php'; ?>

<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<!-- Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

<script src="./assets/js/main.js"></script>
</body>
</html>