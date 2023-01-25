			$(document).ready(function(){
				
				$("#menu-button").click(function(){
						
					
						$('#menu-wrapper').slideToggle('slow');
						$('#menu-wrapper').css({'display':'block'});
				});
				
					// This is sub men functions				
					$( "#main-menu li" ).has( "ul" ).addClass( "nav-parent" );
					$( "<span></span>" ).insertBefore( ".nav-parent ul" );
						
					$("#main-menu li span").click(function(){ 
											
						
								
							$( "#main-menu li ul" ).slideUp('slow');	
								
							if( $(this).parent().children('ul').css('display') == 'none' ){															
									$(this).parent().children('ul').slideDown('slow');	
							}	
					});
					
								
					//slidersContainer();						
			});	
			
			$(window).on('load', function(){  
				//addHeight();
					
			});
			
			
			$(window).on('resize', function(){				
				//addHeight();
			});
			
			//Add height
			function addHeight(){	
				heightEqualizer(".slider-bottom-col");	
				heightEqualizer(".main-equalheight");	
			}
			function heightEqualizer(wrapper){				
				var maxHeight = 0;
				$(wrapper).css({'height':'auto'});
				$(wrapper).each(function(){
					 if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
				});
				  
				$(wrapper).height(maxHeight);		
			}	
				
			function slidersContainer(){
				
				$('#home-slider').lightSlider({					
					item:1,
					slideMargin:0,					
					loop:true,
					auto:true,
					mode:'fade',
					pause:6000,
					pager:false,
					controls:false,
					speed:700
				});	

			}
			
	
	


		