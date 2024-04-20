<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "cuidadoslospatitos";

$conexion = new mysqli($servername, $username, $password, $database);



// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$dueño = $_POST['dueño'];
$cedula = $_POST['cedula'];
$fecha_ingreso = $_POST['fecha_ingreso'];
$veterinario = $_POST['veterinario'];
$cuidados_especiales = $_POST['cuidados_especiales'];
$nivel_asistencia_id = $_POST['nivel_asistencia'];
$paquetes_adicionales_id = isset($_POST['paquetes_adicionales']) ? implode(", ", $_POST['paquetes_adicionales']) : '';

// Preparar la consulta SQL para insertar datos
$sql = "INSERT INTO mascotas (nombre, dueño, cedula, fecha_ingreso,veterinario, cuidados_especiales_id , nivel_asistencia_id , paquetes_adicionales_id) 
        VALUES ('$nombre', '$dueño', '$cedula', '$fecha_ingreso', '$veterinario', '$cuidados_especiales', '$nivel_asistencia_id', '$paquetes_adicionales_id')";

if ($conexion->query($sql) === TRUE) {
    echo "Datos de la mascota registrados correctamente";
} else {
    echo "Error al registrar la mascota: " . $conexion->error;
}



?>
