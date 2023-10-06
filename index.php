<?php
    get_header();
?>


<div>
    <?php
        while(have_posts( )){
            the_post();
            ?>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <hr>
                <div class="target">TESTING CSS</div>

            <?php
        }
    ?>
</div>



<?php
    get_footer();
?>