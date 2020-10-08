<?php

$user = "usuario";
$pass = "12345";

try{
    $dsn = 'mysql:host=localhost;dbname=prueba;charset=utf8'; // indicar utf8 en dsn
    $opciones = array(PDO::ATTR_PERSISTENT => true, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $con = new PDO($dsn, $user, $pass, $opciones);

    $stmt = $con->prepare("INSERT INTO datos (nombre, apellido) VALUES (:nom, :ape)");
        $stmt->bindParam(":nom", $_POST["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":ape", $_POST["apellido"], PDO::PARAM_STR);
        $stmt->execute();

} catch(PDOException $e){
    echo "Error " . $e->getMessage();
}
    

