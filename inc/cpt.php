<?php /**
 * 
 * Inc Part: To register custom posttypes and taxonomies
 * 
 */
/*-----------------------------------------------------------------
------------------------------ Northen Store --------------------------------
-----------------------------------------------------------------*/
function northen_store_register_post_type() {
    $labels = array(
        'name'                  => __('北部店舗', '北部店舗'),
        'singular_name'         => __('Northen Store', '北部店舗'),
        'add_new'               => __('Add New', '新規追加'),
        'add_new_item'          => __('Add New Northen Store', '新しい北部店舗を追加'),
        'edit_item'             => __('Edit Northen Store', '北部店舗を編集'),
        'new_item'              => __('New Northen Store', '新しい北部店舗'),
        'view_item'             => __('View Northen Store', '北部店舗を見る'),
        'search_items'          => __('Search Northen Store', '北部店舗を検索'),
        'not_found'             => __('No Northen Store found', '北部店舗が見つかりません'),
        'not_found_in_trash'    => __('No Northen Store found in Trash', 'ゴミ箱に北部店舗が見つかりません'),
        'all_items'             => __('All Northen Store', '全ての北部店舗'),
        'archives'              => __('Northen Store Archives', '北部店舗アーカイブ'),
        'attributes'            => __('Northen Store Attributes', '北部店舗の属性'),
        'insert_into_item'      => __('Insert into Northen Store', '北部店舗に挿入'),
        'uploaded_to_this_item' => __('Uploaded to this Northen Store', 'この北部店舗にアップロード'),
        'featured_image'        => __('Featured Image', 'アイキャッチ画像'),
        'set_featured_image'    => __('Set featured image', 'アイキャッチ画像を設定'),
        'remove_featured_image' => __('Remove featured image', 'アイキャッチ画像を削除'),
        'use_featured_image'    => __('Use as featured image', 'アイキャッチ画像として使用'),
        'menu_name'             => __('Northen Store', '北部店舗'),
        'filter_items_list'     => __('Filter Northen Store list', '北部店舗リストを絞り込み'),
        'items_list_navigation' => __('Northen Store list navigation', '北部店舗リストナビゲーション'),
        'items_list'            => __('Northen Store list', '北部店舗リスト'),
    );

    register_post_type('northen_store', array(
        'labels' => $labels,
        'supports' => array(
           'title', 
           'thumbnail',
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'public' => true,  // it's not public, it shouldn't have its own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
    ));
}
add_action('init', 'northen_store_register_post_type');


// /*-----------------------------------------------------------------
// ------------------------------ Chubu Store --------------------------------
// -----------------------------------------------------------------*/
function chubu_store_register_post_type() {
    $labels = array(
        'name'                  => __('中部店舗', '中部店舗'),
        'singular_name'         => __('Chubu Store', '中部店舗'),
        'add_new'               => __('Add New', '新規追加'),
        'add_new_item'          => __('Add New Chubu Store', '新しい中部店舗を追加'),
        'edit_item'             => __('Edit Chubu Store', '中部店舗を編集'),
        'new_item'              => __('New Chubu Store', '新しい中部店舗'),
        'view_item'             => __('View Chubu Store', '中部店舗を見る'),
        'search_items'          => __('Search Chubu Store', '中部店舗を検索'),
        'not_found'             => __('No Chubu Store found', '中部店舗が見つかりません'),
        'not_found_in_trash'    => __('No Chubu Store found in Trash', 'ゴミ箱に中部店舗が見つかりません'),
        'all_items'             => __('All Chubu Store', '全ての中部店舗'),
        'archives'              => __('Chubu Store Archives', '中部店舗アーカイブ'),
        'attributes'            => __('Chubu Store Attributes', '中部店舗の属性'),
        'insert_into_item'      => __('Insert into Chubu Store', '中部店舗に挿入'),
        'uploaded_to_this_item' => __('Uploaded to this Chubu Store', 'この中部店舗にアップロード'),
        'featured_image'        => __('Featured Image', 'アイキャッチ画像'),
        'set_featured_image'    => __('Set featured image', 'アイキャッチ画像を設定'),
        'remove_featured_image' => __('Remove featured image', 'アイキャッチ画像を削除'),
        'use_featured_image'    => __('Use as featured image', 'アイキャッチ画像として使用'),
        'menu_name'             => __('Chubu Store', '中部店舗'),
        'filter_items_list'     => __('Filter Chubu Store list', '中部店舗リストを絞り込み'),
        'items_list_navigation' => __('Chubu Store list navigation', '中部店舗リストナビゲーション'),
        'items_list'            => __('Chubu Store list', '中部店舗リスト'),
    );

    register_post_type('chubu_store', array(
        'labels' => $labels,
        'supports' => array(
           'title', 
           'thumbnail',
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'public' => true,  // it's not public, it shouldn't have its own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
    ));
}
add_action('init', 'chubu_store_register_post_type');


/*-----------------------------------------------------------------
------------------------------ Southern Store --------------------------------
-----------------------------------------------------------------*/
function southern_store_register_post_type() {
    $labels = array(
        'name'                  => __('南部店舗', '南部店舗'),
        'singular_name'         => __('Southern Store', '南部店舗'),
        'add_new'               => __('Add New', '新規追加'),
        'add_new_item'          => __('Add New Southern Store', '新しい南部店舗を追加'),
        'edit_item'             => __('Edit Southern Store', '南部店舗を編集'),
        'new_item'              => __('New Southern Store', '新しい南部店舗'),
        'view_item'             => __('View Southern Store', '南部店舗を見る'),
        'search_items'          => __('Search Southern Store', '南部店舗を検索'),
        'not_found'             => __('No Southern Store found', '南部店舗が見つかりません'),
        'not_found_in_trash'    => __('No Southern Store found in Trash', 'ゴミ箱に南部店舗が見つかりません'),
        'all_items'             => __('All Southern Store', '全ての南部店舗'),
        'archives'              => __('Southern Store Archives', '南部店舗アーカイブ'),
        'attributes'            => __('Southern Store Attributes', '南部店舗の属性'),
        'insert_into_item'      => __('Insert into Southern Store', '南部店舗に挿入'),
        'uploaded_to_this_item' => __('Uploaded to this Southern Store', 'この南部店舗にアップロード'),
        'featured_image'        => __('Featured Image', 'アイキャッチ画像'),
        'set_featured_image'    => __('Set featured image', 'アイキャッチ画像を設定'),
        'remove_featured_image' => __('Remove featured image', 'アイキャッチ画像を削除'),
        'use_featured_image'    => __('Use as featured image', 'アイキャッチ画像として使用'),
        'menu_name'             => __('Southern Store', '南部店舗'),
        'filter_items_list'     => __('Filter Southern Store list', '南部店舗リストを絞り込み'),
        'items_list_navigation' => __('Southern Store list navigation', '南部店舗リストナビゲーション'),
        'items_list'            => __('Southern Store list', '南部店舗リスト'),
    );

    register_post_type('southern_store', array(
        'labels' => $labels,
        'supports' => array(
           'title', 
           'thumbnail',
        ),
        'menu_position' => 5,
        'has_archive' => true,
        'menu_icon' => 'dashicons-store',
        'public' => true,  // it's not public, it shouldn't have its own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
    ));
}
add_action('init', 'southern_store_register_post_type');


// /*-----------------------------------------------------------------
// ------------------------------ Store --------------------------------
// -----------------------------------------------------------------*/
// function store_register_post_type() {
//     $labels = array(
//         'name'                  => __('店舗', '店舗'),
//         'singular_name'         => __('Store', '店舗'),
//         'add_new'               => __('Add New', '新規追加'),
//         'add_new_item'          => __('Add New Store', '新しい店舗を追加'),
//         'edit_item'             => __('Edit Store', '店舗を編集'),
//         'new_item'              => __('New Store', '新しい店舗'),
//         'view_item'             => __('View Store', '店舗を見る'),
//         'search_items'          => __('Search Store', '店舗を検索'),
//         'not_found'             => __('No Store found', '店舗が見つかりません'),
//         'not_found_in_trash'    => __('No Store found in Trash', 'ゴミ箱に店舗が見つかりません'),
//         'all_items'             => __('All Store', '全ての店舗'),
//         'archives'              => __('Store Archives', '店舗アーカイブ'),
//         'attributes'            => __('Store Attributes', '店舗の属性'),
//         'insert_into_item'      => __('Insert into Store', '店舗に挿入'),
//         'uploaded_to_this_item' => __('Uploaded to this Store', 'この店舗にアップロード'),
//         'featured_image'        => __('Featured Image', 'アイキャッチ画像'),
//         'set_featured_image'    => __('Set featured image', 'アイキャッチ画像を設定'),
//         'remove_featured_image' => __('Remove featured image', 'アイキャッチ画像を削除'),
//         'use_featured_image'    => __('Use as featured image', 'アイキャッチ画像として使用'),
//         'menu_name'             => __('Store', '店舗'),
//         'filter_items_list'     => __('Filter Store list', '店舗リストを絞り込み'),
//         'items_list_navigation' => __('Store list navigation', '店舗リストナビゲーション'),
//         'items_list'            => __('Store list', '店舗リスト'),
//     );

//     register_post_type('store', array(
//         'labels' => $labels,
//         'supports' => array(
//            'title', 
//            'thumbnail',
//         ),
//         'menu_position' => 5,
//         'has_archive' => true,
//         'menu_icon' => 'dashicons-store',
//         'public' => true,  // it's not public, it shouldn't have its own permalink, and so on
//         'publicly_queryable' => true,  // you should be able to query it
//         'show_ui' => true,  // you should be able to edit it in wp-admin
//         'exclude_from_search' => true,  // you should exclude it from search results
//         'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
//     ));
// }
// add_action('init', 'store_register_post_type');


// // <------ Store Category ------->
// add_action( 'init', 'create_store_category', 0 );
// function create_store_category() {
//     $labels = array(
//         'name'              => _x( 'Store Categories', 'Category', 'Alsta-FC' ),
//         'singular_name'     => _x( 'Store Category', 'Category', 'Alsta-FC' ),
//     );
//     $args = array(
//         'hierarchical'      => true,
//         'labels'            => $labels,
//         'show_ui'           => true,
//         'show_admin_column' => true,
//         'query_var'         => true,
//         'rewrite'           => array( 'slug' => 'store/category' ),
//         'with_front'       => false,
//     );
//     register_taxonomy( 'store_category', array( 'store' ), $args );
// }

/*-----------------------------------------------------------------
------------------------------ NEWS --------------------------------
-----------------------------------------------------------------*/
function news_register_post_type() {
    $labels = array(
        'name'                  => __('ニュース', 'ニュース'),
        'singular_name'         => __('News', 'ニュース'),
        'add_new'               => __('Add New', '新規追加'),
        'add_new_item'          => __('Add New News', '新しいニュースを追加'),
        'edit_item'             => __('Edit News', 'ニュースを編集'),
        'new_item'              => __('New News', '新しいニュース'),
        'view_item'             => __('View News', 'ニュースを見る'),
        'search_items'          => __('Search News', 'ニュースを検索'),
        'not_found'             => __('No news found', 'ニュースが見つかりません'),
        'not_found_in_trash'    => __('No news found in Trash', 'ゴミ箱にニュースが見つかりません'),
        'all_items'             => __('All News', '全てのニュース'),
        'archives'              => __('News Archives', 'ニュースアーカイブ'),
        'attributes'            => __('News Attributes', 'ニュースの属性'),
        'insert_into_item'      => __('Insert into news', 'ニュースに挿入'),
        'uploaded_to_this_item' => __('Uploaded to this news', 'このニュースにアップロード'),
        'featured_image'        => __('Featured Image', 'アイキャッチ画像'),
        'set_featured_image'    => __('Set featured image', 'アイキャッチ画像を設定'),
        'remove_featured_image' => __('Remove featured image', 'アイキャッチ画像を削除'),
        'use_featured_image'    => __('Use as featured image', 'アイキャッチ画像として使用'),
        'menu_name'             => __('News', 'ニュース'),
        'filter_items_list'     => __('Filter news list', 'ニュースリストを絞り込み'),
        'items_list_navigation' => __('News list navigation', 'ニュースリストナビゲーション'),
        'items_list'            => __('News list', 'ニュースリスト'),
    );

    register_post_type('news', array(
        'labels' => $labels,
        'supports' => array(
           'title',
           'editor',
        ),
        'menu_position' => 6,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site-alt3',
        'public' => true,  // it's not public, it shouldn't have its own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'show_in_rest' => true,
    ));
}
add_action('init', 'news_register_post_type');

/*-----------------------------------------------------------------
------------------------------ TOPICS --------------------------------
-----------------------------------------------------------------*/
function topics_register_post_type() {
    $labels = array(
        'name'                  => __('トピック', 'トピック'),
        'singular_name'         => __('Topics', 'トピック'),
        'add_new'               => __('Add New', '新規追加'),
        'add_new_item'          => __('Add New Topics', '新しいトピックを追加'),
        'edit_item'             => __('Edit Topics', 'トピックを編集'),
        'new_item'              => __('New Topics', '新しいトピック'),
        'view_item'             => __('View Topics', 'トピックを見る'),
        'search_items'          => __('Search Topics', 'トピックを検索'),
        'not_found'             => __('No Topics found', 'トピックが見つかりません'),
        'not_found_in_trash'    => __('No Topics found in Trash', 'ゴミ箱にトピックが見つかりません'),
        'all_items'             => __('All Topics', '全てのトピック'),
        'archives'              => __('Topics Archives', 'トピックアーカイブ'),
        'attributes'            => __('Topics Attributes', 'トピックの属性'),
        'insert_into_item'      => __('Insert into Topics', 'トピックに挿入'),
        'uploaded_to_this_item' => __('Uploaded to this Topics', 'このトピックにアップロード'),
        'featured_image'        => __('Featured Image', 'アイキャッチ画像'),
        'set_featured_image'    => __('Set featured image', 'アイキャッチ画像を設定'),
        'remove_featured_image' => __('Remove featured image', 'アイキャッチ画像を削除'),
        'use_featured_image'    => __('Use as featured image', 'アイキャッチ画像として使用'),
        'menu_name'             => __('Topics', 'トピック'),
        'filter_items_list'     => __('Filter Topics list', 'トピックリストを絞り込み'),
        'items_list_navigation' => __('Topics list navigation', 'トピックリストナビゲーション'),
        'items_list'            => __('Topics list', 'トピックリスト'),
    );

    register_post_type('topics', array(
        'labels' => $labels,
        'supports' => array(
           'title', 
           'thumbnail',
           'editor',
        ),
        'menu_position' => 7,
        'has_archive' => true,
        'menu_icon' => 'dashicons-buddicons-topics',
        'public' => true,  // it's not public, it shouldn't have its own permalink, and so on
        'publicly_queryable' => true,  // you should be able to query it
        'show_ui' => true,  // you should be able to edit it in wp-admin
        'exclude_from_search' => true,  // you should exclude it from search results
        'show_in_nav_menus' => false,  // you shouldn't be able to add it to menus
        'show_in_rest' => true,
    ));
}
add_action('init', 'topics_register_post_type');


// <------ Topics Category ------->
add_action( 'init', 'create_topics_category', 0 );
function create_topics_category() {
    $labels = array(
        'name'              => _x( 'Topics Categories', 'Category', 'Alsta-FC' ),
        'singular_name'     => _x( 'Topics Category', 'Category', 'Alsta-FC' ),
    );
    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'topics/category' ),
        'with_front'       => false,
        'show_in_rest' => true,
    );
    register_taxonomy( 'topics_category', array( 'topics' ), $args );
}

