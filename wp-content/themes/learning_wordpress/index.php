<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head(); ?>
</head>
<body>
<?php 

if(have_posts()){
    
    while(have_posts()){
        the_post();
        ?>
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
        <hr>
        <?php
    }


}else{
    _e('Sorry. no content available!','textdomain');
}


?>
</body>
</html>