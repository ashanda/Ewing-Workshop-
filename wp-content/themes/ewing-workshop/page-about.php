<?php
/*
Template Name: About
*/
 get_header();  ?>

<div id="content-wrapper">			
				<div id="content-bg-image">
					<img id="bg-right" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/right.png" alt="" width="" height=""/>
					<img id="bg-left" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/left.png" alt="" width="" height=""/>
					
					<div id="inner-content">
						<h1 class="page-header"><?php the_title();?></h1>
						<div class="about-content common-text left-align">
							<?php the_content();?>
						</div>
						<div class="about-image right-align">
							<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>" alt="" width="" height=""/>
						</div>
					</div>
				</div>
			</div><!--content wrapper end-->


<?php get_footer(); ?>