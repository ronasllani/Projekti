<!DOCTYPE html>
<html>
    <head>
        <title>Login and Register</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    </head>

    <body>
        <header>
            <a href="home.php" class="logo"><img class="logo" src="img/logo.png" ></a>
            <nav>
                <ul class="nav-links">
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="menu.php">Menu</a></li>
                    <li><a href="contact-us.php">Contact Us</a></li>
                </ul>
            </nav>            
            <a class="lgr" class="active" href="login.php"><button class="navbut">Log In / Register</button></a>
        </header>
        <main class="loginmain">
            <div class="container">
                <div class="link-container">
                    <a id="firstA" href="#" onclick="changeForm(0)">Login</a>
                    <a href="#" onclick="changeForm(1)">Register</a>
                </div>
                <form id="mainForm" action="">
                    <div class="login forms form-style">
                        <input onkeyup="usernamecheck()" type="text" id="username-input" class="inputs" placeholder="Username" />
                        <input onkeyup="passwordcheck()" type="password" id="password-input" class="inputs" placeholder="Password" />
                        <input id="submit" type="submit" class="inputs submit" value="Log In" onclick="validate(0)" />
                    </div>
                    <div class="register forms hidden">
                        <input onkeyup="emricheck()" type="text" id="emri-input" class="inputs" placeholder="Emri" />
                        <input onkeyup="mbiemricheck()" type="text" id="mbiemri-input" class="inputs" placeholder="Mbiemri" />
                        <input onkeyup="rusernamecheck()" type="text" id="rusername-input" class="inputs" placeholder="Username" />
                        <input onkeyup="rpasswordcheck()" type="password" id="rpassword-input" class="inputs" placeholder="Password" />
                        <input id="submit" type="submit" class="inputs submit" value="Register" onclick="validate(1)" />
                    </div>
                </form>
            </div>
        </main>
        <footer>
            
        </footer>


        <script src="javascript/login.js"></script>
    </body>
</html>