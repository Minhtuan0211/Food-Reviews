<div>content archive.php working</div>

<div class="archive-posts-container">

    <div class="posts-img">
        <?php
            if( ! has_post_thumbnail() == 1){
                $thumbnail_size = wp_get_registered_image_subsizes();
                $width = $thumbnail_size['thumbnail']['width'];
                $height = $thumbnail_size['thumbnail']['height'];
                ?>
                    <div class="posts-img-temp" style="height:<?php echo $height; ?>px;width:<?php echo $width?>px"></div> 
                <?php
            } else {
                ?>
                    <img  src="<?php the_post_thumbnail_url('thumbnail'); ?>" />
                <?php
            }
        ?>
    </div>

    <div class="posts-info">
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
    </div>
    
</div>
