<?php

//Favicon
function yonnaakai_add_favicon(){
  ?>
  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.ico">
  <link rel="icon" sizes="16x16 32x32 64x64" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon.ico">
  <link rel="icon" type="image/png" sizes="196x196" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-192.png">
  <link rel="icon" type="image/png" sizes="160x160" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-160.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-96.png">
  <link rel="icon" type="image/png" sizes="64x64" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-64.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-16.png">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-57.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-114.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-72.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-144.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-60.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-120.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-76.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-180.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta name="msapplication-TileImage" content="<?php bloginfo('template_url'); ?>/assets/img/favicon/favicon-144.png">
  <meta name="msapplication-config" content="<?php bloginfo('template_url'); ?>/assets/img/favicon/browserconfig.xml">
  <?php
}
add_action('wp_head','yonnaakai_add_favicon');
