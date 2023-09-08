<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-0" class="post no-results not-found">
		<header class="entry-header">
			<h1 class="entry-title"><?php _e( '未找到任何内容', 'twentytwelve' ); ?></h1>
		</header>

		<div class="entry-content">
			<p><?php _e( '抱歉，没有找到任何结果，要不搜索一下吧。', 'twentytwelve' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</article><!-- #post-0 -->
