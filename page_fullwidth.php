<?php
/*
Template Name: Full-width page
*/
?>

<?php get_header(); ?>

<div id="content" class="content page fullwidth">

	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<div class="entry">
			<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
				<div class="post-meta">
					<h1><?php the_title(); ?></h1>
					<?php edit_post_link( __( 'Edit entry'), '&bull; '); ?>
					<?php if ( comments_open() ) : ?>
						<a href="#comments" class="post-comms"><?php comments_number(__('No Comments'), __('1 Comment'), __('% Comments'), '', __('Comments Closed') ); ?></a>
					<?php endif; ?>
				</div>

<!-- start of page content -->
				<div class="post-content"><?php the_content(); ?></div>
<!-- end of page content -->

			  <!--  <div class="post-footer"><?php the_tags(__('<strong>Tags: </strong>'), ', '); ?></div> -->
			</div>
		</div>

		<?php endwhile; ?>
	<?php endif; ?>

<?php comments_template(); ?>

<?php get_footer(); ?>
