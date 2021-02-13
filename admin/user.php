<?php include ('../functions.php');

    session_start();
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'user')== 0){
?>

<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <title>User Dashboard</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">

        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>
    </head>


    <body>
        <header>
        <?php include ('./components/userheader.php');?>

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
                <a href="editprofile.php?GetID=<?php echo $id ?>" class="buttonAnchor"><button class="editprofile-button">Edit Profile</button></a>
                <a href="admin.php?logout='1'" class="buttonAnchor"><button class="logout-but">Log Out</button></a>

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