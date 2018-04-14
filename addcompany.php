<?php


session_start();


require_once("db.php");


if(isset($_POST)) {


	$companyname = mysqli_real_escape_string($conn, $_POST['companyname']);
	$contactno = mysqli_real_escape_string($conn, $_POST['contactno']);
	$website = mysqli_real_escape_string($conn, $_POST['website']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);

	$country = mysqli_real_escape_string($conn, $_POST['country']);
	$state = mysqli_real_escape_string($conn, $_POST['state']);
	$city = mysqli_real_escape_string($conn, $_POST['city']);

	$aboutme = mysqli_real_escape_string($conn, $_POST['aboutme']);
	$name = mysqli_real_escape_string($conn, $_POST['name']);

	
	$password = base64_encode(strrev(md5($password)));

	
	$sql = "SELECT email FROM company WHERE email='$email'";
	$result = $conn->query($sql);

	
	if($result->num_rows == 0) {

		
		$uploadOk = true;

		
		$folder_dir = "uploads/logo/";

		
		$base = basename($_FILES['image']['name']); 

	
		$imageFileType = pathinfo($base, PATHINFO_EXTENSION); 

	
		$file = uniqid() . "." . $imageFileType; 
	  
		
		$filename = $folder_dir .$file;  

		
		if(file_exists($_FILES['image']['tmp_name'])) { 

			
			if($imageFileType == "jpg" || $imageFileType == "png")  {

				
				if($_FILES['image']['size'] < 500000) { // File size is less than 5MB

					
					move_uploaded_file($_FILES["image"]["tmp_name"], $filename);

				} else {
					
					$_SESSION['uploadError'] = "Wrong Size. Max Size Allowed : 5MB";
					$uploadOk = false;
				}
			} else {
				
				$_SESSION['uploadError'] = "Wrong Format. Only jpg & png Allowed";
				$uploadOk = false;
			}
		} else {
				
				$_SESSION['uploadError'] = "Something Went Wrong. File Not Uploaded. Try Again.";
				$uploadOk = false;
			}

	
		if($uploadOk == false) {
			header("Location: register-company.php");
			exit();
		}

	
		$sql = "INSERT INTO company(name, companyname, country, state, city, contactno, website, email, password, aboutme, logo) VALUES ('$name', '$companyname', '$country', '$state', '$city', '$contactno', '$website', '$email', '$password', '$aboutme', '$file')";

		if($conn->query($sql)===TRUE) {

			
			$_SESSION['registerCompleted'] = true;
			header("Location: page-login-company.php");
			exit();

		} else {
			
			echo "Error " . $sql . "<br>" . $conn->error;
		}
	} else {
		
		$_SESSION['registerError'] = true;
		header("Location: register-company.php");
		exit();
	}

	
	$conn->close();

} else {
	
	header("Location: register-company.php");
	exit();
}