<?php include ('../functions.php');
    session_start();
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'admin')== 0){
?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Create User</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>
    </head>

    <body>
        <header>
            <?php include ('components/adminheader.php');?>    
        </header>

        <main class="loginmain">
            <div class="container">
                <div class="link-container">
                    <a href="create-user.php" >Krijo User</a>
                </div>
                <form class="register forms form-style" id="mainForm" method="post" action="create-user.php">
                    <?php include ('../errors.php');?>    
                    <input type="text" id="emri-input" class="inputs" placeholder="Emri" name="emri" value="<?php echo $emri?>"/>
                    <input type="text" id="mbiemri-input" class="inputs" placeholder="Mbiemri" name="mbiemri" value="<?php echo $mbiemri?>"/>
                    <select name="usertype" id="rusername-input" placeholder="User Type" class="inputs">
                        <option value="" class="user-type"></option>
                        <option value="admin" class="user-type">Admin</option>
                        <option value="user" class="user-type">User</option>
                    </select>

                    <input type="text" id="rusername-input" class="inputs" placeholder="Username" name="username" value="<?php echo $username?>"/>
                    <input type="password" id="rpassword-input" class="inputs" placeholder="Password" name="password"/>
                    <input id="submit" type="submit" class="inputs submit" value="Krijo" name="create_btn"/>
                </form>
            </div>
        </main>
        <footer>
            
        </footer>


        <script src="javascript/login.js"></script>
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