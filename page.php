<?php get_template_part('parts/header'); ?>

<nav class="navbar navbar-site-title">
  	<div class="container">
  		<?php if(have_posts()): while(have_posts()): the_post();?>
  			<header>
  				<h2><?php the_title()?></h2>
  			</header>
  		<?php endwhile; ?> 
  		<?php endif;?>
  	</div>
    <div class="navbar-box">
  	</div>
</nav>

<div class="container">
  <div class="row">
Zau
    <div class="col-xs-12 col-sm-8">
      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <?php the_content()?>
        </article>
        <?php endwhile; ?> 
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-4" id="sidebar" role="navigation">
      <?php get_template_part('parts/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
