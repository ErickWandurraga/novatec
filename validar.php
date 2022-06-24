<?php
$usuario=$POST['usuario']; 
$contraseña=base64_decode($_POST['contraseña']); //desencripta la contraseña
session_start();
$_SESSION['usuario']=$usuario;

include('db.php');

$consulta="SELECT * from usuarios where usuario='$usuario' and contraseña='$contraseña'"; //consulta la base de datos
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

//if para la validación del usuario y contraseña
if($filas){
    header("location:home.php"); //conexión true envia a home.php

}else{
    ?>
    <?php
    include ("index.php");
    ?>
    <h1 class="bad">ERROR EN LA AUTENTIFICACION</h1> 
    <?php
 //conexión false mensaje ERROR
}


mysqli_free_result($resultado);
mysqli_close($conexion);