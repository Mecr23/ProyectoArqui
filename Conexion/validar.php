<?php
$correo=$_POST['correo'];
$contraseña=$_POST['Contraseña'];
session_start();
$_SESSION['usuario']=$correo;

$conexion=mysqli_connect("localhost","root","","cuidadoslospatitos");

$consulta="SELECT*FROM usuarios where Correo='$correo' and Contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_fetch_array($resultado);

if($filas['ID_cargo']==1){ //administrador
    header("location:home.php");

}else
if($filas['ID_cargo']==2){ //cliente
header("location:homecliente.php");
}
else{
    ?>
    <?php
    include("login.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);