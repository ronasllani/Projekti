<!DOCTYPE html>
<html>
    <head>
        <?php include ('activenav.php');?>
        <title>Home</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    </head>


    <body>
        <header>
            <?php include ('./components/header.php');?>
        </header>



        <main>
            <div class="home-container">
                <div class="home-overlay"></div>
                <img src="img/homemain.jpg" class="home-foto" alt="">
            </div>
            <div class="main-title">
                <p class="main-text1">Restaurant SHIJA</p>
                <p class="main-text2">Mire se vini</p>
            </div>
            <div class="row">
                <div class="side">
                    <img src="img/hamburger.jpg" alt="hamburger" class="hamburger">
                    <div class="side2">
                        <p>Ju ofrojme shije te veqante me kuzhinjeret me te mire ne rajon. Kemi nje menu te pasur me shumellojshmeri ushqimesh.</p>
                        <a  href="menu.php" class="buttonAnchor"><button class="homebutton">Menu</button></a>
                    </div>
                </div>
                <div class="side side3">
                    <img src="img/hamburger1.jpg" alt="hamburger" class="hamburger">
                    <div class="side2">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut atque qui eius vitae iure facilis dolor magnam rerum, corrupti veniam. </p>
                        <a href="contact-us.php" class="buttonAnchor"><button class="homebutton">Na Kontaktoni</button></a>
                    </div>
                </div>
              </div>
        </main>



        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>


    </body>
</html>
