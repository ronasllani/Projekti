<?php include ('../functions.php');

    if(empty($_SESSION['username'])){
        header('location: ../login.php');
    }

?>

<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <title>Admin</title>
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
    </head>


    <body>
        <header>
        </header>



        <main>
            <h1>Hello <?php echo $_SESSION['username'];?></h1>
            <a href="admin.php?logout='1'"><button>Log Out</button></a>
        </main>



        <footer>
        </footer>


    </body>
</html>