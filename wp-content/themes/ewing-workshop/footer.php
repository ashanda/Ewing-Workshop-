<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ewing-workshop
 */

?>
<div id="footer-wrapper">	
				<p>&copy; The Ewing Workshop</p> 
				<a href="https://www.designfolk.co.uk" target="_blank">Website design by Designfolk</a>					
			</div><!--footer wrapper end-->		
			
		</div><!--main wrapper end-->
		
		<!--script-->		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css">
  <script src="https://cdn.jsdelivr.net/npm/@fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/lightslider/src/js/lightslider.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/inc_files/scripts/ui.js"></script>
		<!-- masonry -->
		<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>
		<script type="text/javascript">
			$('.grid').masonry({
				// options...
				itemSelector: '.grid-item',
				  columnWidth: 178,
				  //percentPosition: true,
				  gutter: 10
			});
		</script>

<!-- fancybox master -->

		<script type="text/javascript">
		  $("[data-fancybox]").fancybox({
			// Options will go here
          buttons : [
            'close'
          ],
          wheel : false,
          transitionEffect: "slide",
           // thumbs          : false,
          // hash            : false,
          loop            : true,
          // keyboard        : true,
          toolbar         : false,
          // animationEffect : false,
          // arrows          : true,
          clickContent    : false
		  });
		</script>
		

  
		<?php wp_footer(); ?>
	</body>
</html>





