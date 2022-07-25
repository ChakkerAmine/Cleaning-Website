<?php 

// Adding Theme FIles

function theme_files(){
    // js files 
    wp_enqueue_script('jquery','//code.jquery.com/jquery-3.4.1.min.js',array(),'1.0',true);
    wp_enqueue_script('Bootstrap','/stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js',array(),'1.0',true);
    wp_enqueue_script('easing',get_theme_file_uri('/lib/easing/easing.min.js'),array(),'1.0',true);
    wp_enqueue_script('waypoints',get_theme_file_uri('/lib/waypoints/waypoints.min.js'),array(),'1.0',true);
    wp_enqueue_script('counterup',get_theme_file_uri('/lib/counterup/counterup.min.js'),array(),'1.0',true);
    wp_enqueue_script('carousel',get_theme_file_uri('/lib/owlcarousel/owl.carousel.min.js'),array(),'1.0',true);
    wp_enqueue_script('isotope',get_theme_file_uri('/lib/isotope/isotope.pkgd.min.js'),array(),'1.0',true);
    wp_enqueue_script('easlightboxing',get_theme_file_uri('/lib/lightbox/js/lightbox.min.js'),array(),'1.0',true);
    wp_enqueue_script('validation',get_theme_file_uri('/mail/jqBootstrapValidation.min.js'),array(),'1.0',true);
    wp_enqueue_script('contact',get_theme_file_uri('/mail/contact.js'),array(),'1.0',true);
    wp_enqueue_script('main js',get_theme_file_uri('/js/main.js'),array(),'1.0',true);
    
    // css and link files 
    wp_enqueue_style('theme style',get_stylesheet_uri());
    wp_enqueue_style('gstatic','//fonts.gstatic.com');
    wp_enqueue_style('poppins font','//fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap');
    wp_enqueue_style('font Awesome','//cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css');
    wp_enqueue_style('carousel',get_theme_file_uri('/lib/owlcarousel/assets/owl.carousel.min.css'));
    wp_enqueue_style('lightbox',get_theme_file_uri('/lib/lightbox/css/lightbox.min.css'));
    wp_enqueue_style('style css',get_theme_file_uri('/css/style.css'));
    

}


add_action('wp_enqueue_scripts','theme_files');





// after setup theme

function clean_features(){
    // for the title 
    add_theme_support('title-tag');
    // for the menu suppot
    register_nav_menus( array(
        'primary_menu' => __( 'Primary Menu', 'text_domain' )
    ) );
}

add_action('after_setup_theme','clean_features');

// // Product Custom Post Type
// function product_init() {
//     // set up product labels
//     $labels = array(
//         'name' => 'Products',
//         'singular_name' => 'Product',
//         'add_new' => 'Add New Product',
//         'add_new_item' => 'Add New Product',
//         'edit_item' => 'Edit Product',
//         'new_item' => 'New Product',
//         'all_items' => 'All Products',
//         'view_item' => 'View Product',
//         'search_items' => 'Search Products',
//         'not_found' =>  'No Products Found',
//         'not_found_in_trash' => 'No Products found in Trash', 
//         'parent_item_colon' => '',
//         'menu_name' => 'Products',
//     );
    
//     // register post type
//     $args = array(
//         'labels' => $labels,
//         'public' => true,
//         'has_archive' => true,
//         'show_ui' => true,
//         'capability_type' => 'post',
//         'hierarchical' => false,
//         'rewrite' => array('slug' => 'product'),
//         'query_var' => true,
//         'menu_icon' => 'dashicons-randomize',
//         'supports' => array(
//             'title',
//             'editor',
//             'excerpt',
//             'trackbacks',
//             'custom-fields',
//             'comments',
//             'revisions',
//             'thumbnail',
//             'author',
//             'page-attributes'
//         )
//     );
//     register_post_type( 'product', $args );
    
//     // register taxonomy
//     register_taxonomy('product_category', 'product', array('hierarchical' => true, 'label' => 'Category', 'query_var' => true, 'rewrite' => array( 'slug' => 'product-category' )));
// }
// add_action( 'init', 'product_init' );

?>