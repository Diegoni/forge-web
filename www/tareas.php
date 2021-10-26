<?php 

//    $mysqli = new mysqli("localhost", "goviccl1_cgsbim", "Paralelepipedo1674", "goviccl1_fmbim");
include("configuracion_db.php");
    if (mysqli_connect_errno()) {
        printf("Fall贸 la conexi贸n failed: %s\n", $mysqli->connect_error);
        exit();
    }

    $filtro = $_GET["filtro"];
    $query = "";
    if($filtro == ""){
    	$query = "SELECT * FROM TAREAS ";
    }
    else{

        switch ($filtro) {
        	case 'arquitectura':
        		$query = "SELECT * FROM TAREAS WHERE especialidad LIKE 'arquitectura'  LIMIT 1";
        		break;
        	case 'ventilacion':
        		$query = "SELECT * FROM TAREAS WHERE especialidad LIKE 'ventilacion'  LIMIT 1";
        		break;
        	case 'sanitario':
        		$query = "SELECT * FROM TAREAS WHERE especialidad LIKE 'sanitario'  LIMIT 1";
        		break;
        	case 'alcantarillado':
        		$query = "SELECT * FROM TAREAS WHERE especialidad LIKE 'alcantarillado'  LIMIT 1";
        		break;
        	case 'electricidad':
        		$query = "SELECT * FROM TAREAS WHERE especialidad LIKE 'electricidad'  LIMIT 1";
        		break;
        	
        }
    	

    }


    $result = $mysqli->query($query);
    $row = $result->fetch_array(MYSQLI_ASSOC);
   

?>

