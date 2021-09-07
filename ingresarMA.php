<?php 
    include("conexionMA.php");
    $con=conectar();


    $sql="SELECT *  FROM matriculas";
    $query=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($query);



    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title> INGRESAR DATOS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous"> 
        
    </head>
    
<body style="background:#9EECE5;">
            <img src="logogrupo.PNG" width="100" height="100">
                <div class="container mt-5">
                    <div style="width: 50%; margin-left: 25%;background-color:#9EECE5; ">
                <h1 style= "font-family: candy randy"><font color="#000000"><b>Ingresar datos</h1>

<!-- <div class="col-md-5" style="align-content: right;">
 -->

 <form action="insertarMA.php" method="POST">

<label for="id_matri">ID MATRICULA</label>
<input type="text" class="form-control mb-3" name="id_matri">
                                    
<label for="id_est">ID ESTUDIANTE</label>
<input type="text" class="form-control mb-3" name="id_est"> 
   
<label for="id_ano_acad">ID AÑO ACADEMICO</label>
<select class="form-control mb-3" name="id_ano_acad">
<option value="">Seleccione una opcion</option>
<option value="1">2021</option>
<option value="2">2020</option>
  </select>

<label for="id_curso">ID CURSO</label>         
<select class="form-control mb-3" name="id_curso">
 <option value="">Selecciona una opcion</option>
<option value="1">1101</option>
<option value="2">1102</option>
<option value="3">1103</option>
<option value="4">1104</option>
          </select>

<label for="id_acud">ID ACUDIENTE</label>
<input type="text" class="form-control mb-3" name="id_acud">
                                    
                                  <b><input type="submit"style="background-color:#000000;font-family: arial ; border-color:#F5F5DC;" class="btn btn-danger" value=Ingresar></b>
                                </form>
                                <th><label for="busqueda"></label><br><a href="matriculas.php" class="btn btn-info">VOLVER</a></th>
                        </div>