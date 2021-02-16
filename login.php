<?php include ('activenav.php')?>
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
        
        <title>Login and Register</title>
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
                <form class="login forms form-style" id="mainForm" action="login.php" method="post">
                    <?php include ('errors.php');?>    
                    <?php if (isset($_SESSION['success'])): ?>
                        <div class= "success success1">
                            <h3>
                                <?php
                                    echo $_SESSION['success'];
                                    unset($_SESSION['success'])
                                ?>
                            </h3>

                        </div>
                    <?php endif ?>

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