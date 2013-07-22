<?php get_header(); ?>

<?php if (have_posts()) : ?>
  
	<?php while (have_posts()) : the_post(); ?>

	<div <?php post_class('post wrapout'); ?> id="post-<?php the_ID(); ?>">
		<div class="wrapin">
			<h1 class="post-head"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="post-text">
				<?php
				$children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0');
				if ($children) { ?>
					<div class="submenu">
						<ul>
							<?php echo $children; ?>
						</ul>
					</div>
				<?php } ?>
				<?php the_content('<span class="continue-reading">Continue Reading &raquo;</span>'); ?>
			</div>
			<?php comments_template(); ?>
		</div><!-- /wrapin -->
	</div><!-- /post -->
	
	<?php endwhile; ?>

	<?php else : ?>

	<div class="post">
		<div class="c1box">
			<h1>Not Found</h1>
			<p>Sorry, but you are looking for something that isn't here.</p>
		</div>
	</div>
		
<?php endif; ?>

<?php get_footer(); ?>