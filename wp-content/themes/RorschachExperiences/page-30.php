<?php
/**
 * The template for the Researchers Page
 *
 * @package WordPress
 * @subpackage Rorschach Experiences
 * @since Rorschach Experiences 1.0
 */

get_header(); ?>

<section class="default-page">
	<div class="main-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<h2 class="entry-title"><?php the_title(); ?></h2>
			<article class="post-entry">
				<?php the_content(); ?>
			</article>
		<?php endwhile; ?>
	</div>
	
</section>