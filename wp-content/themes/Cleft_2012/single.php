<?php get_header(); ?>
<div id="main" class="clearfix">
	
    <div class="container_12">
    	

        <div class="clear"></div><!--//clear columns-->
        	<div class="grid_5">
        		<img src="http://thecleft.org/wp-content/themes/Cleft_2012/img/Side_Image.png" alt="Ad" />               
        	</div><!--//grid_5-->
        
        
        <div class="grid_7">
            <div class="post_blog">
            	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            	<h2 class="entry-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
            	<p class="postmeta">Posted on <?php echo date('F jS Y'); ?></p>
            	<div class="entry-content clearfix">
            		<?php the_content(); ?>
            		<?php endwhile; else: ?>
            		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
            		<?php endif; ?>            		
            	</div>
            	<p class="postmeta"><a href="blog-single.html"><?php comments_number( 'no responses', 'one response', '% responses' ); ?> </a> - Posted in <?php the_category(', ') ?></p>
            </div><!--//post-->
            
        </div><!--//grid_7-->
        
        <div class="clear"></div><!--//clear columns-->
        
    </div><!-- //container_12 -->

</div><!-- //main -->
<?php get_footer(); ?>