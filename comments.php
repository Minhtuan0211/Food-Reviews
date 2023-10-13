<h1>comments.php working</h1>

<?php
    if (!have_comments()){
        echo "Leave a comment";
    } else{
        echo get_comments_number(). " Comments";
    }
?>

<div class="comments_box">
    <?php
        wp_list_comments(
            array(
                'avatar_size'=> 120,
                'style' => 'div'
            )
            
        )
        
    ?>
</div>

<?php
    if(comments_open() ){
        comment_form(
            array(
                'class_form'=> '',
                'title_reply_before' => '<h2 id="reply-title">',
                'title_reply_after' => '</h2>',
            )
        );
    }
?>