<?php 
    include("conexionMA.php");
    $con=conectar();

$id_matri=$_GET['id_matri'];

$sql="SELECT * FROM matriculas WHERE id_matri='$id_matri'";
$query=mysqli_query($con,$sql);

$row=mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <title>ACTUALIZAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Actualizar_Docente</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

     </head>
    <body>
        <body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100" border-radius="20px">

                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Actualizar</h1>
                <form action="updateMA.php" method="POST">

        <input type="hidden" name="id_matri" value="<?php echo $row['id_matri']  ?>">

<label for="id_est">NOMBRE</label>
    <input type="text" class="form-control mb-3" name="id_est" id="id_est"  value="<?php echo $row['id_est']  ?>">

<label for="id_ano_acad">AÑO ACADEMICO</label>
    <select  type="text" class="form-control mb-3" id="id_ano_acad" name="id_ano_acad" value="<?php  echo $row['id_ano_acad']  ?>">
        <option value="<?php echo $row['id_ano_acad'] ?>"> Selecione un opción  </option>
        <option value="1">2021</option>
        <option value="2">2022</option>
        <option value="3">2023</option>
    </select>

    <label for="id_curso">CURSO</label>    
    <select type="text" class="form-control mb-3" name="id_curso" id="id_curso" value="<?php echo $row['id_curso']  ?>">
        <option value="<?php echo $row['id_curso']  ?>">Seleccione una opción</option>
        <option value="1">1101</option>
        <option value="2">1102</option>
        <option value="3">1103</option>
        <option value="4">1104</option>
    </select>

<label for="id_acud">ID DEL ACUDIENTE</label>
    <input type="text" class="form-control mb-3" name="id_acud" id="id_acud" value="<?php echo $row['id_acud']  ?>">


                            <input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Actualizar>
                    </form>
                    <th><label for="busqueda"></label><br><a href="matriculas.php" class="btn btn-info">VOLVER</a></th>
                    
                </div>
                    </div>
    </body>
</html>
                    
                        
</html>