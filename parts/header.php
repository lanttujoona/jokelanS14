<!DOCTYPE html>
<html>
<head>
	<title><?php is_front_page() ? bloginfo('name') : wp_title('•', true, ''); ?></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!--[if lt IE 8]>
<div class="alert alert-warning">
	You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.
</div>
<![endif]-->    

<nav class="navbar navbar-default navbar-static-top" role="navigation">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".upper-navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/"><span class="header-logo"></span></a>
    </div>
	<div class="navbar-box">
  	</div>
      <?php			
        wp_nav_menu( array(
        	'menu'              => 'primary',
        	'theme_location'    => 'primary',
        	'depth'             => 2,
        	'container'         => 'div',
        	'container_class'   => 'collapse navbar-collapse upper-navbar navbar-ex1-collapse',
        	'menu_class'        => 'nav navbar-nav',
        	'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
        	'walker'            => new wp_bootstrap_navwalker())
    	);
      ?>
  
</nav>

<!-- END OF header.php -->