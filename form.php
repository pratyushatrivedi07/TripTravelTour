<?php require_once 'connect.php'; require_once 'functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<style type="text/css">
		body{
      	background-image: url("back.jpeg");
      	background-repeat: no-repeat;
        background-repeat: no-repeat;
     	background-attachment: fixed;
      	background-size: cover;
      }
  </style>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="style.css">
	<title>TripTravelTour Guide</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
   <link rel="stylesheet" href="form.css" >
        <script src="global.js"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
<div class="container-fluid">
	<a class="navbar-brand" href="#"><img src="logo.png"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toggler-icon"></span>	
	</button>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item active">
				<a class="nav-link" href="index.html">Home</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#about">About</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="#team">Team</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="http://localhost/form.php">Feedback</a>
			</li>
		</ul>
</div>
</nav>

<!-- Form -->

<div class="container">
  <div class="row welcome text-center">
  <div class="container">
  <span>
  <h2>Where would you like to go?</h2>

  <a class="btn btn-success btn-md" href="delhi.html" role="button">Delhi</a>
  <a class="btn btn-success btn-md" href="mumbai.html" role="button">Mumbai</a>
  <a class="btn btn-success btn-md" href="kolkata.html" role="button">Calcutta</a>
  <a class="btn btn-success btn-md" href="chennai.html" role="button">Chennai</a>
  </span>
  </div>
</div>
</div>

<hr>

<div class="page-container">
  <div class="jumbotron">
      <?php 
        get_total();
        require_once 'check_com.php';
      ?>
      <form action="" method="post" class="main">
        <label>enter a brief comment</label>
        <textarea class="form-text" name="comment" id="comment"></textarea>
        <br />
        <input type="submit" class="form-submit" name="new_comment" value="Post">
      </form>
      <?php get_comments(); ?>
    </div>

