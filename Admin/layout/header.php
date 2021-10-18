<?php 
	include('includes/cargar-clases.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content=""> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" href="images/favicon.ico">
	<title>Panel Administrativo</title>
   <link href="<?php echo $url_site; ?>dist/css/bootstrap.min.css" rel="stylesheet">
   <link href="<?php echo $url_site; ?>css/font-awesome.css" rel="stylesheet">
   <link href="<?php echo $url_site; ?>css/sb-admin-2.mins.css" rel="stylesheet">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link href="<?php echo $url_site; ?>css/styles.css" rel="stylesheet">
	
	<link href="<?php echo $url_site; ?>css/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo $url_site; ?>css/sb-admin-2.mins.css" rel="stylesheet">
	<!-- <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="<?php echo $url_site; ?>dist/js/bootstrap.min.js"></script>
	<!-- <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script> -->
	<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.1/js/dataTables.buttons.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
	<script src="https://cdn.datatables.net/buttons/2.0.1/js/buttons.html5.min.js"></script>
	<script src="https://codepen.io/coderalexis/pen/gKqLEK"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
	
</head>
<body >
<div class="container-flex-owcs black" style="box-shadow: 0px 3px 6px #00000029; position:absolute; height:2.5rem">  </div>
	<div class="container-fluid" id="wrapper" >
		<div class="row">
            <?php include('layout/sidebar.php'); ?>
			
            <main class="col-xs-12 col-sm-8 col-lg-9 col-xl-10 pt-3 pl-4 ml-auto">
			<?php include('layout/main-header.php'); ?>
			<section class="row">


<script type="text/javascript">
$("#menu-toggle").click(function(e){
    e.preventDefault();$("#wrapper").toggleClass("toggled");
});
</script>