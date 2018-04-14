<?php

//To Handle Session Variables on This Page
session_start();


//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");
?>

<!doctype html>
<html lang="en">

<head>
	<title>Candidate Dashboard</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<link rel="stylesheet" href="job-details.css">
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
					<li><a href="dashboard_candidate.php" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						<li><a href="page-profile.php" class=""><i class="lnr lnr-user"></i> <span>Profile</span></a></li>
                        <li><a href="edit-profile.php" class=""><i class="lnr lnr-pencil"></i>Edit Profile</span></a></li>
                        <li><a href="applied-jobs.php" class=""><i class="lnr lnr-calendar-full"></i></span>Applied Jobs</span></a></li>
						<li><a href="jobs.php" class=""><i class="lnr lnr-briefcase"></i> <span>Available Jobs</span></a></li>
                        
                        <li><a href="logout.php"><i class="lnr lnr-arrow-right-circle"></i> Logout</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		
		<div class="main">
		<section class="content-header">
      <div class="container">
        <div class="row">
          <div class="col-md-12 latest-job margin-bottom-20">
            <h1 class="text-center">Latest Jobs</h1>            
           

          </div>
        </div>
      </div>
    </section>

<div class="container">
	<div class="flex-row row">
	

		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
			
				<div class="caption">
					<h3>Title</h2>
					<img src="images/rocket-ship-logoa.jpg"><br>
					<p class="flex-text text-muted">Lorem ipsum dolor .  asdf asdf Distinctio, evenietsdf sdfsdfsdfsdfsdfsdf.
					</p>
					<p><a class="btn btn-primary" href="#">Link</a></p>
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>


		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail ">
								<img src="images/e-logoa.jpg">
				<div class="caption">
					<h3>Title</h2>
					<p class="flex-text text-muted">Lorem ipsum dolor sit amet, vel, quia. Non nostrum, consectetur ipsum doloribus enim maiores a laudantium, odio vel blanditiis id ea dolorum expedita fugit incidunt commodi.</p>
					<p>
						<a class="btn btn-primary" href="#">Link</a>
					</p>
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>


		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
				<div class="caption">
					<h3>Title</h2>
					<img src="images/fish-logo.jpg"><br>
					<p class="flex-text text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, vel, quia. Non nostrum, consectetur ipsum doloribus enim maiores a laudantium.</p>
					
					<p>
					
						<a class="btn btn-primary" href="#">Link</a>
					</p>
				</div>
				
				<!-- /.caption -->
			</div>
			
			<!-- /.thumbnail -->
		</div>


		<div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail">
												<img src="images/letter-a-logo.jpg">
				<div class="caption">
					<h3>Title</h2>
					<p class="flex-text text-muted">Lorem ipsum dolor sit amet.  nihil error animi nobis quaerat quidem, amet, praesentium aspernatur inventore numquam! Totam, dolorem inventore reprehenderit,
						culpa obcaecati!</p>
					<p><a class="btn btn-primary" href="#">Link</a></p>
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>

		<?php 
          /* Show any 4 random job post
           * 
           * Store sql query result in $result variable and loop through it if we have any rows
           * returned from database. $result->num_rows will return total number of rows returned from database.
          */
          $sql = "SELECT * FROM job_post Order By Rand() Limit 4";
          $result = $conn->query($sql);
          if($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) 
            {
              $sql1 = "SELECT * FROM company WHERE id_company='$row[id_company]'";
              $result1 = $conn->query($sql1);
              if($result1->num_rows > 0) {
                while($row1 = $result1->fetch_assoc()) 
                {
			 ?>
			 <div class="col-xs-6 col-sm-4 col-lg-3">
			<div class="thumbnail ">
			<img src="uploads/logo/<?php echo $row['logo']; ?>" alt="companylogo">
				<div class="caption">
				<a href="view-job-post1.php?id=<?php echo $row['id_jobpost']; ?>">
				<?php echo $row['jobtitle']; ?></a>
            <p class="flex-text text-muted"> <br>Salary: $<?php echo $row['maximumsalary']; ?>/Month</span></h4>
            
                  <br>  <?php echo $row1['companyname']; ?> <br> <?php echo $row1['city']; ?> <br>Experience: <?php echo $row['experience']; ?> Years
                
              
				</p>
					<p>
						<a class="btn btn-primary" href="view-job-post.php?id=<?php echo $row['id_jobpost']; ?>">Link</a>
					</p>
				</div>
				<!-- /.caption -->
			</div>
			<!-- /.thumbnail -->
		</div>
           
          <?php
              }
            }
            }
          }
          ?>


	


	</div>
	<!-- /.flex-row  -->
</div>
<!-- /.container  -->






<!-- DEMO STYLES and NOTES BELOW -->
<style type="text/css">
body {
		background-color: rgba(0, 0, 0, 0.03);
		padding-top: 15px;
	  font-family: 'Lato', sans-serif;
	}

/* make gutter sizes consistent */
.flex-row  {
    padding-left: 15px;
    padding-right: 15px;
}

/* 
  Extra Small Devices, Phones { .col-xs-$ } 
    ~ 480px to 767px ~

  Extra Small Devices, Phones { .col-sm-$ } 
    ~ 768px to 991px ~

  Extra Small Devices, Phones { .col-md-$ } 
    ~ 992 to 1200px ~

  Extra Small Devices, Phones { .col-lg-$ } 
    ~ 1201px up ~
 */
	
/* Extra Media Query Below for Retina Iphones and Smaller */
@media only screen and (max-width : 480px){
	.flex-row > [class*='col-'] {
			width: 100%;
	}
	.flex-row  {
    padding-left: 0px;
    padding-right: 0px;
  }
}
</style>

		
</body>
		</div>
		<!-- END MAIN -->
		
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
	<script src="assets/vendor/chartist/js/chartist.min.js"></script>
	<script src="assets/scripts/klorofil-common.js"></script>
  
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="js/adminlte.min.js"></script>
<script src="js/jquery.twbsPagination.min.js"></script>

<script>
  function Pagination() {
    $("#pagination").twbsPagination({
      totalPages: <?php echo $total_pages; ?>,
      visible: 5,
      onPageClick: function (e, page) {
        e.preventDefault();
        $("#target-content").html("loading....");
        $("#target-content").load("jobpagination.php?page="+page);
      }
    });
  }
</script>

<script>
  $(function () {
      Pagination();
  });
</script>

<script>
  $("#searchBtn").on("click", function(e) {
    e.preventDefault();
    var searchResult = $("#searchBar").val();
    var filter = "searchBar";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  $(".experienceSearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "experience";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  $(".citySearch").on("click", function(e) {
    e.preventDefault();
    var searchResult = $(this).data("target");
    var filter = "city";
    if(searchResult != "") {
      $("#pagination").twbsPagination('destroy');
      Search(searchResult, filter);
    } else {
      $("#pagination").twbsPagination('destroy');
      Pagination();
    }
  });
</script>

<script>
  function Search(val, filter) {
    $("#pagination").twbsPagination({
      totalPages: <?php echo $total_pages; ?>,
      visible: 5,
      onPageClick: function (e, page) {
        e.preventDefault();
        val = encodeURIComponent(val);
        $("#target-content").html("loading....");
        $("#target-content").load("search.php?page="+page+"&search="+val+"&filter="+filter);
      }
    });
  }
</script>

  


</html>
