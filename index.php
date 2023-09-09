<?php
include './partials/menu.php';

include './partials/slider.php';

include './partials/social.php';

include './partials/header.php'
?>
<main>
    <div class="container">
        <section class="hero-section">
            <div class="hero-slider owl-carousel">
                <?php
                foreach ($slider as $key => $value) {
                    ?>

                    <!--Item start-->
                    <div class="hero-item">
                        <img src="<?php echo $value['image'] ?>" >
                        <div class="caption">
                            <h2><?php echo $value['title'] ?></h2>
                            <p>
                                <?php echo $value['sliderDesc'] ?>
                            </p>
                            <a class="btn" href="<?php echo $value['link'] ?>">Read More</a>
                        </div>
                    </div><!--Item end-->

                    <?php
                }

                
                ?>
        </section>


    </div>
    <div class="container">
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


<?php
include './partials/footer.php';
?>
