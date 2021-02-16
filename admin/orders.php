<?php include ('../functions.php');
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'admin')== 0){
?>

<?php 

    require_once("../functions.php");
    $orderlist = " select * from orders";
    $result = mysqli_query($db, $orderlist);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Orders</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>
    </head>

    <body>
        <header>
            <?php include ('components/adminheader.php');?>    
        </header>

        <main >
            <?php if (isset($_SESSION['success'])): ?>
                    <div class= "success">
                        <h3>
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success'])
                            ?>
                        </h3>

                    </div>
                <?php endif ?>
            <div class="mesazhi-main">
                
                <table class="table table-bordered">
                    <tr class="top-table">
                        <td> Data </td>
                        <td> ID </td>
                        <td> Emri </td>
                        <td> Produkti </td>
                        <td> Cmimi </td>
                        <td> Sasia  </td>
                        <td> Totali  </td>
                        <td> Operations </td>


                    </tr>

                    <?php 
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $date = $row['date'];
                                $id = $row['id'];
                                $user = $row['user'];
                                $produkti = $row['produkti'];
                                $cmimi = $row['cmimi'];
                                $sasia = $row['sasia'];
                                $totali = $sasia * $cmimi;
                    ?>
                            <tr>
                                <td><?php echo $date ?></td>
                                <td><?php echo $id ?></td>
                                <td><?php echo $user ?></td>
                                <td><?php echo $produkti ?></td>
                                <td><?php echo $cmimi ?></td>
                                <td><?php echo $sasia ?></td>
                                <td><?php echo $totali ?><?php echo '$' ?></td>
                                <td ><a href="deleteorder.php?Del=<?php echo $id ?>"><button class="delete-button">Delete</button></a></td>
                            </tr>        
                    <?php 
                            }  
                    ?>                                                                    
                        

                </table>
            </div>
                 
               
        </main>
        <footer>
            
        </footer>


    </body>
</html>
<?php
}else{
    header("Location: user.php");
    exit();
}
}
else{
    header("Location: ../login.php");
    exit();
}
?>