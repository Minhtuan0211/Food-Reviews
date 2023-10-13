<div>content archive.php working</div>
<div>
    <!-- black border added in style.css -->
    <img class="testing" src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
</div>

<div>
    <a href="<?php the_permalink(); ?>" >
        <?php
            the_title();
        ?>
    </a>
</div>
<div>
    <?php
        the_date();
    ?>
</div>

<div>
    <?php
        comments_number();
    ?>
</div>

<?php
    the_excerpt();
?>

<h2>
    <a href="<?php the_permalink(); ?>" >Read more</a>
</h2>