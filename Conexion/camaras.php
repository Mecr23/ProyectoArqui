<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/camaras.css">
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
                <li><a href="homecliente.php">Inicio</a></li>
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


    <section class="login">
        <div class="wrapper">
            <div class="login-container">
                <h3>Ingresar a la camara</h3>

                <form class="login-form">
                    <input type="password" name="contrasenna" id="contrasenna" placeholder="Ingrese el codigo">
                   
                    <a class="btn-enviar" href="videocamara.php">Ingresar</a>
                </form>
 
                <a class="regresar-btn" href="homecliente.php">Regresar</a>
            </div>
        </div>
    </section>

    <footer class="footer">
        <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
    </footer>

</body>

</html>