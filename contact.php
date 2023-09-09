<?php 
    $menu = array(
        "index"   => "Home",
        "about"   => "About Us",
        "pizzas"  => "Pizzas",
        "contact" => "Contact"
    );

    
    $contactMap = "https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11318.167161915662!2d20.401398768671488!3d44.83089868349649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65757fb66f99%3A0x627e7ccd2003ea06!2z0JHRg9C70LXQstCw0YAg0JzQuNGF0LDRmNC70LAg0J_Rg9C_0LjQvdCwIDE4MSwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1592227106143!5m2!1ssr!2srs";
    
    
    $social = array(
        "1" => array(
            "icon" => "fa-facebook-f",
            "link" => "https://www.facebook.com/CubesSchool"
        ),
        "2" => array(
            "icon" => "fa-instagram",
            "link" => "https://www.instagram.com/cubesschool/"
        )
    );
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>

<head>
    <meta charset="UTF-8">
    <title>Pizzas</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="./css/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="./css/theme.css" rel="stylesheet" type="text/css" />
</head>

<body>


    <header>
        <div class="container">

            <a href="#" class="logo">
                <img src="img/logo.png" alt="" />
            </a>
            <nav class="navigation">
                <ul class="menu">
                    <li>
                        <a href="/index.php">Home</a>
                    </li>
                    <li>
                        <a href="/about.php">About Us</a>
                    </li>
                    <li>
                        <a href="/pizzas.php">Pizzas</a>
                    </li>
                    <li>
                        <a href="/contact.php">Contact</a>
                    </li>
                </ul>
            </nav>

        </div>
    </header>
    <main>
        <div class="container">
            <section class="contact-section">
                <aside class="form-wrapper">
                    <form method="POST" action="" class="contact-form">
                        <div class="form-group">
                            <label for='name'>Your Name*</label>
                            <input type="text" name="name" id='name' value="" class="form-control" />
                            <div class="error-wrapper"></div>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email*</label>
                            <input type="email" name="email" id="email" value="" class="form-control" />
                            <div class="error-wrapper"></div>
                        </div>
                        <div class="form-group">
                            <label for="message">Your Message*</label>
                            <textarea name="message" id='message' value='' class="form-control" rows="7"></textarea>
                            <div class="error-wrapper"></div>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="send" value="contact" class="btn">Send Message</button>
                        </div>
                    </form>

                    <!--
                        <div class="error-wrapper">

                        </div>
                        <div class="success-wrapper">
                            
                        </div>

                    -->
                </aside>

                <div class="contact-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11318.167161915662!2d20.401398768671488!3d44.83089868349649!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x475a65757fb66f99%3A0x627e7ccd2003ea06!2z0JHRg9C70LXQstCw0YAg0JzQuNGF0LDRmNC70LAg0J_Rg9C_0LjQvdCwIDE4MSwg0JHQtdC-0LPRgNCw0LQ!5e0!3m2!1ssr!2srs!4v1592227106143!5m2!1ssr!2srs"></iframe>
                </div>
            </section>
        </div>
    </main>


    <footer>
        <div class="container">
            <p>&copy; All right reserved. <a href="https://cubes.edu.rs">Cubes Scholl</a></p>
            <nav class="social">
                <a href="https://www.facebook.com/CubesSchool" class="fa fa-facebook-f" target="_blank"></a>
                <a href="https://www.instagram.com/cubesschool/" class="fa fa-instagram" target="_blank"></a>
            </nav>
        </div>
    </footer>


    <script src="./js/jquery.js" type="text/javascript"></script>
    <script src="./js/owl.carousel.js" type="text/javascript"></script>
    <script src="./js/main.js" type="text/javascript"></script>

</body>

</html>