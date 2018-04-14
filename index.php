<?php

//To Handle Session Variables on This Page
session_start();



require_once("db.php");
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> Job-Portal</title>
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	
	<link rel="stylesheet" href="assets/css/demo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="back_style.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="navbar.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="flex-box-landing-page.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="emp-job.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="candidate-login.css" />
    <script src="main.js"></script>
</head>

<body>

<link href='https://fonts.googleapis.com/css?family=Lobster' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Lato:400,700,900' rel='stylesheet' type='text/css'>

<div class="overlay">
  <div id="navbar">
   
      <a href="#news">Jobs</a>
     
      <a href="#about">About Us</a>
     
      <?php if(empty($_SESSION['id_user']) && empty($_SESSION['id_company'])) { ?>
          
            <a href="page-login.php">Candidate</a>
            <a href="page-login-company.php">Company</a>
               
            <a href="register-company.php">Sign Up</a>
            
          <?php } else { 

            if(isset($_SESSION['id_user'])) { 
          ?>        
          
            <a href="dashboard_candidate.php">Dashboard</a>
         
          <?php
          } else if(isset($_SESSION['id_company'])) { 
          ?>        
      
            <a href="dashboard_company.php">Dashboard</a>
        
          <?php } ?>
        
            <a href="logout.php">Logout</a>
          
          <?php } ?>
    
  </div> 

       <h1>All in One Job Portal</h1>
<p>Find Jobs,Careers and Employment</p>
  <div class="btn-wrap">
  <a href="#">Search Job</a>
  </div>
</div>

<div id="mainbox">
<div class="card">
<div class="label">KEYWORD?</div>
<input class="form-control input-sm" placeholder="Enter job title, position..."  type="text">
</div>

<div class="card">
<div class="label">WHERE?</div>
<select class="form-control input-sm">
<option>All locations</option>
<option>Mumbai</option>
<option>Kolkata</option>
<option>Chennai</option>
<option>Pune</option>
<option>Nasik</option>
</select>
</div>

<div class="card">
<div class="label">CATEGORIES?</div>
<select class="form-control input-sm">
  <option>All Categories</option>
  <option>I.T.</option>
  <option>CAT1</option>
  <option>CAT2</option>
  <option>CAT3</option>
</select>
</div>

<div class="btn-wrap-go">
  <a href="login-candidate.php">Go!</a>
  </div>
</div>


</body>
</html>
