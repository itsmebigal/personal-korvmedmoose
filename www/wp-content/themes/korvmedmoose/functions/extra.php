<?php

// Extra functions
function the_slug() {
	$post_data = get_post($post->ID, ARRAY_A);
	$slug = $post_data['post_name'];
	return $slug; 
}

function redirect_users () {
	wp_redirect(get_option('siteurl'));
}
