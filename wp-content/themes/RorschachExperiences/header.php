<?php
/**
  * The template for displaying the header
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 2.0
 */
?>
<!DOCTYPE html>
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width">
	<meta name="description" content="A WordPress portfolio project site, built with Skillcrush.">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
		<header>
			<div class="row">
			<div class="col">
				<a href="<?php echo site_url(); ?>" class="top-logo">
					<img class="style-logo" src="<?php echo get_bloginfo('template_directory'); ?>/media/RE type treatment long.png" alt="Rorschach Experiences Logo">
				</a>
				<nav class="style-nav">
					<ul><?php wp_nav_menu(array('theme_location' => 'primary-menu')); ?></ul>
				</nav>	
			</div>
			</div>
		</header>
</body>