<?php get_template_part('parts/header'); ?>


<div class="poster">
	<div class="container">
		<div class="row row-offcanvas">
			JOKE-LAN S14<br>
			17.-19.10.2014<br>
			JOKELAN KOULUKESKUS<br><br>
			<div class="typewriter" style="float: left;"></div><span class="blink" style="float: left;">_</span><br>
			
			<a href="#scrolltarget">
				<div class="arrow-down ">
					<div class="arrow-layers layer-one"></div>
					<div class="arrow-layers layer-two"></div>
					<div class="arrow-layers layer-three"></div>
					<div class="arrow-layers layer-four"></div>
				</div>
			</a>
		</div>
	</div>
</div>
<span id="scrolltarget"></span>
<nav class="navbar navbar-site-title" id="news">
  <div class="container">
  			<header>
  				<h2>UUTISET</h2>
  			</header>
  </div>
  	<div class="navbar-box">
	
  	</div>
</nav>
<div class="container">
  <div class="row row-offcanvas">
    <div class="col-xs-12 col-sm-9" >
      <div id="content" role="main" >
        <?php if(have_posts()): while(have_posts()): the_post();?>
        <article role="article" id="post_<?php the_ID()?>" class="article-frontpage">
          <header>
            <h2><a href="<?php the_permalink(); ?>"><?php the_title()?></a></h2>
            <h4>
              <em>
                <span class="text-muted" class="author">By <?php the_author() ?>,</span>
                <time  class="text-muted" datetime="<?php the_time('d-m-Y')?>"><?php the_time('jS F Y') ?></time>
              </em>
            </h4>
          </header>
          <?php //the_post_thumbnail(); ?>
		  <?php
				if( function_exists( 'the_responsive_featured_image' ) ) {
					 echo the_responsive_featured_image();
				}
			?>
          <?php the_content( __( 'Lue lis&auml;&auml; &hellip;', 'bst' ) ); ?>
          <p class="text-muted" style="margin-bottom: 20px;">
            <i class="glyphicon glyphicon-folder-open"></i>&nbsp;<?php _e(''); ?> <?php the_category(', ') ?><br/>
            <i class="glyphicon glyphicon-comment"></i>&nbsp; Comments: <?php comments_popup_link('None', '1', '%'); ?>
          </p>
          <hr/>
        </article>
        <?php endwhile; ?>
        <ul class="pagination">
          <li class="older"><?php next_posts_link('&laquo; Older') ?></li>
          <li class="newer"><?php previous_posts_link('Newer &raquo;') ?></li>
        </ul>
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
