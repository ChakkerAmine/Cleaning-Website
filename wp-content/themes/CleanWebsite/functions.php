<?php 

// Adding Theme FIles

function theme_files(){
    wp_enqueue_style('theme style',get_stylesheet_uri());
    wp_enqueue_style('gstatic','//fonts.gstatic.com');
    wp_enqueue_style('poppins font','//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
    wp_enqueue_style('font Awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('carousel',get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
    wp_enqueue_style('lightbox',get_theme_file_uri('/lib/lightbox/css/lightbox.min.css'));
    wp_enqueue_style('style css',get_theme_file_uri('/css/style.css'));
    

}


add_action('wp_enqueue_scripts','theme_files');
?>