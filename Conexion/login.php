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
    <section class="login">
        <div class="wrapper">
            <div class="login-container">
                <h3>Inicio de Sesión</h3>

        <form action="validar.php" method="post">
            <h1>Sistema login</h1>
            <p>Usuario <input type="text" placeholder="ingrese su correo" name="correo"></p>
            <p>Contraseña <input type="password" placeholder="ingrese su contraseña" name="Contraseña"></p>
            
            <div class="middle">
                        <div class="recuerdame">
                            <input type="checkbox" name="recuerdame">
                            <label for="recuerdame">Recuerdame</label>
                        </div>
                      <span>  <a href="recuperar.php" > Olvidé la contraseña </a> </span> 
                    </div>
                    <input type="submit" value="Ingresar">


        </form>

        <span class="no-cuenta">No tienes una cuenta? <a href="registro.php">Registrate</a></span>
        <a class="regresar-btn" href="login.php">Regresar</a>
        </div>
        </div>
        </section>
        <footer class="footer">
        <p>Cuidado los patitos  | Todos los derechos reservados &copy; 2024</p>
    </footer>
    </body>
</html>