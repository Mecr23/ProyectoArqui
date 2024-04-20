
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
            <li><a href="login.php">Inicio</a></li>
                <li><a href="servicioslogin.php">Servicios</a></li>
                <li><a href="Recomendacioneslogin.php">Recomendaciones</a></li>
                <li><a href="contactenoslogin.php">Contactenos</a></li>
                
            </ul>
        </nav>
    </div>
</header>

<form action="#" name="Registro" method="post">

<input type="text" name="Nombre" placeholder="Nombre">
<input type="text" name="Correo" placeholder="Correo">
<input type="text" name="Contraseña" placeholder="Contraseña">


<input type="submit" name="regitro">
<input type="reset">

</form>

<footer class="footer">
        <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
    </footer>

</body>

</html>

<?php

if(isset($_POST ['re gistro'])){

    $Nombre= $_POST ['Nombre'];
    $Correo= $_POST ['Correo'];
    $Contraseña= $_POST ['Contraseña'];
    $ID_Cargo= $_POST ['ID_Cargo'];

    $insertarDatos = "INSERT INTO usuarios" ('','$Nombre','$Correo','$Contraseña','$ID_Cargo'==2);

    $ejecutarInsertar = mysqli_query($conexion, $insertarDatos);


   


}




?>
