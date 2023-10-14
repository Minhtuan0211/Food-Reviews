<?php
    get_header();
?>


<article>
    <div>archive.php working</div>
    <?php
        if(have_posts()){
            while(have_posts( )){
            the_post();
            get_template_part('template-parts/content', 'archive');
            } 
        }

    ?>
</article>



<?php
    get_footer();
?>