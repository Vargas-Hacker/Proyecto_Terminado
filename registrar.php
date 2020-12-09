<?php


include("bd.php");

if(isset($_POST['register'])){
    if (strlen($_POST['name']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1) {

        $name = trim($_POST['name']);
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        $fechar = date("d/m/y");
        $consulta = "INSERT INTO datos(nombre, email, contraseña, fechaR) VALUES ('$name','$email','$password','$fechar')";
        $resultado = mysqli_query($conex, $consulta);
        if($resultado){
            ?>
            <h3 class="ok">Te has registrado correctamente</h3>
            <?php
        } 
        else{
            ?>
            <h3 class="bad">Ha ocurrdido un error</h3>
            <?php
        }
}     else{
    ?>
    <h3 class="bad">Por favor, complete los campos</h3>
    <?php
}  
}


?>