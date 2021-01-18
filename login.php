<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, height=device-height, initial-scale=1" name="viewport">
        <?php include ('activenav.php');?>
        <title>Login and Register</title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">

    </head>

    <body>
        <header>
            <?php include ('./components/header.php');?>    
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