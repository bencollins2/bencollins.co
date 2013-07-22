<?php
if ( function_exists('register_sidebars') )
    /*register_sidebars();*/
	register_sidebar();

/* loads legacy.comments.php as comment file when using a Wordpress version pre-2.7 */
add_filter( 'comments_template', 'legacy_comments' );
function legacy_comments( $file ) {
	if ( !function_exists('wp_list_comments') )
		$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}

/* custom comment design */
function sepcomments($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>

<li id="li-comment-<?php comment_ID() ?>">
<!-- comment -->
	<div <?php comment_class('wrapout'); ?> id="comment-<?php comment_ID(); ?>">
		<div class="wrapin">
			<div class="comment-avatar">
				
				<?php echo get_avatar($comment,$size='50' ); ?>

			</div>
			<div class="comment-text">
				<div class="comment-meta">
					<div class="comment-reply">
						<?php edit_comment_link(__('Edit'),'',' &nbsp; ') ?>
						<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
					</div>
					<div class="comment-writer"><?php printf(__('%s'), get_comment_author_link()) ?></div>
					<div class="comment-date">
						<a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a>
					</div>
				</div>

				<?php comment_text() ?>

				<?php if ($comment->comment_approved == '0') : ?>
					<p><em><?php _e('Your comment is awaiting moderation.') ?></em></p>
				<?php endif; ?>
			</div>
		</div>
	 </div>
<!-- /comment -->
<?php
}

/* custom comment design for printing trackbacks */
function septrackbacks($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class('wrapout'); ?> id="comment-<?php comment_ID() ?>">
		<div class="wrapin">
			<?php printf(__('%1$s'), get_comment_date('d M y')) ?>: 
			<?php printf(__('%s'), get_comment_author_link()) ?>
		</div>
<?php
}
?>