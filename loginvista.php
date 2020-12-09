<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="icon" href="img/aveIcono.ico">
    <script src="https://kit.fontawesome.com/b7e71043b2.js" crossorigin="anonymous"></script>
    <title>Tlacualli | Login</title>
</head>
<body>
  <form action="comprueba_login.php" method="post">
        
          <h1>Iniciar sesion</h1>
          <div class="contenedor">


            <div class="input-contenedor">
              <i class="fas fa-user icon"></i>
              <input type="text" name="login" placeholder="Usuario">
            </div>

            <div class="input-contenedor">
              <i class="fas fa-unlock icon"></i>
              <input type="password" name="password" placeholder="Contraseña">
            </div>

            <input type="submit" name="register" value="Login" class="button">
            
            <p>No tienes cuenta?</p> <a class="link" href="formulario.php"><p>Registrarse</p></a>
          </div>
        </form>
        
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>
        </body>
        </html>