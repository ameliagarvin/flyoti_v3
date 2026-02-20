<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>
<header class="site-header">
    <div class="logo">
        <a href="<?php echo home_url(); ?>">My Site</a>
    </div>
    <nav class="site-nav">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class'     => 'Agent Menu',
        ));
        ?>
    </nav>
</header>

<body <?php body_class(); ?>>
