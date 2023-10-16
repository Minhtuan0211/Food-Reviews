<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <?php
        wp_head();

    ?>
    <body>
        <header id="page-header">
            <!-- <?php
                dynamic_sidebar('sidebar-1')
            ?> -->
            <div class="header-title">
                <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                ?>
                <img src="<?php echo $logo[0] ?>" alt="logo" />
                <h2>Food reviews</h2>
            </div>
            
            <?php
                wp_nav_menu(
                    array(
                        'menu' => 'primary',
                        'container' => '',
                        'theme' => 'primary',
                        'items_wrap' => '<ul class="menu-list">%3$s</ul>',
                    )
                )
            ?>
    
        </header>