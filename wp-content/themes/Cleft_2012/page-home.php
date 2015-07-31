<?php
/*
Template Name: Home
*/
 get_header(); ?>
<div id="main" class="clearfix">
	
    <div class="container_12">
    	
		<div class="grid_12">
		
		
			<div id="promo_01" class="promo-container primary-promo-container">
				
				<ul class="promo-navigation clean"></ul><!-- //promo-navigation (auto generated) -->
				
				<ul class="promos clean">
					<li><a href="https://thecleft.org/wp-content/uploads/2012/02/CleftValues.pdf" target="_blank"><img src="https://thecleft.org/wp-content/themes/Cleft_2012/img/banners/Values.png" alt="Values" width="940" height="400" style="border: 5px solid #fff;"/></a></li>
					<li class="hidden"><a href="https://thecleft.org/xchange"><img src="https://thecleft.org/wp-content/themes/Cleft_2012/img/banners/xchange.png" alt="exhange" width="940" height="400" style="border: 5px solid #B4D333;" /></a></li>
					<li class="hidden"><a href="https://thecleft.org/volunteers"><img src="https://thecleft.org/wp-content/themes/Cleft_2012/img/banners/Rev_Leaders.png" alt="Rev Leaders" width="940" height="400" style="border: 5px solid #fff;" /></a></li>
					
					
				</ul><!-- // promo list -->
				
			</div><!-- //promo-container -->
			<script type="text/javascript">
				jQuery(function($){
					
					// Full options at http://jquery.malsup.com/cycle/options.html
					$('#promo_01 .promos').cycle({
						fx: 		'scrollHorz', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
						pager: 		'#promo_01 .promo-navigation',
						pause: 		1
					});
					
				});
			</script>
			
		
		</div><!--//grid_12-->
        
        
           </div><!-- //container_12 -->

</div><!-- //main -->
<?php get_footer(); ?>