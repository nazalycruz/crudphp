<?php 
include("conexion.php");
$con = conectar();

//declarando variables $POST ya que se insertara seguido el nombre tal cual de la columna donde se insertara el valor
$cod_estudiante = $_POST['cod_estudiante'];
$dni = $_POST['dni'];
$nombre = $_POST['nombres'];
$apellido = $_POST['apellidos'];

$sql = "INSERT INTO alumno VALUES ('$cod_estudiante','$dni','$nombre','$apellido')";
$query = mysqli_query($con, $sql);

if($query){
    Header("Location: alumno.php");
}