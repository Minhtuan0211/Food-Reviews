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
            <h1>This is the header</h1>
            <div></div>
            <?php
            wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme' => 'primary',
                    'items_wrap' => '<ul class="menu_items" >%3$s</ul>',
                )
            )
            ?>
            
        </header>