<?php

// validimi i butonit delete user i cili ndodhet ne dashboard te adminit

    require_once("../functions.php");

    if(isset($_GET['Del'])){
            

        $UserID = $_GET['Del'];
        $query = " delete from users where id = '".$UserID."'";
        $result = mysqli_query($db, $query);
        if($result){
            header("location:users.php");
            $_SESSION['success'] = "Useri u fshi me sukses";

        }
        else{
        
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:users.php");
    }