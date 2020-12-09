<?php

try{

    $base=new PDO("mysql:host=localhost; dbname=carrito_tla", "root", "");

    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql="SELECT * FROM datos WHERE nombre= :login AND contraseña= :password";
    $resultado=$base->prepare($sql);
    $login=htmlentities(addslashes($_POST["login"]));
    $password=htmlentities(addslashes($_POST["password"]));
    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":password", $password);
    $resultado->execute();

    $numero_registro=$resultado->rowCount();

        if($numero_registro!=0){

            header("location:./index.html");

        }else{
            header("location:./loginvista.php");
        }

}catch(Exception $e){
    die("Error: ". $e->getMessage());
}

?>
