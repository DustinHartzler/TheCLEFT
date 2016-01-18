<?php get_header();?>
<section >

	<div class="shell non-hero background--fill " style="background-image:url(//dg0ddngxdz549.cloudfront.net/images/cached/images/remote/http_dg0ddngxdz549.cloudfront.net/newspring/editorial/fuse_blog/fuse.lastnightatfuse.2x1.notext_1700_850_90_c1.jpg)" data-lazy-load="//dg0ddngxdz549.cloudfront.net/images/cached/images/remote/http_dg0ddngxdz549.cloudfront.net/newspring/editorial/fuse_blog/fuse.lastnightatfuse.2x1.notext_1700_850_90_c1.jpg">
				<div class="overlay overlay--light overlay--gradient">
			
		</div>
	</div>
</section>

<section>
	<div class="shell">
		<div class="grid">
			<div class="grid__item one-whole">
				<div class="grid"><div class="grid__item one-whole  flush">
					<div class="text--constrained">
						<?php if (have_posts()) : 
						while (have_posts()) : the_post(); ?>
						<h2 class="centered"><?php the_title();?></h2>			
						<p class="centered"><?php the_content();?>					</div>
				</div>
			</div>
		</div>
	</div>
</section>
		<?php endwhile; 
			else : 
				echo '<p>'.__('There are no premium content (yet).',THEMENAME).'</p>';
			endif; 
		?>
<?php get_footer();?>