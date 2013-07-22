<?php get_header(); ?>

<?php if (have_posts()) : ?>
  
	<?php while (have_posts()) : the_post(); ?>

	<!-- post -->
	<?php if(is_category() || is_day() || is_month() || is_year() || is_search() || is_tag()) { ?>

	<div <?php post_class('wrapout'); ?> id="post-<?php the_ID(); ?>">
		<div class="wrapin">
			<span class="post-date"><?php the_time('j M y'); ?></span>
			<h1 class="post-head"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="post-text">
				<?php the_excerpt(); ?>
			</div>
			<div class="post-foot wrapout">
			<div class="wrapin">
				<span class="post-comments">
					<?php comments_popup_link('0&nbsp;Comments', '1&nbsp;Comment', '%&nbsp;Comments','comments-link',''); ?>
				</span>
				<div class="post-category"><span>Filed in</span> <?php the_category(', ') ?></div>
				<span class="post-author">&nbsp; Posted by <?php the_author_posts_link() ?></span>
				<?php edit_post_link('Edit Post', '<span class="post-edit">', '</span>'); ?>
				<div class="post-tag"><?php the_tags('<span>Tagged</span> ', ', ', ''); ?></div>
			</div>
			</div>
		</div>
	</div>

	<?php } else { ?>

	<div <?php post_class('wrapout'); ?> id="post-<?php the_ID(); ?>">
		<div class="wrapin">
			<span class="post-date"><?php the_time('j M y'); ?></span>
			<h1 class="post-head"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<div class="post-text">
				<?php the_content('<span class="continue-reading">Continue Reading &raquo;</span>'); ?>
				<b><?php wp_link_pages(); ?></b>
			</div>
			<div class="post-foot wrapout">
				<div class="wrapin">
					<span class="post-comments">
						<?php comments_popup_link('0&nbsp;Comments', '1&nbsp;Comment', '%&nbsp;Comments','comments-link',''); ?>
					</span>
					<div class="post-category"><span>Filed in</span> <?php the_category(', ') ?></div>
					<span class="post-author">&nbsp; Posted by <?php the_author_posts_link() ?></span>
					<?php edit_post_link('Edit Post', '<span class="post-edit">', '</span>'); ?>
					<div class="post-tag"><?php the_tags('<span>Tagged</span> ', ', ', ''); ?></div>
				</div><!-- /wrapin -->
			</div><!-- /post-foot -->
			<?php comments_template(); ?>
		</div><!-- /wrapin -->
	</div><!-- /post -->

	<?php } ?> 
	<!--/post -->
	
	<?php endwhile; ?>

	<div class="navigation leftspace">
		<div class="alignleft"><h2><?php next_posts_link('&laquo; Older Posts') ?></h2></div>
		<div class="alignright"><h2><?php previous_posts_link('Newer Posts &raquo;') ?></h2></div>
	</div>

	<?php else : ?>

	<div class="post wrapout">
		<div class="wrapin">
			<h1 class="post-head">Not found</h1>
			<div class="post-text">
				<p>The page you were looking for could not be found</p>
			</div>
		</div>
	</div>
		
<?php endif; ?>

<?php get_footer(); ?>