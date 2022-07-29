<?php 

function cleaning_post_types(){
    $args   = array(
        'supports' => array('title','editor','thumbnail'),
        'public' => true,
        'has_archive' => true,
        'labels'=> array(
            'name' => 'Projects',
            'singular_name' => 'Project',
            'add_new' => 'Add New Project',
            'add_new_item' => 'Add New Project',
            'edit_item' => 'Edit Project',
            'new_item' => 'New Project',
            'all_items' => 'All Projects',
            'view_item' => 'View Project',
            'search_items' => 'Search Projects',
            'not_found' =>  'No Projects Found',
            'not_found_in_trash' => 'No Projects found in Trash', 
            'parent_item_colon' => '',
            'menu_name' => 'Projects',
        ),
        'menu_icon' => 'dashicons-plus-alt2'
    );
    register_post_type('project',$args);
}
add_action('init','cleaning_post_types');

?>