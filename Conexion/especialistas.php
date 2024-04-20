<?php
$conexion=mysqli_connect("localhost","root","","cuidadoslospatitos");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/login.js"></script>
</head>
<body>

<header class="header">
        <div class="menu container">
            <input type="checkbox" id="menu" />
            <!--Este es el menu-->
            <div class="Usuario">
                <img src="../Imagenes/Usuario.png" alt="">
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

<br>

<table border="1">
    <tr>
        <td>especialista_id</td>
        <td>nombre_empleado</td>
        <td>numero_cedula</td>
        <td>fecha_ingreso</td>
        <td>horario</td>
        <td>horario_puesto_id</td>
    </tr>

<?php
$sql="SELECT * from especialistas";
$result=mysqli_query($conexion,$sql);


while($mostrar=mysqli_fetch_array($result)){
?>

    <tr>
        <td><?php echo $mostrar['especialista_id'] ?></td>
        <td><?php echo $mostrar['nombre_empleado'] ?></td>
        <td><?php echo $mostrar['numero_cedula'] ?></td>
        <td><?php echo $mostrar['fecha_ingreso'] ?></td>
        <td><?php echo $mostrar['horario'] ?></td>
        <td><?php echo $mostrar['horario_puesto_id'] ?></td>
    </tr>
    <?php
}
?>
</table>


<a class="regresar-btn" href="inicioindex.html">Regresar</a>
        </div>
        </div>
        </section>
        <footer class="footer">
        <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
    </footer>
</body>
</html>




















</html>