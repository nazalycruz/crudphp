<?php
    include('conexion.php');
    $con = conectar();

    //obtenemos el valor del id del estudiante a eliminar para ello utilizamos el $_GET
    $cod_estudiante = $_GET['id'];


    $sql = "DELETE FROM alumno WHERE cod_estudiante = '$cod_estudiante'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: alumno.php");
    }
?>

