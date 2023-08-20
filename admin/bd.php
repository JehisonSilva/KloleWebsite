<?php
$server="localhost";
$baseDeDatos="website";
$user="root";
$password="";

try{
    $conexion=new PDO ("mysql:host=$server;dbname=$baseDeDatos",$user,$password);
    

}catch(Exception $error) {
    echo $error->getMessage();
}

?>
