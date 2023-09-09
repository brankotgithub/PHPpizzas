<?php 

    $menu = array(
        "index" => "Home",
        "about" => "About Us",
        "pizzas" => "Pizzas",
        "contact" => "Contact"
    );

    $aboutSections = array(
        "about" => array(
            "image"     => "img/about.jpg",
            "title"     => "Our Story",
            "fullText"  => "<p>
                                We started as a small family business so that nowadays, 20 years since our establishment,
                                we could stand proudly in front of 14 PIZZAS pizza outlets in Serbia.
                                </p>
                                <p>
                                Cras sed nibh id magna consequat vulputate ut eu leo. Mauris pulvinar suscipit commodo.
                                Aenean ac est lorem. Mauris pharetra felis id nibh semper, eget bibendum urna ornare.
                                Aliquam odio augue, viverra a urna eget, aliquet posuere elit. Duis at sodales quam.
                                Sed pulvinar nunc nec tempor tristique. Pellentesque et neque eros.
                                Aenean ultrices euismod lacus ut maximus.
                            </p>"          
        ),
        "preparation" => array(
            "image"     => "img/hero/slide-01.jpg",
            "title"     => "Traditional preparation",
            "fullText"  => "<p>
                                The food preparation process in our restaurants takes place in front of your eyes,
                                and the unique combination of ever-fresh ingredients ensures that all our customers are
                                satisfied.
                            </p>
                            <p>
                                It is a long established fact that a reader will be distracted by the readable
                                content of a page when looking at its layout. The point of using Lorem Ipsum
                                is that it has a more-or-less normal distribution of letters,
                                as opposed to using 'Content here, content here', making it look like readable English.
                            </p>"
        ),
        'quality'=>array(
            "image"     => "img/hero/slide-02.jpg",
            "title"     => "Best Quality",
            "fullText"  => "<p>
                                All ingredients used in our products undergo very detailed and strict safety analyses and
                                inspection checks.
                            </p>
                            <p>
                                Contrary to popular belief, Lorem Ipsum is not simply random text.
                                It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                                old.
                            </p>"
        ),
        'fresh'=>array(
            "image"     => "img/hero/slide-03.jpg",
            "title"     => "Apsolytely fresh",
            "fullText"  => "<p>
                                It is our wish not to sell a product which is not absolutely fresh.
                                Our pizza is served right out of the oven.
                            </p>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>"
        )
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

            <section class="about-section">
                <aside class="about-image">
                    <img src="img/about.jpg" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title">Our Story</h2>
                    <div class="about-info-data">
                        <p>
                            We started as a small family business so that nowadays, 20 years since our establishment,
                            we could stand proudly in front of 14 PIZZAS pizza outlets in Serbia.
                        </p>
                        <p>
                            Cras sed nibh id magna consequat vulputate ut eu leo. Mauris pulvinar suscipit commodo.
                            Aenean ac est lorem. Mauris pharetra felis id nibh semper, eget bibendum urna ornare.
                            Aliquam odio augue, viverra a urna eget, aliquet posuere elit. Duis at sodales quam.
                            Sed pulvinar nunc nec tempor tristique. Pellentesque et neque eros.
                            Aenean ultrices euismod lacus ut maximus.
                        </p>
                    </div>
                </article>
            </section>
            <section class="about-section" id="preparation">
                <article class="about-info">
                    <h2 class="section-title">Traditional preparation</h2>
                    <div class="about-info-data">
                        <p>
                            The food preparation process in our restaurants takes place in front of your eyes,
                            and the unique combination of ever-fresh ingredients ensures that all our customers are
                            satisfied.
                        </p>
                        <p>
                            It is a long established fact that a reader will be distracted by the readable
                            content of a page when looking at its layout. The point of using Lorem Ipsum
                            is that it has a more-or-less normal distribution of letters,
                            as opposed to using 'Content here, content here', making it look like readable English.
                        </p>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="img/hero/slide-01.jpg" alt="">
                </aside>
            </section>
            <section class="about-section" id="quality">
                <aside class="about-image">
                    <img src="img/hero/slide-02.jpg" alt="">
                </aside>
                <article class="about-info">
                    <h2 class="section-title">Best Quality</h2>
                    <div class="about-info-data">
                        <p>
                            All ingredients used in our products undergo very detailed and strict safety analyses and
                            inspection checks.
                        </p>
                        <p>
                            Contrary to popular belief, Lorem Ipsum is not simply random text.
                            It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years
                            old.
                        </p>
                    </div>
                </article>

            </section>
            <section class="about-section" id="fresh">
                <article class="about-info">
                    <div class="about-info-data">
                        <h2 class="section-title">Apsolytely fresh</h2>
                        <div class="about-info-data">
                            <p>
                                It is our wish not to sell a product which is not absolutely fresh.
                                Our pizza is served right out of the oven.
                            </p>
                            <p>
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen book.
                                It has survived not only five centuries, but also the leap into electronic typesetting,
                                remaining essentially unchanged. It was popularised in the 1960s with the release of
                                Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                                software like Aldus PageMaker including versions of Lorem Ipsum.
                            </p>
                        </div>
                    </div>
                </article>
                <aside class="about-image">
                    <img src="img/hero/slide-03.jpg" alt="">
                </aside>
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