<style>
	.sidebar.col-md-12{
		background-image:linear-gradient(
    rgba(241, 255, 255, 0.8),
    rgba(241, 255, 255, 0.7)
   ),url("");
   width: 1200px;
   height: 750px;
	}
	</style>
<div id="wrapper"> 
	<div id="sidebar-wrapper">
		
<nav class="sidebar col-md-12">
	<img >
     <ul class="navbar-nav ml-auto " >
		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			
				<div>
				<h3 class="mb-1 text-center"><?php echo $usuario->nombres; ?></h3>
				<h5 class="text-muted text-center"><?php echo $usuario->descripcion; ?></h5>
				<div class="text-center"><img src="<?php echo $url_site; ?>images/profile.jpg" class="circle " width="100" height="auto"></div>
</span>
				</div>
                    
				<!-- <img aling="justify"src="<?php echo $url_site; ?>images/profile.jpg" alt="profile photo" class="circle float-left profile-photo text-center" width="100" height="auto"> -->
			
			<!-- Dropdown - User Information -->
			
		</li>
		</ul>
		<ul class="navbar-nav ml-auto " >
                    <?php
                    if($usuario->id_tipo_usuario == '1'){//OPERADOR
                        echo '<li class="nav-item"><a class="nav-link " style="border-radius: 5px;" href="'.$url_site.'index.php"><em class="fa fa-address-book"></em> Consulta</a></li>
                    <li class="nav-item"><a class="nav-link" style="border-radius: 5px;" href="'. $url_site.'registroingresos/"><em class="fa fa-database"></em> Historial de ingreso</a></li>';
                    }
					if($usuario->id_tipo_usuario == '2'){//SUPERVISOR
                        echo '<li class="nav-item"><a class="nav-link " style="border-radius: 5px;" href="'.$url_site.'index.php"><em class="fa fa-address-book"></em> Consulta</a></li>
					 <li class="nav-item"><a class="nav-link" style="border-radius: 5px;" href="'.$url_site.'registrovehicular/"><em class="fa fa-database"></em> Vehículos registrados</a></li>
                    <li class="nav-item"><a class="nav-link" style="border-radius: 5px;" href="'. $url_site.'registroingresos/"><em class="fa fa-database"></em> Historial de ingreso</a></li>';
				}
					if($usuario->id_tipo_usuario == '3'){ //ADMINISTRADOR
						 echo '<li class="nav-item"><a class="nav-link " style="border-radius: 5px;" href="'.$url_site.'index.php"><em class="fa fa-address-book"></em> Consulta</a></li>
						<li class="nav-item"><a class="nav-link" style="border-radius: 5px;" href="'.$url_site.'registrovehicular/"><em class="fa fa-database"></em> Vehículos registrados</a></li>
					   <li class="nav-item"><a class="nav-link" style="border-radius: 5px;" href="'. $url_site.'registroingresos/"><em class="fa fa-database"></em> Historial de ingreso</a></li>
					   <li class="nav-item"><a class="nav-link" style="border-radius: 5px;" href="'. $url_site.'vehiculo/"><em class="fa fa-database"></em> Gestor de usuarios</a></li>';  
                    }
                    ?>
				</ul>
				<a href="<?php echo $url_site; ?>login.php" class="logout-button"><em class="fa fa-power-off"></em> Cerrar Sesión</a>
</nav>
</div>
</div>

<div id="page-content-wrapper">

	<div class="container-fluid">
