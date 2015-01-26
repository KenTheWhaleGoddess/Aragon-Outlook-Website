<?php
/*
Template Name: Loop
*/
?>

<?php if ( have_posts() ) { ?>

	<div id="loop" class="<?php if ($_COOKIE['mode'] == 'grid') echo 'grid'; else echo 'list'; ?> 
clear">

	<?php while ( have_posts() ) {
	the_post(); ?>

		<div <?php post_class('post clear'); ?> id="post_<?php the_ID(); ?>">

			<?php if ( has_post_thumbnail() )  { ?>
			<a href="<?php the_permalink() ?>" class="thumb" data-instant><?php the_post_thumbnail(
'thumbnail', array(
						'alt'	=> trim(strip_tags( $post->post_title )),
						'title'	=> trim(strip_tags( $post->post_title )),
					)); } ?></a>
			<?php } ?>

			<div class="post-category"><?php the_category(' / '); ?></div>
			<h2><a data-instant href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<div class="post-meta">by 
		<!-- <span class="post-author"><a href="<?php echo get_author_posts_url(get_the_author_meta(
'ID')); ?>" title="Posts by <?php the_author(); ?>"><?php the_author(); ?></a></span> -->
<?php if(function_exists('coauthors_posts_links'))
	coauthors_posts_links();
else
	the_author_posts_link(); ?>

								   on <span
						class="post-date"><a data-instant href="/<?php the_time(__('Y')) ?>/<?php 
the_time(__('m')) ?>/"><?php the_time(__('F j, Y')) ?></a></span>.<?php 
comments_popup_link(__('No Comments'), __('1 Comment'), __('% Comments'), '', 
__('Comments Closed')); ?> <?php edit_post_link( __( 'Edit entry'), 
'<em></em>'); ?>
			</div>
			<div class="post-content"><?php if (function_exists('smart_excerpt')) 
smart_excerpt(get_the_excerpt(), 27); ?></div>
		</div>

	<?php } ?>

	</div>

<?php } ?>
