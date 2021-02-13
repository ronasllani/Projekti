<?php include ('activenav.php')?>
<?php include ('functions.php')?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        
        <title>Login and Register</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    </head>

    <body>
        <header>
            <?php include ('./components/header.php');?>    
        </header>
        <main class="loginmain">
            <div class="container">
                <div class="link-container">
                    <a href="login.php">Login</a>
                    <a href="register.php" >Register</a>
                </div>
                <form class="login forms form-style" id="mainForm" action="login.php" method="post">
                <?php include ('errors.php');?>    

                    <input type="text" id="username-input" class="inputs" placeholder="Username" name="username" value="<?php echo $username?>"/>
                    <input type="password" id="password-input" class="inputs" placeholder="Password" name="password" />
                    <input id="submit" type="submit" class="inputs submit" value="Log In" name="login_btn"/>
                </form>
            </div>
        </main>
        <footer>
            
        </footer>


        <script src="javascript/login.js"></script>
    </body>
</html>