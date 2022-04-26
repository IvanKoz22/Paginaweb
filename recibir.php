<?php
 require_once('conexion.php');

  $dni=$_POST['dni'];
  $nombre=$_POST['nombre'];
  $apellido=$_POST['apellido'];
  $edad=$_POST['edad'];
  $conn=new conexion();


    echo "Datos recibidos <br>";
    echo "Hola " .$dni;
    

$queryINSERT="INSERT INTO `informacion` (`DNI`, `nombre`, `apellido`, `edad`) VALUES ('$dni', '$nombre', '$apellido', '$edad');";
$insert= mysqli_query($conn->conectardb(),$queryINSERT);



 ?>


 
 
 
 
 
 
