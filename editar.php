<?php
    include ("conexion.php");
    $con = conectar();

    $cod_estudiante = $_POST['cod_estudiante'];
    $dni = $_POST['dni'];
    $nombre = $_POST['nombres'];
    $apellido = $_POST['apellidos'];


    $sql ="UPDATE alumno SET cod_estudiante = '$cod_estudiante', dni='$dni', nombres='$nombre', apellidoS='$apellido' WHERE cod_estudiante = '$cod_estudiante'";
    $query = mysqli_query($con, $sql);

    if($query){
        Header("Location: alumno.php");
    }
?>