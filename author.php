<?php
/*
Template Name: Author bio page
*/
?>

<?php get_header(); ?>

<style>
	h1 {
		font-family: Droid Sans, Helvetica, Arial, sans-serif !important;
	}
	h4 {
		font: 20px Droid Sans, Helvetica, Arial, sans-serif !important;
	}
	a {
		text-decoration: none;
		border-bottom: none !important;
	}
	a.authorPageArticleLink:hover {
		color: #d62323;
	}
	span.cat a {
		font: bold 12px Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
		text-transform: uppercase;
		letter-spacing: 1px;
		color: #8C8C8C !important;
	}
	span.issue { color:#8C8C8C; }
	span.issue a {
		font: 12px Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
		text-transform: uppercase;
		color: #8C8C8C !important;
	}
	span.artTitle a {
		font: 16px Droid Serif, Georgia, serif;
		color: #BF2222 !important;
	}
	span.artTitle a:hover { color: #d62323 !important; }
	span.authorPageBlurb {
		font: 14px Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
	}
	span.authorPageJobTitle {
		font: normal 16px Droid Sans, Helvetica Neue, Helvetica, Arial, sans-serif;
		text-transform: uppercase;
		letter-spacing: 1px;
		color: #808080 !important;
		text-align: left;
		display: block;
		/* position: absolute;
		right: 5px;
		top: 29px; */
	}
	img.authorpagephoto {
	float: left;
	margin: 0px 15px 15px 0px !important;
	}
	div.post-meta {
		padding-bottom: 5px !important;
	}
	.sidebar { display: none; }
</style>

<div id="content" class="content authorpage">
	<div class="entry">
		<div class="page type-page hentry single clear">
			<!-- This sets the $curauth variable -->
			<?php
			if(isset($_GET['author_name'])) :
			$curauth = get_userdatabylogin($author_name);
			else :
			$curauth = get_userdata(intval($author));
			endif;
			?>
			<div class="post-meta">
				<h1><?php echo $curauth->display_name; ?>
				<span class="authorPageJobTitle"><?php the_author_meta( jobtitle, $curauth->ID ); 
?></span></h1>
			</div>
			<div class="post-content">
				<? userphoto_the_author_photo('','',array('class' => 'authorpagephoto')); ?>
				<span class="authorPageBlurb"><?php echo $curauth->user_description; ?></span>

				<hr style="clear:both;" />

				<div style="clear: both; padding: 5px 0px;">
				<h4>Articles by <?php echo $curauth->first_name; ?>:</h4>

				<!-- The Loop -->
				<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
					<p>
				<span class="cat"><?php the_category(' / ');?></span>
				<span class="issue"> | <a href="/<?php the_time('Y'); ?>/<?php the_time('m'); 
?>/"><?php the_time('F j, Y'); ?></a></span>
				<br />
				<span class="artTitle"><a class="authorPageArticleLink" href="<?php the_permalink() 
?>" rel="bookmark" title="<?php the_title(); ?>">
				<?php the_title(); ?></a></span>
				</p>
				<?php endwhile; else: ?>
				<p><?php _e('No posts by this author.'); ?></p>
				<?php endif; ?>
				<!-- End Loop -->

				</div> <!-- end article list -->
			</div> <!-- end .post-content -->
		</div>
	</div> <!-- /.entry -->
</div> <!-- /.content -->

<?php get_footer(); ?>
