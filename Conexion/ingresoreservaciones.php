<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/ingresoreservaciones.css">
    <script src="../js/ingresoreservaciones.js"></script>
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

    <div class="form-container">
        <h1>Reservaciones</h1>
        
        <form action="/submit_reservation" method="post">

            <label for="checkin">Fecha de Ingreso:</label><br>
            <input type="date" id="checkin" name="checkin" required><br>

            <label for="checkout">Fecha de Salida:</label><br>
            <input type="date" id="checkout" name="checkout" required><br>
            
            <label for="time">Hora de Ingreso:</label><br>
            <input type="time" id="time" name="time" required><br>

            <label for="time">Hora de Salida:</label><br>
            <input type="time" id="time" name="time" required><br>
            <label for="mascotas">Numero de mascotas:</label><br>
            <input type="number" id="mascotas" name="mascotas" min="1" required><br>

            <label for="pickup">Necesita transporte?</label><br>
            <h5>El transporte solo aplica en la zona GAM</h5>
            <input type="checkbox" id="pickup" name="pickup"><br>

            <label for="comments">Si necesitas algo en especifico por favor ingresalo aqui:</label><br>
            <textarea id="comments" name="comments" rows="4" cols="50"></textarea><br>

            <input type="submit" value="Reservar">
        </form>
    </div>

    <footer class="footer">
        <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
    </footer>

</body>

</html>