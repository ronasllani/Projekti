<!DOCTYPE html>
<html>
    <head>
        <?php include ('activenav.php');?>
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
            <form id="myForm" class="contactus">
                <p class="contactp">Na Kontaktoni</p>
                
                <div class="contactText">
                  <input type="text" placeholder="Emri" class="input">
                  <input type="text" placeholder="Email" class="input">
                </div>
                
                <div class="subject">
                  <input type="text" placeholder="Titulli" class="input">
                </div>
                
                <div class="msg">
                  <textarea  class="area" placeholder="Mesazhi"></textarea>
                </div>
                
                <div>
                    <button class="btn" onclick="myFunction()">Dergo Mesazhin</button>
                </div>
            </form>

        </main>
        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>
        <script src="javascript/contact-us.js"></script>
    </body>
</html>