<?php 
session_start();

$username = "";
$emri = "";
$mbiemri = "";

$errors = array();
 
// lidhja me databaz

$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";

$db = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname) or die("could not connect to database");

error_reporting(0);


if (isset($_POST['register_btn'])) {

	$emri = mysqli_real_escape_string($db, $_POST['emri']);
	$mbiemri = mysqli_real_escape_string($db, $_POST['mbiemri']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);  

	if(empty($emri)){
		array_push($errors, "Shenoni Emrin!");
	} 
	if(empty($mbiemri)) {
		array_push($errors, "Shenoni Mbiemrin!");
	}
	if(empty($username)) {
		array_push($errors, "Shenoni Username!");
	}
	if(empty($password)) {
		array_push($errors, "Shenoni Password!");
	}

	$user_exist_query = "SELECT * FROM users WHERE username='$username' LIMIT 1";
	$result = mysqli_query($db, $user_exist_query);
	$user = mysqli_fetch_assoc($result);
	if($user['username'] === $username){
		array_push($errors, "Ekziston nje account me kete username!");
	}

	if(count($errors) == 0){
		$query = "insert into users(emri, mbiemri, user_type, username, password) values ('$emri', '$mbiemri', 'user','$username', '$password')";

		mysqli_query($db, $query);

		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You're logged in!";

		header('location: admin/user.php');
	}
}

if (isset($_POST['login_btn'])) {

	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);  

	if(empty($username)){
		array_push($errors, "Shenoni Username!");
	}
	if(empty($password)){
		array_push($errors, "Shenoni Password!");
	}

	if(count($errors) == 0){
		$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$results = mysqli_query($db, $query);
		
			if (mysqli_num_rows($results)){
				
				$_SESSION['username'] = $username;
				$_SESSION['success'] = "You're logged in!";

				$logged_in_user = mysqli_fetch_assoc($results);

				if ($logged_in_user['user_type'] == 'user'){
					
					header('location: admin/user.php');		  
				}
				else if($logged_in_user['user_type'] == 'admin'){
					header('location: admin/admin.php');		  
				}else{
					header('location: admin/user.php');		  
				}
			}else{
				array_push($errors, "Username/Password gabim. Provoni perseri!");
			}
	}
}

if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: admin/user.php');
}
