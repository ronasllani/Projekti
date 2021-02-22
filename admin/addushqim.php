<?php include ('../functions.php');
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'admin')== 0){
?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Shto Ushqim</title>
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
                    <a href="#" >Shto Ushqim</a>
                </div>
                <form class="register forms form-style" id="mainForm" method="post" action="addushqim.php">
                    <?php include ('../errors.php');?>
                    <input type="text" id="emri-input" class="inputs" placeholder="Titulli" name="ushqimtitulli" />
                    <input type="text" id="mbiemri-input" class="inputs" placeholder="Cmimi" name="ushqimcmimi" />
                    <textarea  class="area1" type="text" id="rusername-input" placeholder="Pershkrimi" name="ushqimpershkrimi"></textarea>
                    <input id="submit" type="submit" class="inputs submit" value="Shto" name="addushqim_btn"/>
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