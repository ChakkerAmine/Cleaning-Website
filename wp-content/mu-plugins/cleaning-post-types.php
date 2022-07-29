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



    // Team Custom Post type 
    $args   = array(
        'supports' => array('title','editor','thumbnail'),
        'public' => true,
        'has_archive' => true,
        'labels'=> array(
            'name' => 'Teams',
            'singular_name' => 'team',
            'add_new' => 'Add New Member',
            'add_new_item' => 'Add New Member',
            'edit_item' => 'Edit Member',
            'new_item' => 'New Member',
            'all_items' => 'All Member',
            'view_item' => 'View Member',
            'search_items' => 'Search for a Member',
            'not_found' =>  'No one Found',
            'not_found_in_trash' => 'No one found in Trash', 
            'parent_item_colon' => '',
            'menu_name' => 'Our Team',
        ),
        'menu_icon' => 'dashicons-admin-users'
    );
    register_post_type('team',$args);
}
add_action('init','cleaning_post_types');

?>