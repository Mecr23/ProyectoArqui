<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/contactenos.css">
    <script src="https://kit.fontawesome.com/79a70f37ae.js" crossorigin="anonymous"></script>
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

    <a href="https://api.whatsapp.com/send?phone=88886619"
    class="btn-wsp" target="_blank">
    <i class="fa-brands fa-whatsapp"></i>
    </a>
<div class="container-form">
    <div class="info-form">
        <h1>Contactenos</h1>
        <a href="#"> <i class="fa-solid fa-phone">
        </i>•2324-1501</a>
        <a href="#"> <i class="fa-solid fa-envelope">
        </i>•CuidadoslospatitosSA@gmail.com</a>
        <a href="#"> <i class="fa-solid fa-location-pin">
        </i>•Sabana San Jose, Costado Norte de la agencia Toyota.</a>
        <a href="#"> <i class="fa-brands fa-square-facebook"></i>
        </i>•Cuidados los patitos</a>
        <a href="#"> <i class="fa-brands fa-square-instagram"></i>
        </i>•Cuidadoslospatitos_SA</a>
    </div>
    

    <form action="#" autocomplete="off">
    <input type="text" name="nombre" placeholder="Ingresar Nombre"
    class="campo">
    <input type="email" name="email" placeholder="Ingresar Correo Electronico"
    class="campo">
    <input type="phone" name="phone" placeholder="Ingresar Numero de telefono"
    class="campo">
    <textarea name="mensaje"
    placeholder="Ingresa tu mensaje">
    </textarea>
    <input type="submit" name="Enviar" value="enviar mensaje" class="btn-enviar">
    </form>
</div>

<div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.9727622634064!2d-84.10113539999999!3d9.936224200000007!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fcaba6edf033%3A0xf77fea35eae244c8!2sParque%20Metropolitano%20La%20Sabana!5e0!3m2!1ses!2scr!4v1712729275525!5m2!1ses!2scr"></iframe>
</div>


<footer class="footer">
    <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
</footer>


</body>
</html>