<div id="main_content_bottom"></div>
</div>
<div class="footer-wrap">
<div id="footer">        
		<div class="left-col">           
                       <h4><?php _e('Tag Cloud'); ?></h4>             			
			<ul class="footer-misc">                           
		<li><?php wp_tag_cloud('smallest=8&largest=18&number=35&orderby=name'); ?></li>	                                    
			</ul>
		</div>

		<div class="left-col">
			<h4>Recent Posts</h4>
			<?php query_posts('showposts=5'); ?>
			<ul class="footer-misc">
			<?php while (have_posts()) : the_post(); ?>
				<li>
				  <strong><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php _e('Permanent link to'); ?> <?php the_title(); ?>"><?php the_title(); ?></a></strong>					
				</li>
			<?php endwhile;?>
			</ul>
		</div>
                
		<div class="right-col">			
			<h4>About The Author: &nbsp;<?php the_author_posts_link(); ?></h4>
                            <?php
	                     $author_email = get_the_author_email();
	                     echo get_avatar($author_email, '60', 'wavatar');
                            ?>	               
	                   <?php the_author_description(); ?>			
		</div>		

</div>
<div id="credits"><p>Proudly Powered by <a href="http://www.wordpress.org">WordPress</a> | Theme by <a href="http://www.the-cloisters.net">The Cloisters</a> | <a href="<?php bloginfo('rss2_url'); ?>" class="rss">Entries RSS</a> &nbsp;<a href="<?php bloginfo('comments_rss2_url'); ?>" class="rss">Comments RSS</a></p></div>
<div id="footer_bottom"></div>
</div>
</div>
<?php wp_footer(); ?>
</body>
</html>