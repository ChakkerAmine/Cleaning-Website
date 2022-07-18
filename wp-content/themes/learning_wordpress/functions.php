<?php 

function theme_files(){
    wp_enqueue_style('main style',get_stylesheet_uri());
    wp_enqueue_style('font1','https://fonts.googleapis.com');
    wp_enqueue_style('font2','https://fonts.gstatic.com');
    wp_enqueue_style('font3','https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;500&display=swap');
    

}
add_action('wp_enqueue_scripts','theme_files');

?>