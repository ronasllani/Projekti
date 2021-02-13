<?php include ('../functions.php');
    session_start();
    if(isset($_SESSION['role']) && isset($_SESSION['username'])){
        if(strcmp($_SESSION['role'], 'user')== 0){
?>


<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">

        <title>Mesazhet</title>
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="../img/logo.ico" type="image/x-icon">
        <?php include ('../activenav.php')?>
    </head>

    <body>
        <header>
            <?php include ('components/userheader.php');?>    
        </header>

        <main class="mesazhi-main">
            <?php
                $messages = "SELECT * FROM contact";
                if($result = mysqli_query($db, $messages)){
                    if(mysqli_num_rows($result) > 0){
                        echo "<table>";
                            echo "<tr>";
                                echo "<th>ID</th>";
                                echo "<th>Emri</th>";
                                echo "<th>Email</th>";
                                echo "<th>Titulli</th>";
                                echo "<th class='mesazhi'>Mesazhi</th>";
                            echo "</tr>";
                        while($row = mysqli_fetch_array($result)){
                            echo "<tr>";
                                echo "<td>" . $row['id'] . "</td>";
                                echo "<td>" . $row['emri'] . "</td>";
                                echo "<td>" . $row['email'] . "</td>";
                                echo "<td>" . $row['titulli'] . "</td>";
                                echo "<td style='width:400px' class='wrapword'>" . $row['mesazhi'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                        mysqli_free_result($result);
                    }
                }
            ?>
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