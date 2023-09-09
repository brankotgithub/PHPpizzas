
<?php 

$menu = array(
    "index" => "Home",
    "about" => "About Us",
    "pizzas" => "Pizzas",
    "contact" => "Contact"
);

$pizzas = array(
    "1" => array(
        "name"=>"Margarita",
        "description"=>" Sometimes you just can’t beat fresh, simple, and classic Margarita Pizza. ",
        "image" => "margarita.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 5
            ),
            "L" => array(
                "radius" => 32,
                "price" => 8
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 10
            ),

        ),
        "favorite"=> false,
        "preparationTime" => 15,
        "rating"=> 5.00
    ),
    "2" => array(
        "name"=>"Vege",
        "description"=>" A wonderful crust layered with herbed tomato sauce and toppings encourages my family of six to dig right in to this low-fat main course.",
        "image" => "vege.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 5
            ),
            "L" => array(
                "radius" => 32,
                "price" => 8
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 10
            ),

        ),
        "favorite"=> true,
        "preparationTime" => 15,
        "rating"=> 4.80
    ),
    "3" => array(
        "name"=>"Capricciosa",
        "description"=>" Pizza capricciosa is a style of pizza in Italian cuisine prepared with mozzarella cheese, Italian baked ham, mushroom, artichoke and tomato. ",
        "image" => "capricciosa.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 6
            ),
            "L" => array(
                "radius" => 32,
                "price" => 9
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 12
            ),
        ),
        "favorite"=> false,
        "preparationTime" => 13,
        "rating"=> 5.00
    ),
    "4" => array(
        "name"=>"Supreme",
        "description"=>" it's the highlight of my favorite casual meal. ",
        "image" => "supreme.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 6
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 12
            ),
        ),
        "favorite"=> true,
        "preparationTime" => 10,
        "rating"=> 5.00
    ),
    "5" => array(
        "name"=>"Venezia",
        "description"=>" Delicious Pizza ",
        "image" => "venezia.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 6
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 12
            ),
        ),
        "favorite"=> false,
        "preparationTime" => 12,
        "rating"=> 4.50
    ),
    "6" => array(
        "name"=>"Mexico",
        "description"=>" Mexican Pizzas are delicious corn tortillas topped with beans, beef and all the delicious taco toppings you can imagine!  ",
        "image" => "mexico.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 7
            ),
            "L" => array(
                "radius" => 32,
                "price" => 11
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 14
            ),
        ),
        "favorite"=> false,
        "preparationTime" => 10,
        "rating"=> 5.00
    ),
    "7" => array(
        "name"=>"Bergamo",
        "description"=>" Taste of Bergamo.  ",
        "image" => "bergamo.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 7
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 13
            ),
        ),
        "favorite"=> false,
        "preparationTime" => 15,
        "rating"=> 5.00
    ),
    "8" => array(
        "name"=>"Romana",
        "description"=>" Pizza Romana is made using a completely different technique, resulting in a very different-looking and tasting pie.  ",
        "image" => "romana.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 7
            ),
            "L" => array(
                "radius" => 32,
                "price" => 10
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 13
            ),
        ),
        "favorite"=> false,
        "preparationTime" => 14,
        "rating"=> 5.00
    ),
    "9" => array(
        "name"=>"Quattro stagioni",
        "description"=>" Pizza quattro stagioni (four seasons pizza) is a variety of pizza in Italian cuisine that is prepared in four sections with diverse ingredients, with each section representing one season of the year.  ",
        "image" => "quattro-stagioni.jpg",
        "size" => array(
            "M" => array(
                "radius" => 27,
                "price" => 9
            ),
            "L" => array(
                "radius" => 32,
                "price" => 13
            ),
            "XL" => array(
                "radius" => 42,
                "price" => 20
            ),
        ),
        "favorite"=> true,
        "preparationTime" => 15,
        "rating"=> 5.00
    ),
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
            <section class="single-pizza">
                <aside class="pizza-image">
                    <img src='./img/pizzas/venezia.jpg'>
                </aside>
                <article class="pizza-detail">
                    <h1 class="pizza-title">Margarita</h1>
                    <p class="pizza-description">
                        Sometimes you just can’t beat fresh, simple, and classic Margarita Pizza.  
                    </p>
                    <div class="price">
                        <p><b>Size:</b><span class="size"> M (27cm)</span> : <b class="price">5</b> &euro;</p>
                        <p><b>Size:</b><span class="size"> L (32cm)</span> : <b class="price">8</b> &euro;</p>
                        <p><b>Size:</b><span class="size"> XL (42cm)</span> : <b class="price">10</b> &euro;</p>
                    </div>
                    <p><b>Preparation time</b>: <span class="preparation-time">15</span> min</p>
                    <p><b>Customer rate</b>: <span class="rate">5</span> <span class="fa fa-star"></span></p>

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
