<?php
include './partials/menu.php';

include './partials/products.php';

include './partials/social.php';

include './partials/header.php'
?>
<main>

    <div class="container">
        <section class="pizzas">

            <?php
            if (empty($pizzas)) {
                echo "There are no products to show.";
            } else {

                foreach ($pizzas as $key => $value) {
                    ?>
                    <article class="pizza-item">
                        <a href="/single-pizza.php?id=<?php echo $key ?>">
                            <img src="/img/pizzas/<?php echo $value['image'] ?>">
                        </a>
                        <span class="favorite fa fa-heart-o"></span>
                        <div class="pizza-item-info">
                            <h3><?php echo $value['name'] ?></h3>

                            <div class="pizza-item-info-detail">
                                <p>
                                    <span class="icon fa fa-clock-o"></span>
                                    <span><?php echo $value['preparationTime'] ?></span>
                                </p>
                                <p>
                                    <span class="icon fa fa-star"></span>
                                    <span><?php echo $value['rating'] ?></span>
                                </p>
                            </div>

                        </div>            



                    </article>

                    <?php
                }
            }
            ?>


        </section>
    </div>
</main>


<?php
include './partials/footer.php';
?>