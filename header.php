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
        <header id="page_header">
            <!-- <?php
                dynamic_sidebar('sidebar-1')
            ?> -->
      

          
            <nav class="navbar navbar-expand-lg bg-light">
                <div class="container-fluid">
                    <?php
                    if(function_exists('the_custom_logo')){
                        $custom_logo_id = get_theme_mod('custom_logo');
                        $logo = wp_get_attachment_image_src($custom_logo_id);
                    }
                    ?>
                    <img src="<?php echo $logo[0] ?>" alt="logo" />
                    <a class="navbar-brand" href="#">Food Reviews</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <?php
                            wp_nav_menu(
                                array(
                                    'menu' => 'primary',
                                    'container' => '',
                                    'theme' => 'primary',
                                    'items_wrap' => '<ul class="navbar-nav me-auto mb-2 mb-lg-0" >%3$s</ul>',
                                    'add_a_class'     => 'nav-link active',
                                )
                            )
                        ?>
                    </ul>
                    
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                    </div>
                </div>
            </nav>
        </header>