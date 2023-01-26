<?php

 get_header();  ?>

<div id="content-wrapper">	
				<div id="content-bg-image">
					<img id="bg-right" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/right.png" alt="" width="" height=""/>
					<img id="bg-left" src="<?php echo get_template_directory_uri(); ?>/inc_files/images/left.png" alt="" width="" height=""/>
					<div id="inner-content">
						<h1 class="page-header"><?php the_title();?></h1>
						<div class="item-left-content left-align">
							<div class="item-image">
								<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID)) ?>" alt="" width="" height=""/>
							</div>
							<?php if( get_field('video') ): ?>
                                <div id="video-block">
                                    <?php the_field('video'); ?>
    							</div>
                            <?php endif; ?>
							
							<div id="image-gallery">
								<div class="grid" data-masonry='{ "itemSelector": ".grid-item","columnWidth": 178}'>
                                    <?php 
                                        $images = get_field('gallery');
                                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                        if( $images ): ?>
                                            
                                                <?php foreach( $images as $image ): ?>
                                                <a href="<?php echo esc_url($image['url']); ?>" data-fancybox="group" data-caption="This image has a caption 2">
                                                      <div class="grid-item"><img src="<?php echo esc_url($image['sizes']['thumbnail']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /></div>
                                                 </a>
                                                        
                                                <?php endforeach; ?>
                                            
                                        <?php endif; ?>
								</div>
							</div>
						</div><!--category left content end-->		
						
						<div class="item-right-content right-align">						
							<div class="row">
								<img class="category-tag" src="<?php the_field('lable');?>" alt="" width="" height=""/>
								<p><span>Cat-ID:</span><?php the_field('cat-id');?> “<?php the_title();?>”</p>
								<p><span>Found:</span><?php the_field('found');?></p>
								<p><span>Addit:</span><?php the_field('addi');?></p>
							</div>
							<hr/>
							<div class="common-text">
                            <?php the_field('description');?>
							</div>
						</div>
                        
						<a href="#" onclick="history.back()" class="button bottom-link"><img src="<?php echo get_template_directory_uri(); ?>/inc_files/images/back-icon.png" alt="" width="" height=""/>Back</a>
					</div><!--inner content end-->
				</div><!--content bg image end-->
			</div><!--content wrapper end-->


<?php get_footer(); ?>