<!DOCTYPE html>
<html lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="Description" content="Bootstrap Responsive Admin Web Dashboard HTML5 Template">
		<meta name="Author" content="Spruko Technologies Private Limited">
		<meta name="Keywords" content="admin,admin dashboard,admin dashboard template,admin panel template,admin template,admin theme,bootstrap 4 admin template,bootstrap 4 dashboard,bootstrap admin,bootstrap admin dashboard,bootstrap admin panel,bootstrap admin template,bootstrap admin theme,bootstrap dashboard,bootstrap form template,bootstrap panel,bootstrap ui kit,dashboard bootstrap 4,dashboard design,dashboard html,dashboard template,dashboard ui kit,envato templates,flat ui,html,html and css templates,html dashboard template,html5,jquery html,premium,premium quality,sidebar bootstrap 4,template admin bootstrap 4"/>

		<!-- Title -->
		<title> ARBIM FM </title>

		<!-- Favicon -->
		<link rel="icon" href="assets/img/brand/favicon.png" type="image/x-icon"/>

		<!-- Icons css -->
		<link href="assets/css/icons.css" rel="stylesheet">

		<!---Internal  Owl Carousel css-->
		<link href="assets/plugins/owl-carousel/owl.carousel.css" rel="stylesheet">

		<!---Internal  Darggable css-->
		<link href="assets/plugins/darggable/jquery-ui-darggable.css" rel="stylesheet">

		<!--  Right-sidemenu css -->
		<link href="assets/plugins/sidebar/sidebar.css" rel="stylesheet">

		<!-- P-scroll bar css-->
		<link href="assets/plugins/perfect-scrollbar/p-scrollbar.css" rel="stylesheet" />

		<!--  Left-Sidebar css -->
		<link rel="stylesheet" href="assets/css/closed-sidemenu.css">

		<!--- Style css --->
		<link href="assets/css/style.css" rel="stylesheet">

		<!--- Dark-mode css --->
		<link href="assets/css/style-dark.css" rel="stylesheet">

		<!---Skinmodes css-->
		<link href="assets/css/skin-modes.css" rel="stylesheet" />

		<!--- Animations css-->
		<link href="assets/css/animate.css" rel="stylesheet">

	</head>

	<body class="main-body app sidebar-mini">

		<!-- Loader -->
		<div id="global-loader">
			<img src="assets/img/loader.svg" class="loader-img" alt="Loader">
		</div>
		<!-- /Loader -->

		<!-- Page -->
		<div class="page">

			<!-- main-sidebar -->
			<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
				<aside class="app-sidebar sidebar-scroll">
				<div class="main-sidebar-header active">
					<a class="desktop-logo logo-light active" href="index.html"><img src="assets/img/brand/logo.png" class="main-logo" alt="logo"></a>
					<br>
					<a class="desktop-logo logo-dark active" href="index.html"><img src="assets/img/brand/logo.png" class="main-logo dark-theme" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-light active" href="index.html"><img src="assets/img/brand/logo.png" class="logo-icon" alt="logo"></a>
					<a class="logo-icon mobile-logo icon-dark active" href="index.html"><img src="assets/img/brand/logo.png" class="logo-icon dark-theme" alt="logo"></a>
					<p>
				</div>
				<div class="main-sidemenu">
					
					
                  <ul class="side-menu">
						<li class="side-item side-item-category">Menú Principal</li>
						
						<li class="slide">
							<a class="side-menu__item"  href="index.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Home ARBIM FM</span></a>
						</li>
						
						<li class="side-item side-item-category">Administración</li>
						
						<li class="slide">
							<a class="side-menu__item"  href="#">
								<svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/><path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/></svg><span class="side-menu__label">Visualizador</span>
							</a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="proyectos.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Proyectos</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="bim.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">BIM</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="bim.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Tareas</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="bim.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Roles</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="bim.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Calendario</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="bim.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M6.26 9L12 13.47 17.74 9 12 4.53z" opacity=".3"/><path d="M19.37 12.8l-7.38 5.74-7.37-5.73L3 14.07l9 7 9-7zM12 2L3 9l1.63 1.27L12 16l7.36-5.73L21 9l-9-7zm0 11.47L6.26 9 12 4.53 17.74 9 12 13.47z"/></svg><span class="side-menu__label">Estadísticas</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="bim.html"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/><path d="M10.9 19.91c.36.05.72.09 1.1.09 2.18 0 4.16-.88 5.61-2.3L14.89 13l-3.99 6.91zm-1.04-.21l2.71-4.7H4.59c.93 2.28 2.87 4.03 5.27 4.7zM8.54 12L5.7 7.09C4.64 8.45 4 10.15 4 12c0 .69.1 1.36.26 2h5.43l-1.15-2zm9.76 4.91C19.36 15.55 20 13.85 20 12c0-.69-.1-1.36-.26-2h-5.43l3.99 6.91zM13.73 9h5.68c-.93-2.28-2.88-4.04-5.28-4.7L11.42 9h2.31zm-3.46 0l2.83-4.92C12.74 4.03 12.37 4 12 4c-2.18 0-4.16.88-5.6 2.3L9.12 11l1.15-2z" opacity=".3"/><path d="M12 22c5.52 0 10-4.48 10-10 0-4.75-3.31-8.72-7.75-9.74l-.08-.04-.01.02C13.46 2.09 12.74 2 12 2 6.48 2 2 6.48 2 12s4.48 10 10 10zm0-2c-.38 0-.74-.04-1.1-.09L14.89 13l2.72 4.7C16.16 19.12 14.18 20 12 20zm8-8c0 1.85-.64 3.55-1.7 4.91l-4-6.91h5.43c.17.64.27 1.31.27 2zm-.59-3h-7.99l2.71-4.7c2.4.66 4.35 2.42 5.28 4.7zM12 4c.37 0 .74.03 1.1.08L10.27 9l-1.15 2L6.4 6.3C7.84 4.88 9.82 4 12 4zm-8 8c0-1.85.64-3.55 1.7-4.91L8.54 12l1.15 2H4.26C4.1 13.36 4 12.69 4 12zm6.27 3h2.3l-2.71 4.7c-2.4-.67-4.35-2.42-5.28-4.7h5.69z"/></svg><span class="side-menu__label">Mi Cuenta</span></a>
						</li>
						<li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5H5v14h14V5zM9 17H7v-7h2v7zm4 0h-2V7h2v10zm4 0h-2v-4h2v4z" opacity=".3"/><path d="M3 5v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2H5c-1.1 0-2 .9-2 2zm2 0h14v14H5V5zm2 5h2v7H7zm4-3h2v10h-2zm4 6h2v4h-2z"/></svg><span class="side-menu__label">Graficos/(Temporal)</span><i class="angle fe fe-chevron-down"></i></a>
							<ul class="slide-menu">
								<li><a class="slide-item" href="chart-morris.html">Morris Charts</a></li>
								<li><a class="slide-item" href="chart-flot.html">Flot Charts</a></li>
								<li><a class="slide-item" href="chart-chartjs.html">ChartJS</a></li>
								<li><a class="slide-item" href="chart-echart.html">Echart</a></li>
								<li><a class="slide-item" href="chart-sparkline.html">Sparkline</a></li>
								<li><a class="slide-item" href="chart-peity.html">Chart-peity</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</aside>
			<!-- main-sidebar -->

			<!-- main-content -->
			<div class="main-content app-content">

				<!-- main-header -->
							<!-- main-header -->
	<div class="main-header sticky side-header nav nav-item">
					<div class="container-fluid">
						<div class="main-header-left ">
							<div class="responsive-logo">
								<a href="index.html"><img src="assets/img/brand/logo.png" class="logo-1" alt="logo"></a>
								<a href="index.html"><img src="assets/img/brand/logo-white.png" class="dark-logo-1" alt="logo"></a>
								<a href="index.html"><img src="assets/img/brand/favicon.png" class="logo-2" alt="logo"></a>
								<a href="index.html"><img src="assets/img/brand/favicon.png" class="dark-logo-2" alt="logo"></a>
							</div>
							<div class="app-sidebar__toggle" data-toggle="sidebar">
								<a class="open-toggle" href="#"><i class="header-icon fe fe-align-left" ></i></a>
								<a class="close-toggle" href="#"><i class="header-icons fe fe-x"></i></a>
							</div>
						
						</div>
						<div class="main-header-right">
							
							<div class="nav nav-item  navbar-nav-right ml-auto">
								<div class="nav-link" id="bs-example-navbar-collapse-1">
									<form class="navbar-form" role="search">
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Search">
											<span class="input-group-btn">
												<button type="reset" class="btn btn-default">
													<i class="fas fa-times"></i>
												</button>
												<button type="submit" class="btn btn-default nav-link resp-btn">
													<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search"><circle cx="11" cy="11" r="8"></circle><line x1="21" y1="21" x2="16.65" y2="16.65"></line></svg>
												</button>
											</span>
										</div>
									</form>
								</div>
								
								<div class="dropdown nav-item main-header-notification">
									<a class="new nav-link" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg><span class=" pulse"></span></a>
									<div class="dropdown-menu">
										<div class="menu-header-content bg-primary text-left">
											<div class="d-flex">
												<h6 class="dropdown-title mb-1 tx-15 text-white font-weight-semibold">Notificiaciones</h6>
												
											</div>
											
										</div>
										<div class="main-notification-list Notification-scroll">
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-pink">
													<i class="la la-file-alt text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">Notificación</h5>
													<div class="notification-subtext">tiempo transcurrido</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3" href="#">
												<div class="notifyimg bg-purple">
												<i class="la la-file-alt text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">Notificación</h5>
													<div class="notification-subtext">tiempo transcurrido</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											<a class="d-flex p-3 border-bottom" href="#">
												<div class="notifyimg bg-success">
												<i class="la la-file-alt text-white"></i>
												</div>
												<div class="ml-3">
													<h5 class="notification-label mb-1">Notificación</h5>
													<div class="notification-subtext">tiempo transcurrido</div>
												</div>
												<div class="ml-auto" >
													<i class="las la-angle-right text-right text-muted"></i>
												</div>
											</a>
											
										</div>
										<div class="dropdown-footer">
											<a href="">Ver Todo</a>
										</div>
									</div>
								</div>
								<div class="nav-item full-screen fullscreen-button">
									<a class="new nav-link full-screen-link" href="#"><svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-maximize"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3"></path></svg></a>
								</div>
								<div class="dropdown main-profile-menu nav nav-item nav-link">
									<a class="profile-user d-flex" href="">
										<div class="avatar avatar-md bg-warning rounded-circle" >
															NU
												</div>
									</a>
									<div class="dropdown-menu">
										<div class="main-header-profile bg-primary p-3">
											<div class="d-flex wd-100p">
												<div class="avatar avatar-md bg-warning rounded-circle" >
															NU
												</div>
												<div class="ml-3 my-auto">
													<h6>Nombre Usuario</h6><span>Empresa</span>
												</div>
											</div>
										</div>
										
										<a class="dropdown-item" href="profile.html"><i class="bx bx-slider-alt"></i> Cuenta</a>
										<a class="dropdown-item" href="page-signin.html"><i class="bx bx-log-out"></i> Salir</a>
									</div>
								</div>
								<div class="dropdown main-header-message right-toggle">
									<a class="nav-link pr-0" data-toggle="sidebar-right" data-target=".sidebar-right">
										<svg xmlns="http://www.w3.org/2000/svg" class="header-icon-svgs" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- /main-header -->

				<!-- container -->
				<div class="container-fluid">

					<!-- breadcrumb -->
					<div class="breadcrumb-header justify-content-between">
						<div class="my-auto">
							<div class="d-flex"><h4 class="content-title mb-0 my-auto">Tareas</h4><span class="text-muted mt-1 tx-13 ml-2 mb-0"></span></div>
						</div>
						<div class="d-flex my-xl-auto right-content">
							
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-danger btn-primary">ELIMINADAS</button>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-primary">TERMINADAS</button>
							</div>
							<div class="mb-xl-0">
								<div class="btn-group dropdown">
									<button type="button" class="btn btn-primary">FILTROS</button>
									<button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="dropdownMenuDate" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<span class="sr-only"> Dropdown</span>
									</button>
									<div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuDate" data-x-placement="bottom-end">
										<a class="dropdown-item" href="#">Electricidad</a>
										<a class="dropdown-item" href="#">Arquitectura</a>
										<a class="dropdown-item" href="#">Sanitario</a>
										<a class="dropdown-item" href="#">Alcantarillado</a>
										<a class="dropdown-item" href="#">Ventialción</a>
									</div>
								</div>
							</div>
							<div class="pr-1 mb-xl-0">
								<button type="button" class="btn btn-warning  btn-primary" onclick="location.href='tarea_nueva.php'";>AGREGAR</button>
							</div>
						</div>
					</div>
					<!-- breadcrumb -->

					<!-- Row -->
					<div class="sortable">
						<div class="row row-sm">
							<div class="col-xl-12 col-sm-12 col-md-12  col-lg-12">
							
								

						             <?php 
                                       		 $result = $mysqli->query($query);
                                       		 $fila = "";
                                       		 while($row = $result->fetch_array(MYSQLI_ASSOC)){
                                       		 	
                                       		 	$file .= "<div class='card custom-card card-draggable'>";
                                       		 	$file .= "<div class='card-body'>";
                                       		 	$file .= "<p class='mg-b-0'><h3>".$row["nombre"]."</h3></p>";
                                       		 	$file .= "<div class='row row-xs wd-xl-80p'>";
                                       		 	$file .= "<div class='col-sm-3 col-md-3 mg-t-10 mg-md-t-0'><button  onclick='location.href=\"tarea_editar.php?id=".$row["id_tarea"]."\";' class='btn btn-success btn-block'>Ver</button>  </div> ";
                                       		 	$file .= "<div class='col-sm-3 col-md-3 mg-t-10 mg-md-t-0'><button  onclick='location.href=\"tarea_delete.php?id=".$row["id_tarea"]."\";' class='btn btn-danger btn-block'>Eliminar</button>  </div> ";
                                       		    $file .= "</div>";
                                       		 	$file .= "</div>";
                                       		 	$file .= "<div class='card-footer'>";
                                       		 	$file .= "Especialidad: ".$row["especialidad"]."<p>";
                                       		 	$file .= "".$row["descripcion"]."   /   "."  Fecha Vencimiento: ".$row["fecha"];
                                       		 	$file .= "</div>";
                                       		 	$file .= "</div>";


                                    
                                       		 }

                                       		 echo $file;
                                       ?>
						

								
							</div>
						
						</div>
					</div>
					<!-- /row -->
				</div>
				<!-- Container closed -->
			</div>
			<!-- main-content closed -->

			<!-- Sidebar-right-->


			<!-- Footer opened -->
			<div class="main-footer ht-40">
				<div class="container-fluid pd-t-0-f ht-100p">
					<span>Copyright © 2020 <a href="#">ARBIM FM</a></span>
				</div>
			</div>
			<!-- Footer closed -->

		</div>
		<!-- End Page -->

		<!-- JQuery min js -->
		<script src="assets/plugins/jquery/jquery.min.js"></script>

		<!--Internal  Datepicker js -->
		<script src="assets/plugins/jquery-ui/ui/widgets/datepicker.js"></script>

		<!-- Bootstrap Bundle js -->
		<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

		<!-- Ionicons js -->
		<script src="assets/plugins/ionicons/ionicons.js"></script>

		<!-- Moment js -->
		<script src="assets/plugins/moment/moment.js"></script>

		<!-- Internal Select2 js-->
		<script src="assets/plugins/select2/js/select2.min.js"></script>

		<!-- P-scroll js -->
		<script src="assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="assets/plugins/perfect-scrollbar/p-scroll.js"></script>

		<!-- eva-icons js -->
		<script src="assets/js/eva-icons.min.js"></script>

		<!-- Rating js-->
		<script src="assets/plugins/rating/jquery.rating-stars.js"></script>
		<script src="assets/plugins/rating/jquery.barrating.js"></script>

		<!-- Sidebar js -->
		<script src="assets/plugins/side-menu/sidemenu.js"></script>

		<!-- Right-sidebar js -->
		<script src="assets/plugins/sidebar/sidebar.js"></script>
		<script src="assets/plugins/sidebar/sidebar-custom.js"></script>

		<!--- Internal Darggable js-->
		<script src="assets/plugins/darggable/jquery-ui-darggable.min.js"></script>
		<script src="assets/plugins/darggable/darggable.js"></script>

		<!-- Sticky js -->
		<script src="assets/js/sticky.js"></script>

		<!-- custom js -->
		<script src="assets/js/custom.js"></script>

	</body>
</html>