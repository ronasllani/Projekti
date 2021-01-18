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
                <img src="img/about-us.jpg" class="home-foto" alt="">
            </div>
            <div class="main-title">
                <p class="main-text1">About Us</p>
            </div>

            <div class="aboutcontainer">
                <h3 class="abouttitulli">About Us</h3>
                <p class="aboutp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad magni blanditiis facere, tempora dignissimos consectetur fuga cumque sapiente ipsum ipsa. Similique reiciendis vero saepe suscipit non consequatur amet illo praesentium?</p>
                <p class="aboutp">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Rem qui necessitatibus minima nemo animi. Animi excepturi fugit, </p>
                <p class="aboutp">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam sapiente non maxime rem repellat ipsum dolorem ad exercitationem nam, est facilis. Cumque, totam! Tenetur natus possimus et quibusdam a molestiae!</p>
            </div>

            <div class="slidecontainer">
                
                <div class="mySlides">
                    <p class="sliderP">"Lorem ipsum, dolor sit amet consectetur adipisicing elit. Numquam sint enim quaerat nostrum itaque corporis id, tenetur repudiandae aliquid impedit distinctio."</p>
                    <h2 class="thenjaEmri">Ron Asllani</h2>
                    <p class="profesioni">Konsumator</p>
                </div>
                <div class="mySlides">
                    <p class="sliderP">"Ushqimet i punojme me shume delikatese dhe pasioni jone per ushqimin na bene me te miret ne rajon. Ju ftojme t'i provoni ushqimet tona."</p>
                    <h2 class="thenjaEmri">Filan Fisteku</h2>
                    <p class="profesioni">Kuzhinjer</p>
                </div>

                <div class="mySlides">
                    <p class="sliderP">"Lorem ipsum dolor sit amet consectetur, adipisicing elit. Delectus accusantium incidunt a. Sequi, esse maxime?"</p>
                    <h2 class="thenjaEmri">Enes Shabani</h2>
                    <p class="profesioni">Kamarier</p>
                </div>

                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="nr" onclick="currentSlide(1)">1</span> 
                <span class="nr" onclick="currentSlide(2)">2</span> 
                <span class="nr" onclick="currentSlide(3)">3</span> 
            </div>

        </main>

        <footer>
            <?php include ('./components/footer.php');?>    
        </footer>

        <script src="javascript/slider.js"></script>
    </body>
</html>