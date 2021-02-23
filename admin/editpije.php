<?php include ('../functions.php');
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'admin')== 0){
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
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Edit Pije</title>
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
                    <a href="#" >Edit Pije</a>
                </div>
                <form class="register forms form-style" id="mainForm" method="post" action="editpije.php?ID=<?php echo $PijeID ?>">
                    <?php include ('../errors.php');?>
                    <input type="text" id="emri-input" class="inputs" placeholder="Titulli" name="titulli" value="<?php echo $titulli?>"/>
                    <input type="text" id="mbiemri-input" class="inputs" placeholder="Cmimi" name="cmimi" value="<?php echo $cmimi?>"/>
                    <input id="submit" type="submit" class="inputs submit" value="Update" name="pije_btn"/>
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