<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
     <ul class="navbar-nav ml-auto " >

		<!-- Nav Item - Search Dropdown (Visible Only XS) -->
		<!-- <li class="nav-item dropdown no-arrow d-sm-none">
			<a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-search fa-fw"></i>
			</a> -->
			<!-- Dropdown - Messages -->
			<!-- <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
				aria-labelledby="searchDropdown">
				<form class="form-inline mr-auto w-100 navbar-search">
					<div class="input-group">
						<input type="text" class="form-control bg-light border-0 small"
							
			</div>
		</li> -->

		<!-- Nav Item - Alerts -->
		<!-- <li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-bell fa-fw"></i>-->
				<!-- <span class="badge badge-danger badge-counter">3+</span>
			</a> -->
			<!-- Dropdown - Alerts -->
			<!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="alertsDropdown">
				<h6 class="dropdown-header">
					Alerts Center
				</h6>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="mr-3">
						<div class="icon-circle bg-primary">
							<i class="fas fa-file-alt text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 12, 2019</div>
						<span class="font-weight-bold">A new monthly report is ready to download!</span>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="mr-3">
						<div class="icon-circle bg-success">
							<i class="fas fa-donate text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 7, 2019</div>
						$290.29 has been deposited into your account!
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="mr-3">
						<div class="icon-circle bg-warning">
							<i class="fas fa-exclamation-triangle text-white"></i>
						</div>
					</div>
					<div>
						<div class="small text-gray-500">December 2, 2019</div>
						Spending Alert: We've noticed unusually high spending for your account.
					</div>
				</a>
				<a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
			</div>
		</li> -->

		<!-- Nav Item - Messages -->
		<!-- <li class="nav-item dropdown no-arrow mx-1">
			<a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
				data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
				<i class="fas fa-envelope fa-fw"></i> -->
				<!-- Counter - Messages -->
				<!-- <span class="badge badge-danger badge-counter">7</span>
			</a> -->
			<!-- Dropdown - Messages -->
			<!-- <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
				aria-labelledby="messagesDropdown">
				<h6 class="dropdown-header">
					Message Center
				</h6>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="<?php echo $url_site; ?>img/undraw_profile_1.svg"
							alt="">
						<div class="status-indicator bg-success"></div>
					</div>
					<div class="font-weight-bold">
						<div class="text-truncate">Hi there! I am wondering if you can help me with a
							problem I've been having.</div>
						<div class="small text-gray-500">Emily Fowler · 58m</div>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="<?php echo $url_site; ?>img/undraw_profile_2.svg"
							alt="">
						<div class="status-indicator"></div>
					</div>
					<div>
						<div class="text-truncate">I have the photos that you ordered last month, how
							would you like them sent to you?</div>
						<div class="small text-gray-500">Jae Chun · 1d</div>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="<?php echo $url_site; ?>img/undraw_profile_3.svg"
							alt="">
						<div class="status-indicator bg-warning"></div>
					</div>
					<div>
						<div class="text-truncate">Last month's report looks great, I am very happy with
							the progress so far, keep up the good work!</div>
						<div class="small text-gray-500">Morgan Alvarez · 2d</div>
					</div>
				</a>
				<a class="dropdown-item d-flex align-items-center" href="#">
					<div class="dropdown-list-image mr-3">
						<img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
							alt="">
						<div class="status-indicator bg-success"></div>
					</div>
					<div>
						<div class="text-truncate">Am I a good boy? The reason I ask is because someone
							told me that people say this to all dogs, even if they aren't good...</div>
						<div class="small text-gray-500">Chicken the Dog · 2w</div>
					</div>
				</a>
				<a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
			</div>
		</li>

		<div class="topbar-divider d-none d-sm-block"></div> -->

		<!-- Nav Item - User Information -->
		<li class="nav-item dropdown no-arrow">
			
				<div>
				<h4 class="mb-1"><?php echo $usuario->nombres; ?></h4>
				<h6 class="text-muted"><?php echo $usuario->descripcion; ?></h6></span>
				</div>
                    
				<img aling="justify"src="<?php echo $url_site; ?>images/profile.jpg" alt="profile photo" class="circle float-left profile-photo text-center" width="50" height="auto">
			
			<!-- Dropdown - User Information -->
			
		</li>

	</ul>
				<h1 class="site-title"><a href="<?php echo $url_site; ?>index.php"><em class="fa fa-user-circle"></em> ADMIN</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-tachometer"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
                    <?php
                    if($usuario->id_tipo_usuario == '1'){
                        echo '<li class="nav-item"><a class="nav-link active" href="'.$url_site.'index.php"><em class="fa fa-address-book"></em> Consulta</a></li>
					 <li class="nav-item"><a class="nav-link" href="'.$url_site.'registrovehicular/"><em class="fa fa-database"></em> Vehículos registrados</a></li>
                    <li class="nav-item"><a class="nav-link" href="'. $url_site.'registroingresos/"><em class="fa fa-database"></em> Historial de ingreso</a></li>';
                    }
					if($usuario->id_tipo_usuario == '2'){
                        echo '<li class="nav-item"><a class="nav-link active" href="'.$url_site.'index.php"><em class="fa fa-address-book"></em> Consulta</a></li>
					 <li class="nav-item"><a class="nav-link" href="'.$url_site.'registrovehicular/"><em class="fa fa-database"></em> Vehículos registrados</a></li>
                    <li class="nav-item"><a class="nav-link" href="'. $url_site.'registroingresos/"><em class="fa fa-database"></em> Historial de ingreso</a></li>
					<li class="nav-item"><a class="nav-link" href="'. $url_site.'vehiculo/"><em class="fa fa-database"></em> Gestor de usuarios</a></li>';
				}
					if($usuario->id_tipo_usuario == '3'){
                        echo '<li class="nav-item"><a class="nav-link active" href="'.$url_site.'index.php"><em class="fa fa-address-book"></em> Consulta</a></li>';
                    }
                    ?>

                     <?php
                    //     if($usuario->id_tipo_usuario == '1' OR $usuario->id_tipo_usuario == '2'){
                    //         echo '<li class="nav-item"><a class="nav-link" href="'. $url_site.'vehiculo/"><em class="fa fa-database"></em> Provedores</a></li>
                    //         <li class="nav-item"><a class="nav-link" href="'. $url_site.'vehiculo/"><em class="fa fa-bar-chart"></em> Gráficos</a></li>';
                    //    }

                    ?> 



				</ul>
				<a href="<?php echo $url_site; ?>login.php" class="logout-button"><em class="fa fa-power-off"></em> Cerrar Sesión</a>
</nav>