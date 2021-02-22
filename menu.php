<?php include ('functions.php');?>

<!DOCTYPE html>
<html>
    <head> 
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <?php include ('activenav.php');?>
        <title>Menu</title>
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
        <main>
            <div class="home-container">
                <div class="home-overlay"></div>

                <img src="img/menumain.jpg" class="home-foto" alt="">
            </div>
            <div class="menu-title">
                <p class="menu-title1">Menu</p>
            </div>

            

            <div class="pije-container" >
                <img src="img/pije.jpg" alt="" class="pije-foto">
            </div>
            <p class="sec-titulli">Pije</p>

        
            <?php
                while ($row = mysqli_fetch_array($pijeresult)) {
                    echo "<div id='menusection'>";
                        echo "<div id='menusection1'>";

                            echo "<div id='item'>";
                                echo "<div id='item-title'>";
                                    echo "<h2 id='ititle'>";
                                        echo $row['titulli'];
                                    echo "</h2>";
                                    echo "<div id='ilines'>";
                                    echo "</div>";
                                    echo "<p id='iprice'>";
                                        echo $row['cmimi'];
                                    echo "</p>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";
                        
                }
            ?>
                    
            <div class="pije-container" >
                <img src="img/ushqim.jpg" alt="" class="pije-foto">
            </div>
            <p class="sec-titulli">Ushqim</p>
            <?php
                while ($row1 = mysqli_fetch_array($ushqimresult)) {
                    echo "<div id='menusection'>";
                        echo "<div id='menusection1'>";
                            echo "<div id='item'>";
                                echo "<div id='item-title'>";
                                    echo "<h2 id='ititle'>";
                                        echo $row1['titulli'];
                                    echo "</h2>";
                                    echo "<div id='ilines'>";
                                    echo "</div>";
                                    echo "<p id='iprice'>";
                                        echo $row1['cmimi'];
                                    echo "</p>";
                                echo "</div>";
                                echo "<div id='idesc'>";
                                    echo "<p>";
                                        echo $row1['pershkrimi'];
                                    echo "</p>";
                                echo "</div>";
                            echo "</div>";
                        echo "</div>";
                    echo "</div>";      
                }
            ?>
        </main>
        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>
    </body>
</html>