<?php
/**
* Template Name: Contact Page
*/
?>

<?php get_header(); ?>

<?php
    $autop = get_field( 'rm_brp_tag', get_the_ID() );
    if ( $autop === 'yes' ) {
        remove_filter( 'the_content', 'wpautop' );
        remove_filter( 'the_excerpt', 'wpautop' );
    } 
    else {
        if ( ! has_filter( 'the_content', 'wpautop' ) ) {
        add_filter( 'the_content', 'wpautop' );
        }
        if ( ! has_filter( 'the_excerpt', 'wpautop' ) ) {
        add_filter( 'the_excerpt', 'wpautop' );
        }
    }
	while ( have_posts() ) : the_post();
?>

<!-- MAIN -->
<main id="main">
    <section class="section--top">
        <div class="container">
            <h2 class="heading-primary"><?php the_title(); ?></h2>
        </div>
    </section>
    <section class="contactpage">
        <div class="container">
            <?php the_content(); ?>
        </div>
    </section>
</main>

<?php
  endwhile; // End of the loop.
?>

<?php get_footer(); ?>