<php
/*
Template Name: Page with Sidebar
*/
?>
<?php get_header(); ?>
<div id="main" class="clearfix">
            <div class="container_12">
                
                
                <div class="grid_5">
					<img src="https://thecleft.org/wp-content/themes/Cleft_2012/img/Side_Image.png" alt="Ad" />               
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
					
					<div class="post">
						<h2 class="entry-title"><a href="blog-single.html">Sample Headings are Very Exciting</a></h2>
						<p class="postmeta">Posted on Friday, November 22, 2010</p>
						<div class="entry-content clearfix">
							<p><a href="images/samples/04_original.jpg" ><img src="images/samples/04_125x125.jpg" alt="sample" class="left" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis lectus tincidu. Lorem ipsum dolor sit amet pellentesque at dui quis mauris tempor lobortis ut et risus.</p>
							<p>Felis lectus tincidu. Lorem ipsum dolor sit amet. Quisque imperdiet, justo at sollicitudin congue, felis lectus tincidu. <a href="#" class="more-link">Read More...</a></p>
						</div>
						<p class="postmeta"><a href="blog-single.html">16 Comments</a> - Posted in <a href="blog-single.html">General</a>, <a href="blog-single.html">Recent News</a> - Tagged with <a href="blog-single.html">Tag One</a>, <a href="blog-single.html">Tag Two</a></p>
					</div><!--//post-->
					
					<div class="post">
						<h2 class="entry-title"><a href="blog-single.html">Sample Headings are Very Exciting</a></h2>
						<p class="postmeta">Posted on Friday, November 22, 2010</p>
						<div class="entry-content clearfix">
							<p><a href="images/samples/05_original.jpg" ><img src="images/samples/05_125x125.jpg" alt="sample" class="left" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis lectus tincidu. Lorem ipsum dolor sit amet pellentesque at dui quis mauris tempor lobortis ut et risus.</p>
							<p>Felis lectus tincidu. Lorem ipsum dolor sit amet. Quisque imperdiet, justo at sollicitudin congue, felis lectus tincidu. <a href="#" class="more-link">Read More...</a></p>
						</div>
						<p class="postmeta"><a href="blog-single.html">16 Comments</a> - Posted in <a href="blog-single.html">General</a>, <a href="blog-single.html">Recent News</a> - Tagged with <a href="blog-single.html">Tag One</a>, <a href="blog-single.html">Tag Two</a></p>
					</div><!--//post-->
					
					<div class="post">
						<h2 class="entry-title"><a href="blog-single.html">Sample Headings are Very Exciting</a></h2>
						<p class="postmeta">Posted on Friday, November 22, 2010</p>
						<div class="entry-content clearfix">
							<p><a href="images/samples/06_original.jpg" ><img src="images/samples/06_125x125.jpg" alt="sample" class="left" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis lectus tincidu. Lorem ipsum dolor sit amet pellentesque at dui quis mauris tempor lobortis ut et risus.</p>
							<p>Felis lectus tincidu. Lorem ipsum dolor sit amet. Quisque imperdiet, justo at sollicitudin congue, felis lectus tincidu. <a href="#" class="more-link">Read More...</a></p>
						</div>
						<p class="postmeta"><a href="blog-single.html">16 Comments</a> - Posted in <a href="blog-single.html">General</a>, <a href="blog-single.html">Recent News</a> - Tagged with <a href="blog-single.html">Tag One</a>, <a href="blog-single.html">Tag Two</a></p>
					</div><!--//post-->

					<div class="post">
						<h2 class="entry-title"><a href="blog-single.html">Sample Headings are Very Exciting</a></h2>
						<p class="postmeta">Posted on Friday, November 22, 2010</p>
						<div class="entry-content clearfix">
							<p><a href="images/samples/01_original.jpg" ><img src="images/samples/01_125x125.jpg" alt="sample" class="left" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis lectus tincidu. Lorem ipsum dolor sit amet pellentesque at dui quis mauris tempor lobortis ut et risus.</p>
							<p>Felis lectus tincidu. Lorem ipsum dolor sit amet. Quisque imperdiet, justo at sollicitudin congue, felis lectus tincidu. <a href="#" class="more-link">Read More...</a></p>
						</div>
						<p class="postmeta"><a href="blog-single.html">16 Comments</a> - Posted in <a href="blog-single.html">General</a>, <a href="blog-single.html">Recent News</a> - Tagged with <a href="blog-single.html">Tag One</a>, <a href="blog-single.html">Tag Two</a></p>
					</div><!--//post-->
                    
                    <div class="post">
						<h2 class="entry-title"><a href="blog-single.html">Sample Headings are Very Exciting</a></h2>
						<p class="postmeta">Posted on Friday, November 22, 2010</p>
						<div class="entry-content clearfix">
							<p><a href="images/samples/02_original.jpg" ><img src="images/samples/02_125x125.jpg" alt="sample" class="left" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis lectus tincidu. Lorem ipsum dolor sit amet pellentesque at dui quis mauris tempor lobortis ut et risus.</p>
							<p>Felis lectus tincidu. Lorem ipsum dolor sit amet. Quisque imperdiet, justo at sollicitudin congue, felis lectus tincidu. <a href="#" class="more-link">Read More...</a></p>
						</div>
						<p class="postmeta"><a href="blog-single.html">16 Comments</a> - Posted in <a href="blog-single.html">General</a>, <a href="blog-single.html">Recent News</a> - Tagged with <a href="blog-single.html">Tag One</a>, <a href="blog-single.html">Tag Two</a></p>
					</div><!--//post-->
                    
                    <div class="post">
						<h2 class="entry-title"><a href="blog-single.html">Sample Headings are Very Exciting</a></h2>
						<p class="postmeta">Posted on Friday, November 22, 2010</p>
						<div class="entry-content clearfix">
							<p><a href="images/samples/03_original.jpg" ><img src="images/samples/03_125x125.jpg" alt="sample" class="left" /></a>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Felis lectus tincidu. Lorem ipsum dolor sit amet pellentesque at dui quis mauris tempor lobortis ut et risus.</p>
							<p>Felis lectus tincidu. Lorem ipsum dolor sit amet. Quisque imperdiet, justo at sollicitudin congue, felis lectus tincidu. <a href="#" class="more-link">Read More...</a></p>
						</div>
						<p class="postmeta"><a href="blog-single.html">16 Comments</a> - Posted in <a href="blog-single.html">General</a>, <a href="blog-single.html">Recent News</a> - Tagged with <a href="blog-single.html">Tag One</a>, <a href="blog-single.html">Tag Two</a></p>
					</div><!--//post-->
					
					
					
					
					<div class="pagination clearfix" title="Jump to a page...">
						<a class="first" href="#">&laquo; First</a>
						<a class="page" href="#">1</a>
						<span class="current">2</span>
						<a class="page" href="#">3</a>
						<a class="page" href="#">4</a>
						<a class="nextpostslink" href="#">&raquo;</a>
						<a class="larger page" href="#">10</a>
						<a class="larger page" href="#">20</a>
						<a class="larger page" href="#">30</a>
						<span class="extend">...</span>
						<a class="last" href="#">Last &raquo;</a>
					</div>
					
					
					
					
				</div><!--//grid_8-->
                
                
                


			</div><!-- //container_12 -->
        </div><!-- //main -->

<?php get_footer(); ?>