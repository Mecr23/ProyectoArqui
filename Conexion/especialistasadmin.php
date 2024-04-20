
<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cuidadoslospatitos";

$conexion = new mysqli($servername, $username, $password, $database);

?>



<!DOCTYPE html>
<html lang="es">
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
                    <li><a href="especialistasadmin.php">Especialistas</a></li>
                    <li><a href="verreservaciones.php">Reservaciones</a></li>
                    <li><a href="verformulario.php">Mascotas Registradas</a></li>
                    <li><a href="Habitaciones.php">Habitaciones</a></li>
                    <li><a href="camaras.php">Camaras</a></li>
                    <li><a href="login.php">Cerrar Sesion</a></li>
                
            </ul>
        </nav>
    </div>
</header>

<form action="#" name="Registro" method="post">

<input type="text" name="especialista_id" placeholder="especialista_id">
<input type="text" name="nombre_empleado" placeholder="nombre_empleado">
<input type="text" name="numero_cedula" placeholder="numero_cedula">
<input type="text" name="fecha_ingreso" placeholder="fecha_ingreso">
<input type="text" name="horario" placeholder="horario">
<input type="text" name="horario_puesto_id" placeholder="horario_puesto_id">


<input type="submit" name="regitro">
<input type="reset">

</form>

<footer class="footer">
        <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
    </footer>

</body>

</html>

<?php

if(isset($_POST ['registro'])){

    $especialista_id= $_POST ['especialista_id'];
    $nombre_empleado= $_POST ['nombre_empleado'];
    $numero_cedula= $_POST ['numero_cedula'];
    $fecha_ingreso= $_POST ['fecha_ingreso'];
    $horario= $_POST ['horario'];
    $horario_puesto_id= $_POST ['horario_puesto_id'];

    $insertarDatos = "INSERT INTO especialistas" ('$especialista_id','$nombre_empleado','$numero_cedula','$fecha_ingreso','$horario','$horario_puesto_id');

    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);


   


}




?>
