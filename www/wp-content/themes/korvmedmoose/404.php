
<?php get_header(); ?>

	<div id="main">
		
		<?php 
		$args = array(
			'pagename' => '404-error'
		);
		query_posts($args);
		if (have_posts()) : while (have_posts()) : the_post();
		
			$header_bgimg = get_field('header_bg');
			$header_bgcolor = get_field('header_bgcolor');
			global $header_textcolor;
			$header_textcolor = get_field('header_textcolor');
			?>
		
			
			<div class="top-bg" style="background-image: url('<?php echo $header_bgimg; ?>');background-color: <?php echo $header_bgcolor; ?>;">
				<?php if($header_bgimg == '') { ?> 
					<div class="noise"></div>
				<?php } ?>
				<div class="tilt"></div>
			</div>
			
			
			<div id="page">
				
				<div id="content">
					
					
					<h1 class="fittext"<?php if($header_textcolor != '') : ?> style="color:<?php echo $header_textcolor; ?>" <?php endif; ?>><?php the_title(); ?></h1>


					<?php get_template_part('parts/part', 'modules'); ?>
					
					
				</div>
				
				
				<?php 
				if(get_field('footer_bgcolor')) :
					?>
					<input type="hidden" id="footer_bgcolor" value="<?php echo get_field('footer_bgcolor'); ?>" />
					<?php
				endif;
				?>
				
			</div>
			
		<?php endwhile; endif; ?>
		
		
	</div>
	
<?php get_footer(); ?>