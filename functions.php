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


// validimi i formes create user qe ndodhet ne dashboard te adminit
if (isset($_POST['create_btn'])) {

	$emri = mysqli_real_escape_string($db, $_POST['emri']);
	$mbiemri = mysqli_real_escape_string($db, $_POST['mbiemri']);
	$usertype = mysqli_real_escape_string($db, $_POST['usertype']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);  

	if(empty($emri)){
		array_push($errors, "Shenoni Emrin!");
	} 
	if(empty($mbiemri)) {
		array_push($errors, "Shenoni Mbiemrin!");
	}
	if(empty($usertype)) {
		array_push($errors, "Zgjedhni Usertype!");
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
		$query = "insert into users(emri, mbiemri, user_type, username, password) values ('$emri', '$mbiemri', '$usertype','$username', '$password')";

		mysqli_query($db, $query);

		$_SESSION['success'] = "Useri u krijua me sukses";

		header('location: admin.php');
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



// validimi i butonit edit user i cili ndodhet ne dashboard te adminit
if(isset($_POST['update_btn'])){

	$id = $_GET['ID'];
	$emri = mysqli_real_escape_string($db, $_POST['emri']);
	$mbiemri = mysqli_real_escape_string($db, $_POST['mbiemri']);
	$usertype = mysqli_real_escape_string($db, $_POST['usertype']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
	$password = mysqli_real_escape_string($db, $_POST['password']);  

	if(empty($emri)){
		array_push($errors, "Shenoni Emrin!");
	} 
	if(empty($mbiemri)) {
		array_push($errors, "Shenoni Mbiemrin!");
	}
	if(empty($usertype)) {
		array_push($errors, "Zgjedhni Usertype!");
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
		$query = "update users set emri = '".$emri."', mbiemri='".$mbiemri."', user_type='".$usertype."' , username='".$username."' , password='".$password."' where id='".$id."'";
		$result = mysqli_query($db, $query);
		header('location:users.php');
		$_SESSION['success'] = "Te dhenat u nderruan me sukses";
	}
}

// validimi i butonit edit profile i cili ndodhet ne dashboard te userit
if(isset($_POST['edit_btn'])){

	$id = $_GET['ID'];
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
		$query = "update users set emri = '".$emri."', mbiemri='".$mbiemri."' , username='".$username."' , password='".$password."' where id='".$id."'";
		$result = mysqli_query($db, $query);
		header('location: user.php');
		$_SESSION['username'] = $username;
		$_SESSION['success'] = "Te dhenat u nderruan me sukses";

	}
}


//validimi i edititimit te menus per rubriken e pijeve ne admin dashboard
if(isset($_POST['pije_btn'])){

	$id = $_GET['ID'];
	$titulli = mysqli_real_escape_string($db, $_POST['titulli']);
	$cmimi = mysqli_real_escape_string($db, $_POST['cmimi']);
	$pershkrimi = mysqli_real_escape_string($db, $_POST['pershkrimi']);

	if(empty($titulli)){
		array_push($errors, "Shenoni Titullin!");
	} 
	if(empty($cmimi)) {
		array_push($errors, "Shenoni Cmimin!");
	}



	if(count($errors) == 0){
		$query = "update pije set titulli = '".$titulli."', cmimi='".$cmimi."', pershkrimi='".$pershkrimi."' where id='".$id."'";
		$result = mysqli_query($db, $query);
		header('location:adminmenu.php');
		$_SESSION['success'] = "Te dhenat u nderruan me sukses";
	}
}


//validimi i edititimit te menus per rubriken e ushqimit ne admin dashboard
if(isset($_POST['ushqim_btn'])){

	$id = $_GET['ID'];
	$titulli = mysqli_real_escape_string($db, $_POST['titulli']);
	$cmimi = mysqli_real_escape_string($db, $_POST['cmimi']);
	$pershkrimi = mysqli_real_escape_string($db, $_POST['pershkrimi']);

	if(empty($titulli)){
		array_push($errors, "Shenoni Titullin!");
	} 
	if(empty($cmimi)) {
		array_push($errors, "Shenoni Cmimin!");
	}
	if(empty($cmimi)) {
		array_push($errors, "Shenoni Pershkrimin!");
	}



	if(count($errors) == 0){
		$query = "update ushqim set titulli = '".$titulli."', cmimi='".$cmimi."', pershkrimi='".$pershkrimi."' where id='".$id."'";
		$result = mysqli_query($db, $query);
		header('location:adminmenu.php');
		$_SESSION['success'] = "Te dhenat u nderruan me sukses";
	}
}




// validimi i butonit logout
if(isset($_GET['logout'])){
	session_destroy();
	unset($_SESSION['username']);
	header('location: admin/user.php');
}
?>
