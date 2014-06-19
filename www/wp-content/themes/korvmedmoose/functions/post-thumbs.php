<?php
if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
    set_post_thumbnail_size( 2000, 2000, false); // default Post Thumbnail dimensions   
}

if ( function_exists( 'add_image_size' ) ) { 
	
	add_image_size( 'background', 1680, 1050, true );
	add_image_size( 'large', 990, 1500, false );
	add_image_size( 'medium', 480, 320, true );
	add_image_size( 'small', 230, 150, true );
	
	add_image_size( 'case', 260, 280, true );
	add_image_size( 'case-retina', 520, 560, true );
	
	add_image_size( 'content-box-icon', 130, 130, true);
	add_image_size( 'content-box-icon-retina', 260, 260, true);
	
	add_image_size( 'people', 260, 357, true );
	add_image_size( 'people-retina', 520, 714, true );
	
	add_image_size( 'full', 940, 0, false );
	add_image_size( 'full-retina', 1880, 0, false );
	
	add_image_size( 'logo', 0, 65, false );
	add_image_size( 'logo-retina', 0, 130, false );
	
	
	//content images
	add_image_size( 'size1', 320, 0, false );
	add_image_size( 'size2', 480, 0, false );
	add_image_size( 'size3', 768, 0, false );
	add_image_size( 'size4', 960, 0, false );
	add_image_size( 'size5', 1178, 0, false );
	add_image_size( 'size6', 1536, 0, false );
	add_image_size( 'size7', 1920, 0, false );
	add_image_size( 'size8', 2356, 0, false );

}
?>