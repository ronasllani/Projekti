<?php include ('activenav.php');?>
<?php include ('functions.php');
    if(isset($_SESSION['username']))
    {
        header("Location: admin/user.php");
        exit;
    }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Register</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    </head>

    <body>
        <header>
        <?php
                if(isset($_SESSION['username'])){
                    include ('components/loggedheader.php');
                }else{
                    include ('components/header.php');
                }
            ?>    
        </header>
        <main class="loginmain">
            <div class="container">
                <div class="link-container">
                    <a href="login.php">Login</a>
                    <a href="register.php" >Register</a>
                </div>
                <form class="register forms form-style" id="mainForm" method="post" action="register.php">
                    <?php include ('errors.php');?>    
                    <input type="text" id="emri-input" class="inputs" placeholder="Emri" name="emri" value="<?php echo $emri?>"/>
                    <input type="text" id="mbiemri-input" class="inputs" placeholder="Mbiemri" name="mbiemri" value="<?php echo $mbiemri?>"/>
                    <input type="text" id="rusername-input" class="inputs" placeholder="Username" name="username" value="<?php echo $username?>"/>
                    <input type="password" id="rpassword-input" class="inputs" placeholder="Password" name="password"/>
                    <input id="submit" type="submit" class="inputs submit" value="Register" name="register_btn"/>
                </form>
            </div>
        </main>
        <footer>
            
        </footer>


        <script src="javascript/login.js"></script>
    </body>
</html>