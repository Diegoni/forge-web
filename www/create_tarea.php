<?php 
	  include("configuracion_db.php");
	// $mysqli = new mysqli("localhost", "goviccl1_cgsbim", "Paralelepipedo1674", "goviccl1_fmbim");

    if (mysqli_connect_errno()) {
        printf("Fall贸 la conexi贸n failed: %s\n", $mysqli->connect_error);
        exit();
    }

  
  $id_usuario   = $_POST["id_usuario"];
  $nombre       = $_POST["nombre"];
  $descripcion  = $_POST["descripcion"];
  $especialidad = $_POST["especialidad"];
  $fecha        = $_POST["fecha"];

  $query = "INSERT INTO TAREAS (id_usuario, nombre, fecha,descripcion,especialidad,estado) 
            VALUES($id_usuario, '$nombre','$fecha','$descripcion','$especialidad',0)";
 //die($query);
  $mysqli->query($query);  
 
  header('Location: http://govic.cl/WEB_BIM/v2/tareas.php?response=ok');
 // header('Location: tareas.php?response=ok');         
?>