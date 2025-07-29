<!DOCTYPE html>
<html                <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>


<body                <?php body_class(); ?>>
<header class="site-header">
  <div class="container">
    <div class="branding">
      <h1><a href="<?php echo esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a></h1>
    </div>
    <nav class="main-nav">
    <?php
        wp_nav_menu([
            'theme_location' => 'main_menu',
            'container'      => false,
            'menu_class'     => 'menu',
        ]);
    ?>
  <button class="menu-toggle" aria-label="Toggle Menu">&#9776;</button>
</nav>

  </div>
</header>



