<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<header>
		<nav>
			<div class="wrapper">
			<div class="logo">
				Logo
			</div>
			<ul>
				<li>Our Work</li>
				<li>About</li>
				<li>Blog</li>
				<li>Feed</li>
				<li>Forge</li>
				<li>Contact</li>
			</ul>
			</div>
		</nav>
	</header>
	
