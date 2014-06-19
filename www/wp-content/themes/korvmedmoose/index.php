<?php get_header(); ?>

	<div id="main">	

		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="videoPadding">
			<div class="videoWrapper hide">
				<iframe data-vimeo="<?php the_field('vimeo_link'); ?>" src="" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></p>
			</div>
			<div class="videoDescription"></div>
		</div>
		<?php endwhile; endif; ?>
		
	</div>
	
<?php get_footer(); ?>