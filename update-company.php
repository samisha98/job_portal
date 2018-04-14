<?php

//To Handle Session Variables on This Page
session_start();

if(empty($_SESSION['id_company'])) {
  header("Location: dashboard_company.php");
  exit();
}

//Including Database Connection From db.php file to avoid rewriting in all files
require_once("db.php");

//if user Actually clicked update profile button
if(isset($_POST)) {

	//Escape Special Characters
	$companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
	$website = mysqli_real_escape_string($conn, $_POST['website']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
	$aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);

	$uploadOk = true;

	if(is_uploaded_file ( $_FILES['image']['tmp_name'] )) {

		$folder_dir = "uploads/logo/";

		$base = basename($_FILES['image']['name']); 

		$imageFileType = pathinfo($base, PATHINFO_EXTENSION); 

		$file = uniqid() . "." . $imageFileType; 
	  
		$filename = $folder_dir .$file;  

		if(file_exists($_FILES['image']['tmp_name'])) { 

			if($imageFileType == "jpg" || $imageFileType == "png")  {

				if($_FILES['image']['size'] < 500000) { // File size is less than 5MB

					//If all above condition are met then copy file from server temp location to uploads folder.
					move_uploaded_file($_FILES["image"]["tmp_name"], $filename);

				} else {
					$_SESSION['uploadError'] = "Wrong Size. Max Size Allowed : 5MB";
					header("Location: edit-company.php");
					exit();
				}
			} else {
				$_SESSION['uploadError'] = "Wrong Format. Only jpg & png Allowed";
				header("Location: edit-company.php");
				exit();
			}
		}
	} else {
		$uploadOk = false;
	}

	

	//Update User Details Query
	$sql = "UPDATE company SET companyname='$companyname', website='$website', city='$city', state='$state', contactno='$contactno', aboutme='$aboutme'";

	if($uploadOk == true) {
		$sql = $sql . ", logo='$file'";
	}

	$sql = $sql . " WHERE id_company='$_SESSION[id_company]'";

	if($conn->query($sql) === TRUE) {
		$_SESSION['name'] = $companyname;
		//If data Updated successfully then redirect to dashboard
		header("Location: dashboard_company.php");
		exit();
	} else {
		echo "Error ". $sql . "<br>" . $conn->error;
	}
	//Close database connection. Not compulsory but good practice.
	$conn->close();

} else {
	//redirect them back to dashboard page if they didn't click update button
	header("Location: edit-company.php");
	exit();
}