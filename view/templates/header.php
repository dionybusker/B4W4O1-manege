<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Studenten app</title>	
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.0/css/all.css" integrity="sha384-Mmxa0mLqhmOeaE8vgOSbKacftZcsNYDjQzuCOm6D02luYSzBG8vpaOykv9lFQ51Y" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 	
		<link rel="stylesheet" href="<?= URL ?>/css/style.css">
	</head>
	<body>
		<div class="row col-6 mx-auto">
			<nav class="col-12 navbar navbar-expand m-0 p-0 bg-info">
				<ul class="col-12 navbar-nav m-0 p-0">
					<li class="col-3 nav-item m-0 p-0 btn btn-warning rounded-0"><a class="nav-link" href="<?php echo URL ?>home/index">Home</a></li>
					<li class="col-3 nav-item m-0 p-0 btn btn-warning rounded-0"><a class="nav-link" href="<?php echo URL ?>users/index">Bezoekers</a></li>
					<li class="col-3 nav-item m-0 p-0 btn btn-warning rounded-0"><a class="nav-link" href="<?php echo URL ?>horses/index">Paarden</a></li>
					<li class="col-3 nav-item m-0 p-0 btn btn-warning rounded-0"><a class="nav-link" href="<?php echo URL ?>bookings/index">Reserveringen</a></li>					
				</ul>
			</nav>

