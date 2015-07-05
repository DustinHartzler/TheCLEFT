<php
/*
Template Name: Volunteer
*/
?>
<?php get_header(); ?>
<div id="main" class="clearfix">
            <div class="container_12">
                
                
                <div class="grid_5">
                	<object width="381" height="223"><param name="movie" value="http://www.youtube.com/v/gVyJwiA76gQ?version=3&amp;hl=en_US&amp;rel=0"></param><param name="allowFullScreen" value="true"></param><param name="allowscriptaccess" value="always"></param><embed src="http://www.youtube.com/v/gVyJwiA76gQ?version=3&amp;hl=en_US&amp;rel=0" type="application/x-shockwave-flash" width="381" height="223" allowscriptaccess="always" allowfullscreen="true"></embed></object>
                	<div class="clear" style="height: 30px;"></div><hr><br>
					<img src="http://thecleft.org/wp-content/themes/Cleft_2012/img/JointheTeamPage.png" alt="Apex" width="350px" />               
                </div><!--//grid_4-->
				
                <div class="grid_7">
                	<div class="entry-content">
                		
                		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                			<h1 class="entry-title"><?php the_title(); ?></h1>
                				<?php the_content(); ?>
                		<?php endwhile; else: ?>
                		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
                		<?php endif; ?>
                	</div><!-- end .entry-content -->
					
					
				</div><!--//grid_8-->
                
                
                


			</div><!-- //container_12 -->
        </div><!-- //main -->

<?php get_footer(); ?>