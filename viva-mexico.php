<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/aveIcono.ico">
    <title>Viva México</title>
<body>
    
<!--Barra de navegacion-->
<div class="fixed-top">
    <div class="collapse" id="navbarToggleExternalContent">
      <div class="p-3" style="background-color: #63ace5;">
        <center>
        <a class="btn btn-outline-light" href="#" role="button">Contactanos</a>
              <a class="btn btn-outline-light" href="z-el-cometa.php" role="button">El Cometa</a>
              <a class="btn btn-outline-light" href="la-choza.php" role="button">La Choza</a>
              <a class="btn btn-outline-light" href="viva-mexico.php" role="button">Viva Mexico</a>
              <a class="btn btn-outline-light" href="y-griega.php" role="button">Y Griega</a>
              <a class="btn btn-outline-light" href="z-zcarrito.php" role="button">Carrito</a>
        </center>
      </div>
    </div>
    <nav class="navbar navbar-light" style="background-color: #63ace5;">
      <a class="navbar-brand" href="index.html">
        <img src="img/ave.png" width="40" height="40" class="d-inline-block align-top" loading="lazy">
        <span class="cm">Tlacualli</span>
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation" style="background-color: #676868;">
        <span class="navbar-toggler-icon" ></span>
      </button>
    </nav>
  </div>
    
    <div class="container">
        <section class="main row">
            <article class="articulo col-xs-12 col-sm-8 col-md-9 mb-1">
                <h3>Viva México</h3>
                <p>Si deseas degustar recetas de la cocina mexicana, no pierdas la oportunidad de visitar este restaurante. Muchos de sus clientes dicen que aquí los camareros te ofrecen un famoso menudo, un perfectamente elaborado chuletón y un tierno juane. Este lugar es famoso por sus insuperables tequila, su sensacional cerveza y su irresistible licor. En Viva Mexico, sus comensales pueden pedir un espectacular café cortado.

                Por la noche, se puede escuchar música en directo. Comprueba por ti mismo lo servicial que es su personal. Su magnífico servicio es un enorme añadido para este lugar. Una serie de usuarios mencionan que los platos que ofrecen tienen unos precios interesantes. Este lugar tiene un ambiente encantador y una decoración divina. Los usuarios de Google han premiado a este restaurante con un 4,6.</p><br>
                
                <div class="container">
                 <div class="row row-cols-2">
                    <div class="col">
                      <h6>Direccion</h6>
                      Av. Abraham Lincoln 900-1, Ciudad Juarez, Chihuahua, Mexico
                    </div>
                    <div class="col">
                    <h6>Caracteristicas</h6>
                      <ul>
                        <li>Wi-Fi</li>
                        <li>Sin asientos al aire libre</li>
                        <li>Reserva</li>
                        <li>Para llevar</li>
                        <li>Estacionamiento</li>
                        <li>Acceso para sillas de ruedas</li>
                      </ul>
                    </div>
                    <div class="col">
                      <h6>Horarios</h6>
                      <ul>
                        <li>Lunes Cerrado</li>
                        <li>Martes 08:00-21:00</li>
                        <li>Miercoles 08:00-21:00</li>
                        <li>Jueves 08:00-00:00</li>
                        <li>Viernes 08:00-00:00</li>
                        <li>Sabado 08:00-00:00</li>
                        <li>Domingo 08:00-21:00</li>
                      </ul>
                    </div>
                    <div class="col">
                      <h6>Redes sociales</h6>
                      <a href="https://restaurantevivamexico.com/?utm_source=restaurantguru&utm_medium=referral">Pagina Web</a>
                    </div>
                 </div>
                </div>
            </article>
            <aside class="col-xs-12 col-sm-4 col-md-3 Mapa mb-1">
                <h3>Mapa</h3>
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d13570.68942953674!2d-106.45418300000001!3d31.752143000000004!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDQ1JzA3LjciTiAxMDbCsDI3JzE1LjEiVw!5e0!3m2!1ses!2sus!4v1607433732454!5m2!1ses!2sus" width="auto" height="400px" frameborder="0" style="max-width: 100%; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </aside>
        </section>

        <div class="row">

            <?php

                include('./php/conexion.php');

                $resultado = $conexion ->query('SELECT * FROM comidas2 order by id DESC limit 3') or die($conexion -> error);

                while($fila = mysqli_fetch_array($resultado)){


                
              ?>
            <div class="col-xs-12 col-sm-6 col-md-4 rico mb-1">
                <h3><?php echo $fila ['nombre'];?></h3>
                <img src="img/<?php echo $fila ['img'];?>" style="max-width: 100%; width: 300px; height: 168px" >
                <p><?php echo $fila ['descripcion'];?></p>
                <p>$<?php echo $fila ['precio'];?></p>
                <a class="btn btn-outline-dark" href="z-zcarrito.php?id=<?php echo $fila['id']; ?>" role="button">Agregar a mi pedido</a>
            </div>
              <?php } ?>


        </div>
    </div>


<footer>
    Copyright by Tlacualli 2020. All right reserved
</footer>

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


</body>
</html>