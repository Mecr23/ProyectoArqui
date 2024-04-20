
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

<input type="text" name="habitacion_id" placeholder="habitacion_id">
<input type="text" name="estado" placeholder="estado">
<input type="text" name="fecha_limpieza" placeholder="fecha_limpieza">
<input type="text" name="personal_limpieza" placeholder="personal_limpieza">
<input type="text" name="mantenimiento_descripcion" placeholder="mantenimiento_descripcion">
<input type="text" name="mobiliario_actualizado" placeholder="hmobiliario_actualizado">
<input type="text" name="reparaciones_recomendadas" placeholder="reparaciones_recomendadas">
<input type="text" name="estado_habitacion_id" placeholder="estado_habitacion_id">


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

    $habitacion_id= $_POST ['habitacion_id'];
    $estado= $_POST ['estado'];
    $personal_limpieza= $_POST ['personal_limpieza'];
    $fecha_ingreso= $_POST ['fecha_ingreso'];
    $mantenimiento_descripcion= $_POST ['mantenimiento_descripcion'];
    $mobiliario_actualizado= $_POST ['mobiliario_actualizado'];
    $reparaciones_recomendadas= $_POST ['reparaciones_recomendadas'];
    $estado_habitacion_id= $_POST ['estado_habitacion_id'];

    $insertarDatos = "INSERT INTO habitaciones" ('$habitacion_id','$estado','$fecha_limpieza','$personal_limpieza','$fecha_ingreso','$mobiliario_actualizado','$reparaciones_recomendadas','$estado_habitacion_id');

    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);


   


}




?>
