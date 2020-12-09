<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/formulario.css">
    <link rel="icon" href="img/aveIcono.ico">
    <script src="https://kit.fontawesome.com/b7e71043b2.js" crossorigin="anonymous"></script>
    <title>Tlacualli | Crear Cuenta</title>
</head>
<body>

        <form method="POST" class="formulario">
          <h1>Crear cuenta</h1>
          <div class="contenedor">

            <div class="input-contenedor">
              <i class="fas fa-user icon"></i>
              <input type="text" name="name" placeholder="Usuario">
            </div>

            <div class="input-contenedor">
              <i class="fas fa-envelope icon"></i>
              <input type="email" name="email" placeholder="Correo">
            </div>

            <div class="input-contenedor">
              <i class="fas fa-unlock icon"></i>
              <input type="password" name="password" placeholder="Contraseña">
            </div>

            <input type="submit" name="register" value="Registrarse" class="button">
            <?php
        include("registrar.php");
        ?>
            <p>Al registrarse aceptas las <strong> politicas de privacidad</strong> y <strong>condiciones de uso</strong></p>
            <p>Ya tienes cuenta?</p> <a class="link" href="loginvista.php"><p>iniciar sesion</p></a>
          </div>
        </form>

        


            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>
        </body>
        </html>