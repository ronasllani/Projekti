<?php include ('../functions.php');
    session_start();
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'admin')== 0){
?>

<?php 

    require_once("../functions.php");
    $userslist = " select * from users";
    $result = mysqli_query($db, $userslist);

?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Users</title>
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
                    <tr class="userstr">
                        <td> ID </td>
                        <td> Emri </td>
                        <td> Mbiemri </td>
                        <td> User Type </td>
                        <td> Username  </td>
                        <td> Password </td>
                        <td colspan="2"> Operations </td>


                    </tr>

                    <?php 
                            
                            while($row=mysqli_fetch_assoc($result))
                            {
                                $id = $row['id'];
                                $emri = $row['emri'];
                                $mbiemri = $row['mbiemri'];
                                $usertype = $row['user_type'];
                                $username = $row['username'];
                                $password = $row['password'];

                    ?>
                            <tr>
                                <td><?php echo $id ?></td>
                                <td><?php echo $emri ?></td>
                                <td><?php echo $mbiemri ?></td>
                                <td><?php echo $usertype ?></td>
                                <td><?php echo $username ?></td>
                                <td><?php echo $password ?></td>
                                <td ><a href="edit.php?GetID=<?php echo $id ?>"><button class="edit-button">Edit</button></a></td>
                                <td ><a href="delete.php?Del=<?php echo $id ?>"><button class="delete-button">Delete</button></a></td>
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