<nav class="sidebar col-xs-12 col-sm-4 col-lg-3 col-xl-2">
				<h1 class="site-title"><a href="http://Adminapp.me/index.php"><em class="fa fa-user-circle"></em> ADMIN</a></h1>
													
				<a href="#menu-toggle" class="btn btn-default" id="menu-toggle"><em class="fa fa-tachometer"></em></a>
				<ul class="nav nav-pills flex-column sidebar-nav">
                    <?php
                    if($usuario->id_tipo_usuario == '1'){
                        echo '<li class="nav-item"><a class="nav-link active" href="http://Adminapp.me/index.php"><em class="fa fa-address-book"></em> Consulta</a></li>
					 <li class="nav-item"><a class="nav-link" href="'.$url_site.'registrovehicular/"><em class="fa fa-database"></em> Vehículos registrados</a></li>
                    <li class="nav-item"><a class="nav-link" href="'. $url_site.'registroingresos/"><em class="fa fa-database"></em> REGISTRO DE VEHÍCULOS</a></li>';
                    }
                    ?>

                     <?php
                    //     if($usuario->id_tipo_usuario == '1' OR $usuario->id_tipo_usuario == '2'){
                    //         echo '<li class="nav-item"><a class="nav-link" href="'. $url_site.'vehiculo/"><em class="fa fa-database"></em> Provedores</a></li>
                    //         <li class="nav-item"><a class="nav-link" href="'. $url_site.'vehiculo/"><em class="fa fa-bar-chart"></em> Gráficos</a></li>';
                    //    }

                    ?> 



				</ul>
				<a href="http://Adminapp.me/login.php" class="logout-button"><em class="fa fa-power-off"></em> Cerrar Sesión</a>
</nav>