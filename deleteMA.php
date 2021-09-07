<?php

include("conexionMA.php");
$con=conectar();

if(isset($_GET['id_matri'])) {
  $id_matri = $_GET['id_matri'];
  $query = "DELETE FROM matriculas WHERE id_matri='$id_matri'";
  $result = mysqli_query($con, $query);
  if(!$result) {
    die("Query Failed.");

  }
  header("Location: matriculas.php"); 
}

?>