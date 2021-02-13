<?php include ('activenav.php');?>
<?php include ('functions.php') ?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
    </head>

    <body>
        <header>
            <?php include ('./components/header.php');?>    
        </header>
        <main>
            <div class="contacttext">
                <h2>
                    Mos t'vje marre, dergo mesazh!
                </h2>
                <p>
                    Lorem ipsum dolor sit a, amet consectetur adipisicing elit. Recusandae soluta neque minima eveniet amet distinctio ad tempora, molestias consequuntur impedit! Esse distinctio odit provident nesciunt excepturi totam. Adipisci, necessitatibus autem!
                </p>
            </div>
            <form id="myForm" class="contactus" method="post" action="contact-us.php">
                <p class="contactp">Na Kontaktoni</p>

                <?php include ('errors.php');?>
                <?php if (isset($_SESSION['success'])): ?>
                    <div class= "csuccess">
                        <h3>
                            <?php
                                echo $_SESSION['success'];
                                unset($_SESSION['success'])
                            ?>
                        </h3>

                    </div>
                <?php endif ?> 

                <div class="contactText">
                  <input type="text" placeholder="Emri" class="input" name="cemri" value="<?php echo $cemri?>">
                  <input type="text" placeholder="Email" class="input" name="cemail" value="<?php echo $cemail?>">
                </div>
                
                <div class="subject">
                  <input type="text" placeholder="Titulli" class="input" name="ctitulli">
                </div>
                
                <div class="msg">
                  <textarea  class="area" placeholder="Mesazhi" name="cmesazhi"></textarea>
                </div>
                
                <div>
                    <button class="btn" name="dergo_btn">Dergo Mesazhin</button>
                </div>
            </form>

        </main>
        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>
    </body>
</html>