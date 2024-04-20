<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pagina</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/servicios.css">
</head>

<body>
    <header class="header">
        <div class="menu container">
            <input type="checkbox" id="menu" />
            <!--Este es el menu-->
            <div class="logo1">
                <img src="../Imagenes/logo1.png" alt="">
            </div>

            <nav class="navbar">

                <ul>
                <li><a href="home.php">Inicio</a></li>
                    <li><a href="servicios.php">Servicios</a></li>
                    <li><a href="ingresoreservaciones.php">Reservaciones</a></li>
                    <li><a href="Form.php">Formulario</a></li>
                    <li><a href="Recomendaciones.php">Recomendaciones</a></li>
                    <li><a href="contactenos.php">Contactenos</a></li>
                    <li><a href="especialistas.php">Nuestros veterinarios</a></li>
                    <li><a href="camaras.php">Camaras</a></li>
                    <li><a href="login.php">Cerrar Sesion</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="video-container">
        <video src="../video/video.mp4" autoplay muted loop class="background"></video>

        <div class="content">
            <h1>NUESTROS SERVICIOS</h1>
            <a href="#about" class="btn">leer más</a>
        </div>
    </div>

    <section id="about">


        <h2>
            OFRECEMOS LA MEJOR COMODIDAD PARA TUS MASCOTAS
        </h2>

        <div class="servicios">
            <div class="card">
                <figure>
                    <img src="../imagenes/guarderia.jpeg">
                </figure>
                <div class="contenido">
                    <h3>GUARDERIA</h3>
                    <p>Dejar a tus mascotas al cuidado de otros mientras estás fuera puede ser una experiencia
                        estresante.
                        <br></br>
                        <br>Por eso, nos esforzamos por ofrecerte una guardería de mascotas segura, divertida y
                        acogedora donde tus amigos peludos puedan jugar, socializar y recibir el amor y la atención
                        que merecen.</br>
                    </p>

                </div>
            </div>

            <div class="card">
                <figure>
                    <img src="../imagenes/clinica.jpg">
                </figure>
                <div class="contenido">
                    <h3>CLINICA</h3>
                    <p>En Cuidado los patitos, entendemos que tus mascotas son más que simples animales; son
                        miembros valiosos de tu familia. Por eso, nos enorgullece ofrecerte un servicio
                        veterinario integral y dedicado para garantizar la salud y el bienestar de tus compañeros
                        peludos.
                        <br></br>
                        Nuestro equipo de veterinarios altamente calificados y apasionados está comprometido con
                        proporcionar
                        la mejor atención médica y preventiva para tus mascotas.
                    </p>


                </div>
            </div>

            <div class="card">
                <figure>
                    <img src="../imagenes/store.jpg">
                </figure>
                <div class="contenido">
                    <h3>TIENDA</h3>
                    <p>En nuestra tienda ofrecemos con un amplio catálogo de productos el cual abarca desde
                        alimentos
                        premium y juguetes hasta artículos de cuidado y accesorios de moda.
                        <br></br>
                        <br>Nos esforzamos por ofrecer solo lo mejor para satisfacer
                        las necesidades y los gustos de tus mascotas, ya sean perros, gatos, pájaros, reptiles o
                        roedores.</br>
                    </p>

                </div>
            </div>


        </div>




    </section>

    <section class="paquetes">
        <div class="wrapper">

            <!-- Contenedor -->
            <div class="paquetes-container">

                <!-- Primer paquete -->
                <article class="paquete">
                    <h3 class="paquete-titulo">Básico</h3>

                    <ul class="lista-beneficios">
                        <li>Necesidad Básica</li>
                        <li>Disfrute de juegos</li>
                        <li>Habitación Individual</li>
                        <li>Paseos a sitios con acompañamiento</li>
                        <li>Envío de fotos de la mascota</li>
                    </ul>

                    <span class="precio">₡20.000</span>

                    <a class="btn-paquete" href="login.html">Elegir plan</a>

                </article>

                <!-- Segundo paquete -->
                <article class="paquete">
                    <h3 class="paquete-titulo">Estándar</h3>

                    <ul class="lista-beneficios">
                        <li>Asistencia Completa</li>
                        <li>Habitacion individual o habitacion de cuidades especiales</li>
                        <li>Disfrute de juegos</li>
                        <li>Paseos a sitios con acompañamiento</li>
                        <li>Paseo a espacio con piscina</li>
                        <li>Envío de fotos de la mascota</li>
                    </ul>

                    <span class="precio">₡35.000</span>

                    <a class="btn-paquete" href="login.html">Elegir plan</a>


                </article>

                <article class="paquete">
                    <h3 class="paquete-titulo">Premium</h3>

                    <ul class="lista-beneficios">
                        <li>Paquete completo de actividades</li>
                        <li>Terapias en piscinas</li>
                        <li>Asistencia completa</li>
                        <li>Habitacion individual con camara o habitacion de cuidados especiales con camara</li>
                    </ul>

                    <span class="precio">₡50.000</span>

                    <a class="btn-paquete" href="login.html">Elegir plan</a>

                </article>
            
            </div>


        </div>
    </section>


    

    <!--<footer class="footer">
        <p>Todos los derechos reservados &copy; 2024</p>
    </footer>-->

</body>

</html>



<footer class="footer">
    <p>Cuidado los patitos | Todos los derechos reservados &copy; 2024</p>
</footer>

</body>

</html>