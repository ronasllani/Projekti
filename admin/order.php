<?php include ('../functions.php');
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'user')== 0){
?>

<?php 
    require_once("../functions.php");
    $pijelist = " select * from pije";
    $result = mysqli_query($db, $pijelist);
?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Menu</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>
    </head>

    <body>
        <header>
            <?php include ('components/userheader.php');?>    
        </header>

        <main >
            <p class="adminmenu-title">Pije</p>
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

            <?php

                

            ?>
            <div class="mesazhi-main">

                
                <table class="table table-bordered">
                    <tr class="top-table">
                        <td> Titulli </td>
                        <td> Cmimi </td>
                        <td> Order </td>
                    </tr>

                    <?php 
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $id = $row['id'];
                                $titulli = $row['titulli'];
                                $cmimi = $row['cmimi'];
                                $pershkrimi = $row['pershkrimi'];
                    ?>
                            <tr>
                                <td><?php echo $titulli ?></td>
                                <td><?php echo $cmimi ?></td>
                                <td ><a href="orderpije.php?GetID=<?php echo $id ?>"><button class="edit-button">Order</button></a></td>
                            </tr>        
                    <?php 
                            }  
                    ?>                                                                    
                        

                </table>
            </div>

            <p class="adminmenu-title adminmenu-title1">Ushqim</p>

            <?php 
                require_once("../functions.php");
                $ushqimlist = " select * from ushqim";
                $result = mysqli_query($db, $ushqimlist);
            ?>

            

            <div class="mesazhi-main">

                
                <table class="table table-bordered">
                    <tr class="top-table">
                        <td> Titulli </td>
                        <td> Cmimi </td>
                        <td> Order </td>
                    </tr>

                    <?php 
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $id = $row['id'];
                                $titulli = $row['titulli'];
                                $cmimi = $row['cmimi'];
                                $pershkrimi = $row['pershkrimi'];
                    ?>
                            <tr>
                                <td><?php echo $titulli ?></td>
                                <td><?php echo $cmimi ?></td>
                                <td ><a href="orderushqim.php?GetID=<?php echo $id ?>"><button class="edit-button">Order</button></a></td>
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
    header("Location: admin.php");
    exit();
}
}
else{
    header("Location: ../login.php");
    exit();
}
?>