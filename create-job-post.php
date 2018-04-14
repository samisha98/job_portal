
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
	<link rel="stylesheet" href="create-job-post.css">
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
        <form method="post" action="addpost.php">
                <div class="col-md-12 latest-job ">
                  <div class="form-group">
                    <input class="form-control input-sm" type="text" id="jobtitle" name="jobtitle" placeholder="Job Title">
                  </div>
                  <div class="form-group">
                    <textarea class="form-control input-sm" id="description" name="description" placeholder="Job Description"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control  input-sm" id="minimumsalary" min="1000" autocomplete="off" name="minimumsalary" placeholder="Minimum Salary" required="">
                  </div>
                  <div class="form-group">
                    <input type="number" class="form-control  input-sm" id="maximumsalary" name="maximumsalary" placeholder="Maximum Salary" required="">
                  </div>
                  <div class="form-group">
                <input type="number" class="form-control  input-sm" id="experience" autocomplete="off" name="experience" placeholder="Experience (in Years) Required" required="">
                  </div>
                  <div class="form-group">
                    <input type="text" class="form-control  input-sm" id="qualification" name="qualification" placeholder="Qualification Required" required="">
                  </div>
                  <div class="form-group">
                    <button type="submit" class="btn btn-flat btn-success">Create</button>
                  </div>
                </div>
              </form>
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
