<?php 
	session_start();
	$db = mysqli_connect('localhost', 'root', '', 'businesscards');

	// initialize variables
	$username = "";
    $company = "";
    $email="";
    $tel="";
	$id = 0;
	$update = false;

	if (isset($_POST['save'])) {
		$username = $_POST['username'];
		$company = $_POST['company'];

		mysqli_query($db, "INSERT INTO info (username, company,email,tel) VALUES ('$username', '$company','$email','$tel')"); 
		$_SESSION['message'] = "company saved"; 
		header('location: cards.php');
	}


	if (isset($_POST['update'])) {
		$id = $_POST['id'];
		$username = $_POST['username'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $tel = $_POST['tel']

		mysqli_query($db, "UPDATE info SET username='$username', company='$company',email='$email',tel='$tel' WHERE id=$id");
		$_SESSION['message'] = "company updated!"; 
		header('location: cards.php');
	}

if (isset($_GET['del'])) {
	$id = $_GET['del'];
	mysqli_query($db, "DELETE FROM info WHERE id=$id");
	$_SESSION['message'] = "company deleted!"; 
	header('location: cards.php');
}


	$results = mysqli_query($db, "SELECT * FROM info");


?>