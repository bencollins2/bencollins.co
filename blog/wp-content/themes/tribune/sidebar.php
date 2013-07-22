<div id="sidebar">

	<ul id="widgets">

	<?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>

		<li class="widget">
			<h2>Archives</h2>
			<ul>
				<?php wp_get_archives('type=monthly'); ?>
			</ul>
		</li>
		
		<li class="widget">
			<h2>Categories</h2>
			<ul>
				<?php wp_list_categories('sort_column=name&title_li='); ?>
			</ul>
		</li>
		
		<li class="widget">
			<h2>Blogroll</h2>
			<ul>
				<?php get_links(2, '<li>', '</li>'); ?>
			</ul>
		</li>

	<?php endif; ?>

	</ul>
			
</div>