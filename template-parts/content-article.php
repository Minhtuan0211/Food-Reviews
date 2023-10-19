<div>content-article.php working</div>
<header class="article-header">
    <span><?php the_title(); ?></span>
    <span><?php the_date(); ?></span>
    <?php the_tags('<span>', '</span><span>', '</span>'); ?>
    <span><?php comments_number(); ?></span>
</header>

<?php
    the_content();
?>
<?php
    comments_template();
?>