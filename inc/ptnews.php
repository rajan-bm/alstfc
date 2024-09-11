<?php

// Change dashboard Posts to News
add_action( 'init', 'cp_change_post_object' );
function cp_change_post_object() {
    $get_post_type = get_post_type_object('post');
    $labels = $get_post_type->labels;
    $labels->name = 'ニュース';
    $labels->singular_name = 'ニュース';
    $labels->add_new = '新規ニュース追加';
    $labels->add_new_item = '新規ニュース追加';
    $labels->edit_item = 'ニュース編集';
    $labels->new_item = '新規ニュース';
    $labels->view_item = 'ニュースを見る';
    $labels->search_items = 'ニュースを検索';
    $labels->not_found = 'ニュースはありません';
    $labels->all_items = '全てのニュース';
    $labels->menu_name = 'ニュース';
    $labels->not_found_in_trash = 'ゴミ箱内にニュースが見つかりませんでした。';
    $labels->name_admin_bar = 'ニュース';
}

// remove tags 
add_action( 'init', 'my_register_post_tags' );

function my_register_post_tags() {
    register_taxonomy( 'post_tag', array( 'my_post_type_here' ) );
}