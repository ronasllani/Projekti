<?php include ('../functions.php');

    $strSQL = "SELECT * FROM users WHERE username = '".$_SESSION['username']."' LIMIT 1";
    $rs = mysqli_query($db, $strSQL);

    while($row = mysqli_fetch_array($rs)) {
        $id = $row['id'];
        $emri = $row['emri'];
        $mbiemri = $row['mbiemri'];
        $username = $row['username'];
        $password = $row['password'];
    }

    session_start();
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'admin')== 0){
?>



<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <title>Admin Dashboard</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>

    </head>


    <body>
        <header>
        <?php include ('./components/adminheader.php');?>
        </header>



        <main>
            <div class="admin-info">
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
                <div >
                    <h1 class="admin-title">Hello <?php echo $_SESSION['username'];?></h1>
                    <h3 class="profile-title">Profile info</h3>

                    <div class="profile-information">
                        <div class="profile-labels">
                            <div class="plabel"><p>Emri</p></div>
                            <div class="plabel"><p>Mbiemri</p></div>
                            <div class="plabel"><p>Username</p></div>
                            <div class="lastlabel"><p>Password</p></div>
                        </div>
                        <div class="profile-info">
                            <div class="pinfo"><p><?php echo $emri?></p></div>
                            <div class="pinfo"><p><?php echo $mbiemri?></p></div>
                            <div class="pinfo"><p><?php echo $username?></p></div>
                            <div class="lastinfo"><p><?php echo $password?></p></div>
                        </div>
                    </div>
                    <a href="create-user.php"><button class="create-but">Create User</button></a>
                </div>
                <a href="admin.php?logout='1'" class="buttonAnchor"><button class="logout-but">Log Out</button></a>

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