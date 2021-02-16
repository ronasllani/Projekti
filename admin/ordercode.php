<?php
if(isset($_POST['orderpije_btn'])){

$user = mysqli_real_escape_string($db, $_POST['puser']);
$produkti = mysqli_real_escape_string($db, $_POST['produkti']);
$cmimi = mysqli_real_escape_string($db, $_POST['pcmimi']);
$sasia = mysqli_real_escape_string($db, $_POST['psasia']);

if(empty($user)){
    array_push($errors, "Shenoni emrin tuaj!");
} 
if(empty($sasia)) {
    array_push($errors, "Shenoni sasine!");
}




if(count($errors) == 0){
    $query = "insert into orders (user, produkti, cmimi, sasia) values ('$user', '$produkti', '$cmimi','$sasia')";
    $result = mysqli_query($db, $query);
    header('location:order.php');
    $_SESSION['success'] = "Porosia u krye me sukses";
}
}