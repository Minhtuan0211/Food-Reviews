<?php
    get_header();
?>


<div>
    <?php
        if(have_posts()){
            while(have_posts( )){
            the_post();
            ?>
                <h2 class="testing"><?php the_title(); ?></h2>
                <?php the_content(); ?>
                <hr>
            <?php
            } 
        }

    ?>
</div>



<?php
    get_footer();
?>