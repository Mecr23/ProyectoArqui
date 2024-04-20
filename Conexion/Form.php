<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/registrarse.css">
    <script src="../js/registrarse.js"></script>
    <style>

        form {
            width: 90%; /* Ancho del formulario */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
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
<body>

    <h2>Registro de Mascotas</h2>

    <form action="guardar_mascota.php" method="post">
        <label for="nombre">Nombre de la mascota:</label><br>
        <input type="text" id="nombre" name="nombre" required><br><br>
        
        <label for="nombre_dueño">Nombre del dueño:</label><br>
        <input type="text" id="nombre_dueño" name="dueño" required><br><br>
        
        <label for="numero_cedula_dueño">Número de cédula del dueño:</label><br>
        <input type="text" id="numero_cedula_dueño" name="cedula" required><br><br>
        
        <label for="fecha_ingreso">Fecha de ingreso al sistema:</label><br>
        <input type="date" id="fecha_ingreso" name="fecha_ingreso" required><br><br>
        
        <label for="veterinario_asignado">Veterinario asignado:</label><br>
        <input type="text" id="veterinario_asignado" name="veterinario" required><br><br>
        
        <label for="cuidados_especiales_id ">Cuidados especiales:</label><br>
    <select id="cuidados_especiales" name="cuidados_especiales" required>
        <option value="1">Alergias</option>
        <option value="2">Cambios de vendajes</option>
        <option value="3">Dietas especiales</option>
    </select><br><br>


        <label for="nivel_asistencia_id ">Nivel de asistencia que requiere:</label><br>
        <select id="nivel_asistencia_id " name="nivel_asistencia" required>
            <option value="1">Asistencia básica</option>
            <option value="2">Asistencia para movilidad</option>
            <option value="3">Asistencia para alimentación</option>
            <option value="4">Asistencia para baño</option>
            <option value="5">Asistencia completa</option>
        </select><br><br>
        
        <label for="paquetes_adicionales_id">Paquetes adicionales:</label><br>
        <input type="checkbox" id="1" name="paquetes_adicionales[]" value="Disfrute de juegos">
        <label for="disfrute_juegos">Disfrute de juegos</label><br>
        <input type="checkbox" id="2" name="paquetes_adicionales[]" value="Paseos a sitios con acompañamiento">
        <label for="paseos_acompañamiento">Paseos a sitios con acompañamiento</label><br>
        <input type="checkbox" id="3" name="paquetes_adicionales[]" value="Paseo a espacio con piscina">
        <label for="paseo_piscina">Paseo a espacio con piscina</label><br>
        <input type="checkbox" id="4" name="paquetes_adicionales[]" value="Terapias en piscina">
        <label for="terapias_piscina">Terapias en piscina</label><br><br>
        
        <input type="submit" value="Registrar Mascota">
    </form>




<footer class="footer">
    <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
</footer>

</body>
</html>
