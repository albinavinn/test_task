<!--—BEGIN HEADER -->
<!DOCTYPE html>
<html <?php language_attributes() ; ?>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceX</title>
    <?php wp_head()?>
</head>
<body>
    <header>
        <div class="header-wrap">
            <div class="img-logo"><?php the_custom_logo(); ?></div>
            <nav class="nav">
                <ul class="nav-list">
                    <?php
global $post;

$myposts = get_posts([ 
	'numberposts' => -1,
]);

if( $myposts ){
	foreach( $myposts as $post ){
		setup_postdata( $post );
		?>
         <li><p class="left"><a href="" class="nav-link"><?php the_title(); ?></a></p></li>
		<?php 
	}
} wp_reset_postdata(); ?>
                </ul>
            </nav>
        </div>
    </header>
  <!--—END HEADER -->
