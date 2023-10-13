<?php
    get_header();
?>


<div>
    <div>This is index.php but is the archive page in wp</div>
    <?php
        if(have_posts()){
            while(have_posts( )){
            the_post();
            get_template_part('template-parts/content', 'archive');
            
            } 
        }

    ?>
</div>

<div>
    <?php
        the_posts_pagination();
    ?>


</div>


<?php
    get_footer();
?>

