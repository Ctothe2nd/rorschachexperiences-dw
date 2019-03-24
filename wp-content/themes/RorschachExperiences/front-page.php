<!DOCTYPE html>
<html>
	
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="robots" content="index,follow"/>
    <meta name="googlebot" content="index,follow"/>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/style.css" type="text/css"/>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:200,400|Special+Elite|Spectral:200i,800" rel="stylesheet">
    <title>Rorschach Experiences</title> 
</head>	
<BODY>
	
	<SECTION class="hero">
		<div> <!-- Background -->
			<VIDEO class="bg-video" src="<?php echo get_bloginfo('template_directory'); ?>/media/webvideo2.mov" autoplay="true" loop="true" muted="" type="video/mp4"></VIDEO> 
		</div>

		<DIV class="content">
			<div> <!-- Branding -->
			<img class="hero-logo" alt="Rorschach Experiences logo" src="<?php echo get_bloginfo('template_directory');?>/media/re-logo.png" />
			<H2>              Producing immersive and submersive experiences          </H2>
			</div>
			<!-- Begin MailChimp Signup Form -->
			
			<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
			<div id="mc_embed_signup">
				<h3>Sign up for our newsletter to be the first to know about our experiences and exclusive opportunities to be a playtester for our research team!</h3>
				<form action="https://christycasey.us13.list-manage.com/subscribe/post?u=8f5ad869318d57a4f0a6f4625&amp;id=98cf3f316b" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
					<div id="mc_embed_signup_scroll">
					<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
					<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
					<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_8f5ad869318d57a4f0a6f4625_98cf3f316b" tabindex="-1" value=""></div>
					<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
					</div>
				</form>
			</div>
			<!--End mc_embed_signup-->
		<div> <!--Social Links-->
			<H5><A href="https://www.instagram.com/rorschachexperiences/" target="_blank"> @RorschachExperiences </A>             
				<A href="https://www.instagram.com/explore/tags/rorschachexperiences/" target="_blank">#RorschachExperiences</A>   
			</H5>
		</div>
	</DIV>
	</SECTION>
	<section>
		<div class="row genres">
			<div class="col half img-bg immersive">
				<h3 class="white">Immersive Events and Entertainment</h3></br>
				<h5 class="white">We create unique and inspiring environments that will transport you into a world of imagination! In addition to producing our own immersive events, we also create custom experiences. If you want your next event to be unforgetable, get in touch!</h5>
			</div>
			<div class="col half img-bg submersive">
				<a href="https://bit.ly/SimulifeDiaries" target="_blank">
				<h3 class="white">Submersive Experiences</h3></br>
				<h5 class="white">We are pioneering a new genre where you become the star in a cinematic experience! Follow this link to read about one such experience, OpenMind, created as part of the Interactive Deep Dive (the think tank Rorschach Experiences was born out of)</h5>
				</a>
			</div>
		</div>
	</section>
	<section class="definition">
		<h3>Submersive</h3>
			<h5>[sub·​mer·​sive]  / ˈsəbˈmərsiv /</h5>

			<h4>adjective</h4>
				<ol><p>
				<li><p>Describing a genre of experience where audience participants are submersed in a fictional reality to a depth where their own reality becomes imperceptible. <em>They don’t just see or hear the story, they LIVE it.</em> Step out of the role of observer and become the protagonist, with a level of agency and influence in the narrative similar to that which you would have over your own life.</p></li>

				<li><p>Characterize something that completely engulfs the subject until it is imperceptible. The prefix “sub-”, meaning under, is the strongest associated with the latin verbe “mergere”, meaning to plunge. It implies an extensive depth and duration.</p></li>

				</p></ol>
			</section>
<section>
	<div class="contact row">
		<h1 class="white">Let's get in touch!</h1>
		<h5 class="white">Email <a class="white" href="mailto:hello@rorschachexperiences.com">hello@rorschachexperiences.com</a> to get in touch with our team. We're excited to connect!</h5>
	</div>
</section>
	<section class="post-feed">
		<div class="row">
			<a name="upcoming-events"> <h2>Upcoming Events</h2></a>
		</div>
		<div> <!-- Upcoming Experiences Query-->
			<?php query_posts('posts_per_page=3&post_type=experiences&post_tag=upcoming'); ?> 
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="experience-list row">
						<section class="half col padding-right"><a href="<?php the_field('link');?>" target="_blank"><img src="<?php the_field('main_image'); ?>"></a></section>

						<div class="half col vertical-center">
							<div class="">
							<a href="<?php the_field('link');?>" target="_blank"><h3><?php the_title(); ?></h3></a>
							<h5><?php the_field('date');?>, <?php the_field('time');?></h5>
							<h5><?php the_field('location');?></h5>
							<p><?php the_field('blurb');?>	</p>
							<a href="<?php the_field('link');?>" target="_blank"><h5 class="button">RSVP</h5></a>
							</div>
						</div>
				</div>
				</br>
				<?php endwhile; ?> 
			<?php wp_reset_query(); ?>
		</div>
	</section>
    
</BODY></HTML>