<?php include ('../functions.php');
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'user')== 0){
?>

<?php 

    require_once("../functions.php");
    $PijeID = $_GET['GetID'];
    $query = "select * from pije where id='".$PijeID."'";
    $result = mysqli_query($db, $query);

    while($row=mysqli_fetch_assoc($result))
    {
        $titulli = $row['titulli'];
        $cmimi = $row['cmimi'];
        $user = $_SESSION['username'];
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Order Pije</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>
    </head>

    <body>
        <header>
            <?php include ('components/userheader.php');?>    
        </header>

        <main class="loginmain">
            <div class="container">
                <div class="link-container">
                    <a href="#" >Order Pije</a>
                </div>
                <form class="register forms form-style" id="mainForm" method="post" action="orderpije.php">
                    <?php include ('../errors.php');?>
                    <div class="order-label">
                        <p>Ju lutem shenoni sasine e produktit qe doni ta porositni!</p>
                    </div>
                    <input type="hidden" id="emri-input" class="inputs" placeholder="Emri" name="puser" value="<?php echo $user?>"/>
                    <label class="order-labels"><?php echo $user?></label>
                    <input type="hidden" id="emri-input" class="inputs" placeholder="Titulli" name="produkti" value="<?php echo $titulli?>"/>
                    <label class="order-labels"><?php echo $titulli?></label>
                    <input type="hidden" id="mbiemri-input" class="inputs" placeholder="Cmimi" name="pcmimi" value="<?php echo $cmimi?>"/>
                    <label class="order-labels"><?php echo $cmimi?></label>
                    <input type="text" id="rusername-input" class="inputs" placeholder="Sasia" name="psasia" value=""/>
                    <input id="submit" type="submit" class="inputs submit" value="Order" name="orderpije_btn"/>
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
    header("Location: admin.php");
    exit();
}
}
else{
    header("Location: ../login.php");
    exit();
}
?>