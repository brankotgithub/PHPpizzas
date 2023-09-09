
<?php
include './partials/menu.php';

include './partials/products.php';

include './partials/header.php'
?>
<main>
    <div class="container">
        <section class="single-pizza">


<?php
// if is ID given
if (!isset($_GET['id'])) {
    ?>
                <h2>ERROR 404. Page don't exist</h2>
                <a href="/pizzas.php">Back to Pizzas</a>
    <?php
} else {

    // is KEY ID EXIST

    if (array_key_exists($_GET['id'], $pizzas)) {
        // DISPLAY PRODUCT

        $pizzas = $pizzas[$_GET['id']];
        ?>

                    <aside class="pizza-image">
                        <img src="/img/pizzas/<?php echo $pizzas['image']; ?>"> 
                    </aside>    
                    <article class="pizza-detail">
                        <h1 class="pizza-title"><?php echo $pizzas['name']; ?></h1>
                        <p class="pizza-description">
        <?php echo $pizzas['description']; ?>  
                        </p>
                        <div class="price">
                            <p><b>Size:</b><span class="size"> <?php echo $pizzas['size']['M']['radius']; ?></span> : <b class="price"><?php echo $pizzas['size']['M']['price']; ?></b> &euro;</p>
                            <p><b>Size:</b><span class="size"> <?php echo $pizzas['size']['L']['radius']; ?></span> : <b class="price"><?php echo $pizzas['size']['L']['price']; ?></b> &euro;</p>
                            <p><b>Size:</b><span class="size"> <?php echo $pizzas['size']['XL']['radius']; ?></span> : <b class="price"><?php echo $pizzas['size']['XL']['price']; ?></b> &euro;</p>
                        </div>
                        <p><b>Preparation time</b>: <span class="preparation-time"><?php echo $pizzas['preparationTime']; ?></span> min</p>
                        <p><b>Customer rate</b>: <span class="rate"><?php echo $pizzas['rating']; ?></span> <span class="fa fa-star"></span></p>

                    </article>




        <?php
    } else {

        //PRODUCT ID DON'T EXIST
        ?>
                    <h2>The Product with the given parameters does not exist. </h2>
                    <a href="/pizzas.php">Back to Pizzas</a>
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