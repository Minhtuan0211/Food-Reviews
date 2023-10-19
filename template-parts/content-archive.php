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
            <a href="<?php the_permalink(); ?>" >
                <?php
                    the_title('<h3>', '</h3>');
                ?>
            </a>
        <div class="posts-info-data">
            <p>
                <?php
                    echo get_the_date();
                ?>
            </p>
            <p>
                <?php
                    comments_number();
                ?>
            </p> 
        </div>
       
        <p class="posts-info-excerpt">
            <?php
                the_excerpt();
            ?>  
        </p>
    </div>
    
</div>
