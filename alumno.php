<?php
    //se esta incluyendo la conexion establecida en conexion.php
    include("conexion.php");
    //$con es lo que retorna de conexion.php para establecer una conexion
    $con=conectar();

    //consulta para traer a todos los alumnos
    $sql = "SELECT * FROM alumno";
    //regresa consulta 
    $query = mysqli_query($con, $sql);
    //retorna una lista de alumnos
    //$row = mysqli_fetch_array($query);--> TOMAMOS EL PRIMER VALOR PERO NUNCA SE UTILIZA NI MUESTRA
?>
<!DOCTYPE >
<html lang="en">
    <head>
    <title></title>
    <title> PAGINA ALUMNO</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        
    </head>
    <body>
    <div class="container mt-5">
            <div class = "row">
                <div class="col-md-3">
                    <h5>Ingresar datos</h5>
                    <form action="insertar.php" method="POST">
                        <input type="text" class="form-control mb-3" name="cod_estudiante" placeholder="Cod estudiante">
                        <input type="text" class="form-control mb-3" name="dni" placeholder="Dni">
                        <input type="text" class="form-control mb-3" name="nombres" placeholder="Nombre">
                        <input type="text" class="form-control mb-3" name="apellidos" placeholder="Apellido">

                        <input type="submit" class="btn btn-primary">                        

                    </form>

                </div>
                <div class = "col-md-8">
                    <table class="table">
                        <thead class="table-success table-striped">
                            <tr>
                                <th>codigo</th>
                                <th>Dni</th>
                                <th>Nombre</th>
                                <th>Apellido</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                while($row=mysqli_fetch_array($query)){
                            ?>
                                <tr>
                                    <th><?php echo $row['cod_estudiante']?></th>
                                    <th><?php echo $row['dni']?></th>
                                    <th><?php echo $row['nombres']?></th>
                                    <th><?php echo $row['apellidos']?></th>
                                    <th><a href="actualizar.php?id=<?php echo $row['cod_estudiante']?>" class="btn btn-info">Editar</a></th>
                                    <th><a href="delete.php?id=<?php echo $row['cod_estudiante']?>" class="btn btn-danger">Eliminar</a></th>
                                </tr>

                            <?php
                                }
                            ?>   
                        </tbody>

                    </table>
                </div>
            </div>
        </div>
    </body>
</html>
