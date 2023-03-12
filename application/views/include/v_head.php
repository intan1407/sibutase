<?php
    $controller = $this->router->fetch_class();
    $method = $this->router->fetch_method();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Administrator | <?php echo ucfirst($controller)?></title>
	<!-- Tell the browser to be responsive to screen width -->
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url().'assets/images/7.JPG'?>">
	<!-- Bootstrap 3.3.6 -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/bootstrap/css/bootstrap.min.css'?>">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/font-awesome/css/font-awesome.min.css'?>">
	<link rel="stylesheet" href="https://adminlte.io/themes/AdminLTE/bower_components/Ionicons/css/ionicons.min.css">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/plugins/datatables/dataTables.bootstrap.css'?>">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/AdminLTE.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/tooltips.css'?>">
	<!-- AdminLTE Skins. Choose a skin from the css/skins folder instead of downloading all of them to reduce the load. -->
	<link rel="stylesheet" href="<?php echo base_url().'assets/dist/css/skins/_all-skins.min.css'?>">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/plugins/toast/jquery.toast.min.css'?>"/>
	<!-- Select2 -->
	<link rel="stylesheet" type="text/css"  href="<?php echo base_url().'assets/plugins/select2/select2.css'?>">
	<style>
		#preloader {
			position: fixed;
			z-index: 99999999999;
			top: 0;
			left: 0;
			overflow: visible;
			width: 100%;
			height: 100%;
			background: #fff url("<?php echo base_url();?>assets/images/hourglass.svg") no-repeat center center;
			background-color: #ffffff8f;
		}
		body{
			/*background-color: #222d32 !important; */
		}
		.select2{
			width: 100% !important;
		}

		
		/* The Modal (background) */
		#myModalImage{
		  display: none; /* Hidden by default */
		  position: fixed; /* Stay in place */
		  padding-top: 100px; /* Location of the box */
		  left: 0;
		  top: 0;
		  width: 100%; /* Full width */
		  height: 100%; /* Full height */
		  overflow: auto; /* Enable scroll if needed */
		  background-color: rgb(0,0,0); /* Fallback color */
		  background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
		}

		/* Modal Content (image) */
		#myModalImage .modal-content {
		  margin: auto;
		  display: block;
		  max-width: 700px;
		  border-radius: 20px;
		}

		/* Add Animation */
		#myModalImage .modal-content, #caption {  
		  -webkit-animation-name: zoom;
		  -webkit-animation-duration: 0.6s;
		  animation-name: zoom;
		  animation-duration: 0.6s;
		}

		@-webkit-keyframes zoom {
		  from {-webkit-transform:scale(0)} 
		  to {-webkit-transform:scale(1)}
		}

		@keyframes zoom {
		  from {transform:scale(0)} 
		  to {transform:scale(1)}
		}

		/* The Close Button */
		#myModalImage .close {
		  position: absolute;
		  top: 50px;
		  right: 40px;
		  color: #f1f1f1;
		  font-size: 40px;
		  font-weight: bold;
		  transition: 0.3s;
		  opacity: 100;
		}

		#myModalImage .close:hover,
		#myModalImage .close:focus {
		  color: #bbb;
		  text-decoration: none;
		  cursor: pointer;
		}

		/* 100% Image Width on Smaller Screens */
		@media only screen and (max-width: 700px){
		  #myModalImage .modal-content {
		    width: 100%;
		  }
		}
	</style>
</head>
<body class="hold-transition skin-purple sidebar-mini">
	<div id="preloader"></div>
	<div class="wrapper">
