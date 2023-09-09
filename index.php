<?php 

    $menu = array(
        "index" => "Home",
        "about" => "About Us",
        "pizzas" => "Pizzas",
        "contact" => "Contact"
    );

    $slider = array(
        
        "1" => array(
            "image"       => "img/hero/slide-01.jpg",
            "title"       => "Traditional preparation",
            "sliderDesc"  => "The food preparation process in our restaurants takes place in front of your eyes,
                              and the unique combination of ever-fresh ingredients ensures that all our customers are
                              satisfied.",
            "link"        => "/about.php#preparation"
        ),
        "2"=>array(
            "image"       => "img/hero/slide-02.jpg",
            "title"       => "Best Quality",
            "sliderDesc"  => "All ingredients used in our products undergo very detailed and strict safety analyses and
                            inspection checks.",
            "link"        => "/about.php#quality"
        ),
        "3"=>array(
            "image"       => "img/hero/slide-03.jpg",
            "title"       => "Apsolytely fresh",
            "sliderDesc"  => "It is our wish not to sell a product which is not absolutely fresh.
                                Our pizza is served right out of the oven.",
            "link"        => "/about.php#fresh"
        )
    );


    $homepageAbout = array(
            "image"       => "img/about.jpg",
            "title"       => "Our Story",
            "aboutDesc"  => "We started as a small family business so that nowadays,
                             20 years since our establishment,
                             we could stand proudly in front of 14 PIZZAS pizza outlets in Serbia... ",
            "link"        => "/about.php"
    );


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
        <link href="./css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="./css/theme.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        
        
        <header>
            <div class="container">
                
                <a href="#" class="logo">
                    <img src="img/logo.png" alt=""/>
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
                <section class="hero-section">
                    <div class="hero-slider owl-carousel">
                        <!--Item start-->
                        <div class="hero-item">
                            <img src="img/hero/slide-01.jpg" alt="">
                            <div class="caption">
                                <h2>Traditional preparation</h2>
                                <p>
                                 The food preparation process in our restaurants takes place in front of your eyes,
                                 and the unique combination of ever-fresh ingredients ensures that all our customers are satisfied.
                                </p>
                                <a class="btn" href="/about.php#preparation">Read More</a>
                            </div>
                        </div><!--Item end-->
                        
                        <!--Item start-->
                        <div class="hero-item">
                            <img src="img/hero/slide-02.jpg" alt="">
                            <div class="caption">
                                <h2>Best Quality</h2>
                                <p>
                                All ingredients used in our products undergo very detailed and strict safety analyses and inspection checks.
                                </p>
                                <a class="btn" href="/about.php#quality">Read More</a>
                            </div>
                        </div><!--Item end-->
                        
                        <!--Item start-->
                        <div class="hero-item">
                            <img src="img/hero/slide-03.jpg" alt="">
                            <div class="caption">
                                <h2>Apsolytely fresh</h2>
                                <p>
                                It is our wish not to sell a product which is not absolutely fresh. 
                                Our pizza is served right out of the oven.
                                </p>
                                <a class="btn" href="/about.php#fresh">Read More</a>
                            </div>
                        </div><!--Item end-->
                        
                    </div><!--.hero-slider end-->
                </section><!--.hero-section end-->
                
                <section class="about-section">
                    <aside class="about-image">
                        <img src="img/about.jpg" alt="">
                    </aside>
                    <article class="about-info">
                        <h2>Our Story</h2>
                        <p>
                            We started as a small family business so that nowadays, 20 years since our establishment,
                            we could stand proudly in front of 14 PIZZAS pizza outlets in Serbia... 
                        </p>
                        <a href="/about.php" class="btn">Read More</a>
                    </article>
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
