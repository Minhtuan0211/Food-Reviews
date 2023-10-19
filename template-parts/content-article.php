<div class="article-post">
    <header class="article-header">
        <h1><?php the_title(); ?></h1>

        <div class="article-elements-spacing">
            <?php the_date(); ?>
            <span><?php comments_number(); ?></span>
        </div>
        <div class="article-elements-spacing">
            <span>Tags:</span>
            <?php the_tags('<span class="article-tags">', '</span><span class="article-tags">', '</span>'); ?> 
        </div>
        
    </header>

    <?php
        the_content();
    ?>
</div>

<?php
    comments_template();
?>