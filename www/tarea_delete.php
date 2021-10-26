<?php 
	
	 //$mysqli = new mysqli("localhost", "goviccl1_cgsbim", "Paralelepipedo1674", "goviccl1_fmbim");
include("configuracion_db.php");
    if (mysqli_connect_errno()) {
        printf("Fall贸 la conexi贸n failed: %s\n", $mysqli->connect_error);
        exit();
    }

  
  $id = $_GET["id"];
  $query = "DELETE FROM TAREAS WHERE id_tarea = $id";
  $mysqli->query($query);  
  
  header('Location: http://govic.cl/WEB_BIM/v2/tareas.php');   
//  header('Location: tareas.php?response=ok');       
?>