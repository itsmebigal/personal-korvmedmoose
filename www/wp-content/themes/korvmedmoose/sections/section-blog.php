<?php global $xc1_section; ?>
<div class="section section-news sections-2" id="section-<?php echo $xc1_section; ?>">
	<?php 
	$queryObject = new WP_Query( 
		array( 
			'post_type' => 'post',
			'showposts' => '2' 
		) 
	);
	if ($queryObject->have_posts()) : while ($queryObject->have_posts()) : $queryObject->the_post(); ?>
		<article class="post article">
			<?php 
			$img_id = get_post_thumbnail_id();
			$normal_img = wp_get_attachment_image_src ($img_id, 'image-normal');
			$retina_img = wp_get_attachment_image_src ($img_id, 'image-retina'); 
			?>
			<img class="image" data-normal="<?php echo $normal_img[0];?>" data-retina="<?php echo $retina_img[0];?>" src="<?php echo XC1_THEME_IMAGES_URI; ?>/image-placeholder.jpg" />
			<div class="entry">
			<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			<p class="details"><strong><?php the_time('j F, Y'); ?></strong> <?php _e('Published in', 'xc1');  ?> <?php the_category(', '); ?></p>
			<?php the_excerpt(); ?>
			
			<a class="read-more" href="<?php the_permalink(); ?>"><?php _e('Read the article', 'xc1'); ?></a>
			
			<!-- AddThis Button BEGIN -->
			<div class="share addthis_toolbox addthis_default_style" addthis:url="<?php the_permalink(); ?>">
			<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
			<a class="addthis_button_tweet"></a>
			<a class="addthis_button_pinterest_pinit"></a>
			<a class="addthis_counter addthis_pill_style"></a>
			</div>
			<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=xa-51753b8842d786ea"></script>
			<!-- AddThis Button END -->
			</div>
		</article>
	<?php endwhile; endif; ?>
</div>