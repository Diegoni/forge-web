<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Stack admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities.">
    <meta name="keywords" content="admin template, stack admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="PIXINVENT">
     <title>AR FM BIM</title>
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i%7COpen+Sans:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/vendors/css/vendors.min.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/menu/menu-types/vertical-menu-modern.css">
    <link rel="stylesheet" type="text/css" href="app-assets/css/core/colors/palette-gradient.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="vertical-layout vertical-menu-modern 2-columns   fixed-navbar" data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">

    <!-- BEGIN: Header-->
   <?php include("nav.php");?>
    <!-- END: Header-->


    <!-- BEGIN: Main Menu-->
     <?php include("menu.php");?>
    <!-- END: Main Menu-->

    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title mb-0">Nueva Tarea</h3>
                    <div class="row breadcrumbs-top">
                       
                    </div>
                </div>
               
            </div>
            <div class="content-body">
                <!-- Form actions layout section start -->
                <section id="form-action-layouts">
            


                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                 
                                   
                                    <div class="heading-elements">
                                     
                                    </div>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">

                                        <div class="card-text">
                                       
<?php 

    $mysqli = new mysqli("localhost", "goviccl1_cgsbim", "Paralelepipedo1674", "goviccl1_fmbim");

    if (mysqli_connect_errno()) {
        printf("Fall贸 la conexi贸n failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $id_tarea = $_GET["id"];
    $query = "SELECT * FROM TAREAS WHERE id_tarea = $id_tarea ";

    $result = $mysqli->query($query);
   $row = $result->fetch_array(MYSQLI_ASSOC);
    $id_usuario  = $row["id_usuario"];
    $nombre      = $row["nombre"];
    $fecha       = $row["fecha"];
    $descripcion = $row["descripcion"];
    $especialidad= $row["especialidad"];
    $id_tarea    = $row["id_tarea"];
   
?>
                                            
                                        </div>

                                        <form class="form" action="tarea_actualizar.php" method="post">
                                            <div class="form-body">
                                                 <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <h4></h4>        
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput1">Nombre de Tarea</label>
                                                        <input type="text" id="complaintinput1" class="form-control round" placeholder="Nombre de Tarea" name="nombre" value=<?php echo "'".$nombre."'"; ?>>
                                                        <input type="hidden" name="id_tarea" value=<?php echo "'".$id_tarea."'"; ?>>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput2">Asignar Usuario</label>
                                                        <select id="projectinput6" name="id_usuario" class="form-control">

                                                  <?php 
    
                                                       $mysqli = new mysqli("localhost", "goviccl1_cgsbim", "Paralelepipedo1674", "goviccl1_fmbim");

                                                       if (mysqli_connect_errno()) {
                                                           printf("Fall贸 la conexi贸n failed: %s\n", $mysqli->connect_error);
                                                            exit();
                                                       }

                                                             


                                                       $query = "SELECT * FROM USUARIOS ";
                                                       $result = $mysqli->query($query);  
                                                      
                                                       while($row = $result->fetch_array(MYSQLI_ASSOC)){

                                                        if($id_usuario == $row["id_usuario"]){
                                                            $fila .= "<option value='".$row["id_usuario"]."' selected>".$row["nombre"]."</option>";
                                                        }
                                                        else{
                                                            $fila .= "<option value='".$row["id_usuario"]."' >".$row["nombre"]."</option>";   
                                                        }

                                                       }       
                                                           echo $fila;            
                                                            ?>
                                                            
                                                            
                                                           
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput3">Fecha de Caducidad  : <?php echo "&nbsp;&nbsp;<b>'".$fecha."'"; ?></label>
                                                        <input type="date" id="complaintinput3" class="form-control round" name="fecha" value=<?php echo "'".$fecha."'"; ?>>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput4">Especialidad</label>
                                                       <select id="projectinput6" name="especialidad" class="form-control">
                                                            <option value="none" selected="" disabled="">Seleccione Especialidad</option>
                                                            <option value="arquitectura" <?php if($especialidad == "arquitectura"){ echo "selected";} ?> >Arquitectura</option>
                                                            <option value="electricidad" <?php if($especialidad == "electricidad"){ echo "selected";} ?>>Electricidad</option>
                                                            <option value="ventilacion" <?php if($especialidad == "ventilacion"){ echo "selected";} ?>>Ventilación</option>
                                                            <option value="sanitario" <?php if($especialidad == "sanitario"){ echo "selected";} ?>>Sanitario</option>
                                                            <option value="alcantarillado" <?php if($especialidad == "alcantarillado"){ echo "selected";} ?>>Alcantarillado</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="form-group col-12 mb-2">
                                                        <label for="complaintinput5">Descripción</label>
                                                        <textarea id="complaintinput5" rows="5" class="form-control round" name="descripcion" placeholder="Descripcion"><?php  echo $descripcion ?></textarea>
                                                    </div>
                                                </div>

                                              
                                            </div>

                                            <div class="">
                                                
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="fa fa-check-square-o"></i> Guardar
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                       
                    </div>


               


                 
                </section>
                <!-- // Form actions layout section end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

    <!-- BEGIN: Footer-->
   <?php include("footer.php") ?>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

</body>
<!-- END: Body-->

</html>