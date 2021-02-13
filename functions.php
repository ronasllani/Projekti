<?php 
session_start();


//inicializimi fillestar i variablave
$username = "";
$emri = "";
$mbiemri = "";

//inicializimi i nje array per ruajtjen e errorave gjate plotesimit te formave
$errors = array();
 

// lidhja me databaz
$dbserver = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "register";

$db = mysqli_connect($dbserver, $dbusername, $dbpassword, $dbname) or die("could not connect to database");


// mos paraqitja e errorave te padeshiruar gjate mbushjes se formave
error_reporting(0);


// validimi i formes register
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

		$_SESSION['role'] = "user";
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "You're logged in!";

		header('location: admin/user.php');		  
	}
}

// validimi i formes login
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
				$_SESSION['role'] = $logged_in_user['user_type'];
				header('location: admin/user.php');		  
			}
			else if($logged_in_user['user_type'] == 'admin'){
				$_SESSION['role'] = $logged_in_user['user_type'];
				header('location: admin/admin.php');		  
			}
			else{
				
				header('location: admin/user.php');		  
			}
		}
		else{
			array_push($errors, "Username/Password gabim. Provoni perseri!");
		}
		
	}
}

// validimi i cotact us formes

$cemri = "";
$cemail = "";
$ctitulli = "";
$cmesazhi = "";

//validimi i email qe te pranoj si input vetem emails
function checkemail($str) {
	return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $str)) ? FALSE : TRUE;
}

if (isset($_POST['dergo_btn'])) {

	$cemri = mysqli_real_escape_string($db, $_POST['cemri']);
	$cemail = mysqli_real_escape_string($db, $_POST['cemail']);
	$ctitulli = mysqli_real_escape_string($db, $_POST['ctitulli']);
	$cmesazhi = mysqli_real_escape_string($db, $_POST['cmesazhi']);

	if(empty($cemri)){
		array_push($errors, "Shenoni Emrin!");
	} 
	if(!checkemail($cemail)) {
		array_push($errors, "Shenoni Email!");
	}
	if(empty($ctitulli)) {
		array_push($errors, "Zgjedhni Titullin!");
	}
	if(empty($cmesazhi)) {
		array_push($errors, "Shenoni Mesazhin!");
	}


	if(count($errors) == 0){
		$query = "insert into contact(emri, email, titulli, mesazhi) values ('$cemri', '$cemail', '$ctitulli','$cmesazhi')";

		mysqli_query($db, $query);

		$_SESSION['success'] = "Mesazhi u dergua me sukses";

	}
}


// validimi i butonit logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: admin/user.php');
}
