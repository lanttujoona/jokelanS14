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
    <div class="col-xs-12 col-sm-9">
      <div id="content" role="main">
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
          <header>
            <h2><?php the_title()?></h2>
			<h4>
				<span>
					<i class="glyphicon glyphicon-pencil"></i>&nbsp;&nbsp;<?php the_author() ?>,
					<time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('d.m.Y') ?></time>
				</span>
				<span>
					<i class="glyphicon glyphicon-screenshot"></i>&nbsp;<?php _e(''); ?> <?php the_category(', ') ?>
				</span>
            </h4>
          </header>
          <?php //the_post_thumbnail(); ?>
          <?php the_content()?>
        </article>
        <?php //comments_template('/parts/comments.php'); ?>
        <?php endwhile; ?>
        <?php else: ?>
        <?php wp_redirect(get_bloginfo('siteurl').'/404', 404); exit; ?>  
        <?php endif;?>
      </div><!-- /#content -->
    </div>
    
    <div class="col-xs-6 col-sm-3" id="sidebar" role="navigation">
        <?php get_template_part('parts/sidebar'); ?>
    </div>
    
  </div><!-- /.row -->
</div><!-- /.container -->

<?php get_template_part('parts/footer'); ?>
