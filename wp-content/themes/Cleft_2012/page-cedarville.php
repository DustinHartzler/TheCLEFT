<php
/*
Template Name: Cedarville
*/
?>
<?php get_header(); ?>
<div id="main" class="clearfix">
            <div class="container_12">
                
                
                <div class="grid_5">
					<img src="https://thecleft.org/wp-content/themes/Cleft_2012/img/Cedarville.jpg" alt="Cedarville University" width="350px" />               
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