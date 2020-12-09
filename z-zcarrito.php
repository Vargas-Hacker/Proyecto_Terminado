<?php 

include("./php/conexion.php");

if( isset($_GET['id'])){
  $resultado = $conexion ->query("SELECT * FROM comidas where id=".$_GET['id']) or die($conexion -> error);
  if(mysqli_num_rows($resultado)>0){
    $fila = mysqli_fetch_row($resultado);

  }else{
  header("Location: ./index.html");
}

}else{
  header("Location: ./index.html");
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="icon" href="img/aveIcono.ico">
    <title>Tlacualli | Carrito</title>
</head>
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


           <div class="card" style="width: 18rem;">
                <img src="img/<?php echo $fila[3];?>" class="card-img-top" alt="<?php echo $filla[3];?>">
                 <div class="card-body">
                      <h5 class="card-title"><?php echo $fila[1];?></h5>
                       <p class="card-text"><?php echo $fila[2]; ?></p>
                 </div>
                     <ul class="list-group list-group-flush">
                      <li class="list-group-item">$<?php echo $fila[4];?></li>
                       </ul>
                 <div class="card-body">
                       <a href="#" class="card-link">Remover</a>
                  </div>
            </div>


        <footer>
            Copyright by Tlacualli 2020. All right reserved
        </footer>
        
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>
        </body>
        </html>