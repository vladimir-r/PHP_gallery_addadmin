<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
	
	
	<div class="container" >
	<div class="row"> 
	<nav class="col-sm-12 col-md-12 col-lg-12">
	<?php 
	include_once('pages/menu.php');
	include_once('pages/functions.php');
	?>
	</nav>
	
	</div>
	
	<div class="row"> 
	<section class="col-sm-12 col-md-12 col-lg-12">
	<?php
	if(isset($_GET['page'])){
		$page=$_GET['page'];
		if($page==1){include_once('pages/home.php');}
		if($page==2){include_once('pages/upload.php');}
		if($page==3){include_once('pages/gallery.php');}
		if($page==4){include_once('pages/registration.php');}
		
		
	}
	
	
	?>
	
	
	</section>
	
	</div>
	
<div class="row">
<!-- 25% pages width element -->
<div class="col-sm-3 col-md-3 col-lg-3">
</div>
<!-- 50% pages width element -->
<div class="col-sm-6 col-md-6 col-lg-6">
</div>
<!-- 25% pages width element -->
<div class="col-sm-3 col-md-3 col-lg-3">
</div>
</div>
<div class="row">
<!-- 50% page’s width element -->
<div class="col-sm-6 col-md-6 col-lg-6">
</div>
<!-- 50% pages width element -->
<div class="col-sm-6 col-md-6 col-lg-6">
</div>
</div>
</div>

	
	<script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
	<!-- Latest compiled and minified JavaScript -->
<script src="//netdna.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
</body>
</html>