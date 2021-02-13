<?php include ('../functions.php');

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