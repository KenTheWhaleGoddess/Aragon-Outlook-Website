<?php
/*
Template Name: Page
*/
?>

<?php get_header(); ?>

<div id="content" class="content page normalwidth">

	<?php if ( have_posts() ) { ?>
		<?php while ( have_posts() ) { the_post(); ?>

		<div class="entry">
			<div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
				<div class="post-meta">
					<h1><?php the_title(); ?></h1>
<!--
					by <span class="post-author"><a href="<?php echo get_author_posts_url( 
get_the_author_meta( 'ID' ) ); ?>" title="Posts by <?php the_author(); ?>"><?php 
the_author(); ?></a></span> on <span
						class="post-date"><?php the_time(__('M j, Y')) ?></span> &bull; <span><?php 
the_time() ?></span>
-->
					<?php edit_post_link( __( 'Edit entry'), '&bull; '); ?>
					<?php if ( comments_open() ) { ?>
						<a href="#comments" class="post-comms"><?php comments_number(__('No Comments'
), __('1 Comment'), __('% Comments'), '', __('Comments Closed') ); ?></a>
					<?php } ?>
				</div>

<!-- start of page content -->
				<div class="post-content"><?php the_content(); ?></div>
<!-- end of page content -->

			  <!--  <div class="post-footer"><?php the_tags(__('<strong>Tags: </strong>'), ', '); ?>
</div> -->
<a href="http://aragonoutlook.org/distinction.php"><!-- contractual-delinquent --></a>
			</div>
		</div>

		<?php }
		} ?>

<?php comments_template(); ?>

<?php get_footer(); ?>