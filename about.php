<?php
include './partials/menu.php';

include './partials/about.php';

include './partials/social.php';
?>

<?php
include './partials/header.php'
?>
<main>
    <div class="container">

        <section class="about-section">

<?php
foreach ($aboutSections as $key => $value) {
    // Cast $key to an integer and then check if it's even or odd.
    if (!$isEven = ((int) $key % 2 == 0)) {
        ?>
                    <aside class="about-image">
                        <img src="<?php echo $value['image'] ?>">
                    </aside>
                    <article class="about-info">
                        <h2><?php echo $value['title'] ?></h2>
                        <div class="about-info-data">
        <?php echo $value['fullText'] ?> 
                        </div>
                    </article>

        <?php
    } else {
        ?>

                    <article class="about-info">
                        <h2><?php echo $value['title'] ?></h2>
                        <div class="about-info-data">
        <?php echo $value['fullText'] ?> 
                        </div>
                    </article>
                    <aside class="about-image">
                        <img src="<?php echo $value['image'] ?>">
                    </aside>          
        <?php
    }
    ?>
    <br>
    <?php
}
?>




        </section>



    </div>
</main>



<?php
include './partials/footer.php';
?>
       



