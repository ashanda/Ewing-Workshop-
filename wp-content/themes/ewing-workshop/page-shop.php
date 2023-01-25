
<?php
/*
Template Name: Shop
*/
 get_header();  ?>
<div id="content-wrapper">	
				<div id="content-bg-image">
					<img id="bg-right" src="inc_files/images/right.png" alt="" width="" height=""/>
					<img id="bg-left" src="inc_files/images/left.png" alt="" width="" height=""/>
					<div id="inner-content">
						<h1 class="page-header"><?php the_title();?></h1>
						<?php the_content();?>
					</div>
				</div>
			</div><!--content wrapper end-->



<?php get_footer(); ?>
