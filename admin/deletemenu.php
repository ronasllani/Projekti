<?php

// validimi i butonit delete menu i cili ndodhet ne dashboard te adminit

    require_once("../functions.php");

    if(isset($_GET['Del'])){
            

        $PijeID = $_GET['Del'];
        $query = " delete from pije where id = '$PijeID'";
        $result = mysqli_query($db, $query);
        if($result){
            header("location:adminmenu.php");
            $_SESSION['success'] = "Pija u fshi me sukses";

        }
        else{
        
            echo ' Please Check Your Query ';
        }
    }
    
    if(isset($_GET['Del1'])){
            

        $UshqimID = $_GET['Del1'];
        $ushqimquery = " delete from ushqim where id = '$UshqimID'";
        $ushqimresult = mysqli_query($db, $ushqimquery);
        if($ushqimresult){
            header("location:adminmenu.php");
            $_SESSION['success'] = "Ushqimi u fshi me sukses";

        }
        else{
        
            echo ' Please Check Your Query ';
        }
    }