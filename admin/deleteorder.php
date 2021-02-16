<?php

// validimi i butonit delete order i cili ndodhet ne dashboard te adminit

    require_once("../functions.php");

    if(isset($_GET['Del'])){
            

        $UserID = $_GET['Del'];
        $query = " delete from orders where id = '".$UserID."'";
        $result = mysqli_query($db, $query);
        if($result){
            header("location:orders.php");
            $_SESSION['success'] = "Orderi u fshi me sukses";

        }
        else{
        
            echo ' Please Check Your Query ';
        }
    }
    else
    {
        header("location:users.php");
    }