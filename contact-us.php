<!DOCTYPE html>
<html>
    <head>
        <title>Contact Us</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    </head>

    <body>
        <header>
            <a href="home.php" class="logo"><img class="logo" src="img/logo.png" ></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="menu.php" >Menu</a></li>
                    <li><a href="contact-us.php" class="active">Contact Us</a></li>
                </ul>
            </nav>            
            <a class="lgr" href="login.php"><button class="navbut">Log In / Register</button></a>
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
            <div class="footer-div">
                <div class="shija-footer">
                    <h3 class="shija-titulli">Shija</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing<br> elit. Dolorum ipsum iure libero necessitatibus porro, <br>quibusdam ratione animi </p>
                </div>
                <div class="footer-nav">
                    <h3 class="nav-titulli">Pages</h3>
                    <div class="nav-elements">
                        <a href="home.php"><p >Home</p></a>
                        <a href="menu.php"><p>Menu</p></a>
                        <a href="contact-us.php"><p>Contact Us</p></a>
                        <a href="login.php"><p>Login / Register</p></a>
                    </div>
                </div>
                <div class="footer-contact">
                    <h3 class="nav-titulli">Contact</h3>
                    <p>Kosove, Prishtine</p>
                    <p>Lagja NR, Str, 10000</p>
                    <div class="fcontact-a">
                        <a href="tel:5554280940">+ 123 4567 89</a>
                        <a href="mailto:info@yoursite.com">info@yoursite.com</a>
                    </div>
                </div>
            </div>
            <h5 class="footer-content">Shija Restaurant &#169; All rights reserved</h5>

        </footer>
        <script src="javascript/contact-us.js"></script>
    </body>
</html>