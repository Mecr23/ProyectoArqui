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
                    <li><a href="verreservaciones.php">Reservaciones</a></li>
                    <li><a href="verformulario.php">Mascotas Registradas</a></li>
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
        <td>reserva_id</td>
        <td>mascota_id</td>
        <td>fecha_inicio</td>
        <td>fecha_fin</td>
        <td>tipo_estancia</td>
        <td>tipo_habitacion</td>
        <td>tiempo_estancia_id </td>
        <td>estancia_id </td>
        <td>tipo_habitacion_id</td>
        
    </tr>

<?php
$sql="SELECT * from reservaciones";
$result=mysqli_query($conexion,$sql);


while($mostrar=mysqli_fetch_array($result)){
?>

    <tr>
        <td><?php echo $mostrar['reserva_id'] ?></td>
        <td><?php echo $mostrar['mascota_id'] ?></td>
        <td><?php echo $mostrar['fecha_inicio'] ?></td>
        <td><?php echo $mostrar['fecha_fin'] ?></td>
        <td><?php echo $mostrar['tipo_estancia'] ?></td>
        <td><?php echo $mostrar['tipo_habitacion'] ?></td>
        <td><?php echo $mostrar['tiempo_estancia_id'] ?></td>
        <td><?php echo $mostrar['estancia_id'] ?></td>
        <td><?php echo $mostrar['tipo_habitacion_id'] ?></td>
        
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