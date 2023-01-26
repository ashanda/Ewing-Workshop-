<?php
get_header();  ?>

<div id="content-wrapper">
				<div id="content-bg-image">
					<img id="bg-right" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/right.png" alt="" width="" height=""/>
					<img id="bg-left" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/left.png" alt="" width="" height=""/>
					<div id="inner-content">
						<h1 class="page-header"><?php echo single_term_title(); ?></h1>
						<div class="top-text-area">
							<p><?php echo term_description(); ?></p>
						</div>

                        <?php if ( have_posts() ): ?>
                        <?php while( have_posts() ): ?>
                            <?php the_post(); ?>
                            <div class="category-row">
							<div class="category-image">
							    <a href="<?php echo get_permalink( $post->ID ); ?>">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>" alt="" width="" height=""/>
								</a>
							</div>
							<div class="category-text">
								<div class="row">
									<img class="category-tag" src="<?php the_field('lable');?>" alt="" width="" height=""/>
									<p><span>Cat-ID:</span><?php the_field('cat-id');?> “<?php the_title();?>”</p>
									<p><span>Found:</span><?php the_field('found');?></p>
									<p><span>Addit:</span><?php the_field('addi');?></p>
								</div>
								<hr/>
								<p><?php the_field('short_description');?></p>
								<a href="<?php echo get_permalink( $post->ID ); ?>" class="button">
									<span>More Info</span>
									<img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/more-icon.png" alt="" width="" height=""/>
								</a>
							</div>
						</div><!-- category row end-->
                        <?php endwhile; ?>
                        
                    <?php else: ?>
                        <p style="text-align:center;"><?php _e( 'No Work Found'); ?></p>
                    <?php endif; ?>



						
						
					</div><!-- inner content end -->
				</div>
			</div><!--content wrapper end-->


<?php get_footer(); ?>
