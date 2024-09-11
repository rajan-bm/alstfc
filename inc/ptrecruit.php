<?php

// Recruit
add_action('init', 'recruit_register_post_type');
function recruit_register_post_type() {
    register_post_type('recruit', array(
        'labels' => array(
           'name' => '採用情報',
           'add_new' => '新規採用情報を追加',
           'edit_item' => '採用情報を編集',
           'new_item' => '新規採用情報',
           'view_item' => '採用情報を見る',
           'search_items' => '採用情報を検索',
           'not_found' => ' 採用情報はありません。',
           'not_found_in_trash' => 'ゴミ箱に採用情報はありません。',
           'add_new_item' => '新規採用情報を追加',
        ),
       'public' => false,
		'publicly_queryable' => true, 
		'show_ui' => true, 
		'exclude_from_search' => true,
        'supports' => array(
           'title',
           // 'thumbnail',
        //    'editor'
           // 'excerpt'     
        ),
        'menu_position' => 5,
        'has_archive' => false,
        'menu_icon' => 'dashicons-universal-access-alt',
    ));
}