<?php 
	
	// $mysqli = new mysqli("localhost", "goviccl1_cgsbim", "Paralelepipedo1674", "goviccl1_fmbim");
 include("configuracion_db.php");
    if (mysqli_connect_errno()) {
        printf("Fall贸 la conexi贸n failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $id_usuario  = $_POST["id_usuario"];
    $nombre      = $_POST["nombre"];
    $fecha       = $_POST["fecha"];

    $descripcion = $_POST["descripcion"];
    $especialidad= $_POST["especialidad"];
    $id_tarea    = $_POST["id_tarea"];

if($fecha == ""){
$query   = "UPDATE  TAREAS 
                SET nombre       ='$nombre',
                    id_usuario   = $id_usuario,
                    descripcion  = '$descripcion',
                    especialidad = '$especialidad'
                WHERE
                     id_tarea = $id_tarea";

}
else{
    $query   = "UPDATE  TAREAS 
                SET nombre       ='$nombre',
                    id_usuario   = $id_usuario,
                    fecha        ='$fecha',
                    descripcion  = '$descripcion',
                    especialidad = '$especialidad'
                WHERE
                     id_tarea = $id_tarea";

}
  
    // die($query);
  $mysqli->query($query);  
  //  header('Location: tareas.php');
  header('Location: http://govic.cl/WEB_BIM/v2/tareas.php');         
?>