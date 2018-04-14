<?php


session_start();


if(empty($_SESSION['id_company'])) {
  header("Location: dashboard_company.php");
  exit();
}

require_once("db.php");
?>
<!doctype html>
<html lang="en">

<head>
	<title>Company Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<link rel="stylesheet" href="assets/vendor/chartist/css/chartist-custom.css">
	<link rel="stylesheet" href="dashboard.css">
	<link rel="stylesheet" href="assets/css/main.css">
	
	<link rel="stylesheet" href="assets/css/demo.css">

	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
</head>

<body>
	<div id="wrapper">
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
        <ul class="nav">
						<li><a href="dashboard_company.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="edit-company.php" class=""><i class="lnr lnr-pencil"></i>Edit Profile</span></a></li>
                        <li><a href="create-job-post.php" class=""><i class="lnr lnr-calendar-full"></i></span>Create Job</span></a></li>
						<li><a href="my-job-post.php" class=""><i class="lnr lnr-briefcase"></i> <span>My Job Posts</span></a></li>
                        <li><a href="job-applications.php" class=""><i class="lnr lnr-envelope"></i> <span>Job Application</span></a></li>
						<li class="active"><a href="resume-database.php"><i class="lnr lnr-user"></i> Resumes</a></li>
						<li class="active"><a href="company-settings.php"><i class="lnr lnr-cog"></i> Settings</a></li>
					    <li><a href="logout.php"><i class="lnr lnr-arrow-right-circle"></i> Logout</span></a></li>
					
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="main">
        <div class="col-md-9 bg-white padding-2">
            <h2>Account Settings</h2>
            <p>In this section you can change your name and account password</p>
            <div class="row">
              <div class="col-md-6">
                <form id="changePassword" action="change-password.php" method="post">
                  <div class="form-group">
                    <input id="password" class="form-control input-sm" type="password" name="password" autocomplete="off" placeholder="Password" required>
                  </div>
                  <div class="form-group">
                    <input id="cpassword" class="form-control input-sm" type="password" autocomplete="off" placeholder="Confirm Password" required>
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-success btn-sm">Change Password</button>
                  </div>
                  <div id="passwordError" class="color-red text-center hide-me">
                    Password Mismatch!!
                  </div>
                </form>
              </div>
              <div class="col-md-6">
                <form action="update-name.php" method="post">
                  <div class="form-group">
                    <label>Your Name (Full Name)</label>
                    <input class="form-control input-sm" name="name" type="text">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-primary btn-sm">Change Name</button>
                  </div>
                </form>
              </div>              
            </div>
            <br>
            <br>
            <div class="row">
              <div class="col-md-6">
                <form action="deactivate-account.php" method="post">
                  <label><input type="checkbox" required> I Want To Deactivate My Account</label>
                  <button class="btn btn-danger btn-flat btn-sm">Deactivate My Account</button>
                </form>
              </div>
            </div>
            
          </div>
        </div>
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				<p class="copyright">&copy; 2018 <a href="#" target="_blank">Job-Portal</a>. All Rights Reserved.</p>
			</div>
		</footer>
	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
	
</body>

</html>
