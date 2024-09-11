<?php

// Works
add_action('init', 'works_register_post_type');
function works_register_post_type() {
    register_post_type('works', array(
        'labels' => array(
           'name' => '施工事例',
           'add_new' => '新規施工事例を追加',
           'edit_item' => '施工事例を編集',
           'new_item' => '新規施工事例',
           'view_item' => '施工事例を見る',
           'search_items' => '施工事例を検索',
           'not_found' => '施工事例はありません',
           'not_found_in_trash' => 'ゴミ箱内に施工事例が見つかりませんでした。',
           'add_new_item' => '新規施工事例を追加',
        ),
        'public' => true,
        'supports' => array(
           'title',
           'thumbnail',
           'editor'
           // 'excerpt'     
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-welcome-write-blog',
    ));
}
// <------ Works Category ------->
add_action( 'init', 'create_works_category', 0 );
function create_works_category() {
   $labels = array(
       'name'              => _x( 'カテゴリー', 'カテゴリー', 'semba' ),
       'singular_name'     => _x( 'カテゴリー', 'カテゴリー', 'semba' ),
	     'has_archive'	     => 'works',
//        'search_items'      => __( 'Search Category', 'semba' ),  
//        'all_items'         => __( 'All Categories', 'semba' ),
//        'parent_item'       => __( 'Parent Category', 'semba' ),
//        'parent_item_colon' => __( 'Parent Category:', 'semba' ),
//        'edit_item'         => __( 'Edit Category', 'semba' ),
//        'update_item'       => __( 'Update Category', 'semba' ),
//        'add_new_item'      => __( 'Add New Category', 'semba' ),
//        'new_item_name'     => __( 'New Category Name', 'semba' ),
//        'menu_name'         => __( 'Category', 'semba' ),
   );
   $args = array(
       'hierarchical'      => true,
       'labels'            => $labels,
       'show_ui'           => true,
       'show_admin_column' => true,
       'query_var'         => true,
       'rewrite'           => array( 'slug' => 'works/category' ),
   );
   register_taxonomy( 'works_category', array( 'works' ), $args );
}