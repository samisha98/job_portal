<?php


session_start();

if(empty($_SESSION['id_company'])) {
  header("Location: dashboard_company.php");
  exit();
}


require_once("db.php");


if(isset($_POST)) {

	
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	
	$password = base64_encode(strrev(md5($password)));

	
	$sql = "UPDATE company SET password='$password' WHERE id_company='$_SESSION[id_company]'";
	if($conn->query($sql) === true) {
		header("Location: dashboard_company.php");
		exit();
	} else {
		echo $conn->error;
	}

 	
 	$conn->close();

} else {

	header("Location:company-settings.php");
	exit();
}