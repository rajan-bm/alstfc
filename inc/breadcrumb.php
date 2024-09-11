<?php
/*==============================================
                    BREADCRUMBS			            
================================================*/
// Wordpress Breadcrumb Function
// Add this code into your theme function file.
function ah_breadcrumb() {
    if ( is_front_page() ) {
        return;
    }
    // Define
    global $post;
    $defaults = array(
        'seperator'  => '',
        'id'         => 'breadcrumb__box',
        'classes'    => 'breadcrumb__box',
        'home_title' => esc_html__( 'TOP', 'alstafc' )
    );
    $sep = '';
    // Start the breadcrumb with a link to your homepage
    echo '<div class="breadcrumb"><div class="container"><ul id="' . esc_attr( $defaults['id'] ) . '" class="' . esc_attr( $defaults['classes'] ) . '">';
    // Creating home link
    echo '<li><a href="' . get_home_url() . '">' . esc_html( $defaults['home_title'] ) . '</a></li>' . $sep;

    if ( is_single() ) {

        // Get posts type
        $post_type = get_post_type();

        if ($post_type) {
            $post_type_obj = get_post_type_object($post_type);
            $archive_link = get_post_type_archive_link($post_type);
        
            if ($post_type_obj && isset($post_type_obj->labels->name) && $archive_link) {
                echo '<li><a href="' . $archive_link . '"> ' . $post_type_obj->labels->name . ' </a></li>';
            }
        }
        echo '<li>' . get_the_title() . '</li>';
    } else if ( is_archive() ) {
        if ( is_tax() ) {
            // Get posts type
            $post_type = get_post_type();

            // If post type is not post
            // echo $post_type;
            if ( $post_type === 'column' ) {
                // echo 'hello';
                $post_type_object = get_post_type_object( $post_type );
                $post_type_link   = get_post_type_archive_link( $post_type );
                echo '<li><a href="' . $post_type_link . '">' . $post_type_object->labels->name . '</a></li>' . $sep;
            }

            $custom_tax_name = get_queried_object()->name;

            // echo '<li><a href="' . home_url('/') . 'all">すべての記事</a></li>' . $sep;
            echo '<li>' . $custom_tax_name . '</li>';
        } else if ( is_category() ) {
            $parent = get_queried_object()->category_parent;
            if ( $parent !== 0 ) {
                $parent_category = get_category( $parent );
                $category_link   = get_category_link( $parent );
                echo '<li><a href="' . esc_url( $category_link ) . '">' . $parent_category->name . '</a></li>' . $sep;
            }
            echo '<li><a href="' . home_url('/') . 'all">すべての記事</a></li>' . $sep;
            echo '<li>' . single_cat_title( '', false ) . '</li>';
        } else if ( is_tag() ) {
            // Get tag information
            $term_id       = get_query_var( 'tag_id' );
            $taxonomy      = 'post_tag';
            $args          = 'include=' . $term_id;
            $terms         = get_terms( $taxonomy, $args );
            $get_term_name = $terms[0]->name;

            // Display the tag name
            echo '<li>' . $get_term_name . '</li>';

        } else if ( is_day() ) {

            // Day archive

            // Year link
            echo '<li><a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . ' Archives</a></li>' . $sep;

            // Month link
            echo '<li><a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'M' ) . ' Archives</a></li>' . $sep;

            // Day display
            echo '<li>' . get_the_time( 'jS' ) . ' ' . get_the_time( 'M' ) . ' Archives</p></li>';

        } else if ( is_month() ) {

            // Month archive

            // Year link
            echo '<li><a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . ' Archives</a></li>' . $sep;

            // Month Display
            echo '<li>' . get_the_time( 'M' ) . ' Archives</li>';

        } else if ( is_year() ) {

            // Year Display
            echo '<li>' . get_the_time( 'Y' ) . ' Archives</li>';

        } else if ( is_author() ) {
            // Auhor archive
            // Get the author information
            global $author;
            $userdata = get_userdata( $author );

            // Display author name
            echo '<li>' . 'Author: ' . $userdata->display_name . '</li>';

        } else {
            echo '<li>';
            echo post_type_archive_title() ;
            echo '</li>';
        }
    } else if ( is_page() ) {
        // Standard page
        if ( $post->post_parent ) {

            // If child page, get parents
            $anc = get_post_ancestors( $post->ID );

            // Get parents in the right order
            $anc = array_reverse( $anc );

            // Parent page loop
            if ( ! isset( $parents ) ) {
                $parents = null;
            }
            foreach ( $anc as $ancestor ) {

                $parents .= '<li><a href="' . get_permalink( $ancestor ) . '">' . get_the_title( $ancestor ) . '</a></li>' . $sep;

            }

            // Display parent pages
            echo $parents;

            // Current page
            echo '<li>' . get_the_title() . '</li>';

        } else {

            // Just display current page if not parents
            echo '<li>' . get_the_title() . '</li>';

        }

    } else if ( is_search() ) {

        // Search results page
        echo '<li><p>検索結果：キーワード「' . get_search_query() . '」</p></li>';

    } else if ( is_404() ) {

        // 404 page
        echo '<li>' . 'Error 404' . '</li>';

    }

    // End breadcrumb
    echo '</ul></div></div>';
}