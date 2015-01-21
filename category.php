<?php
/*
Template Name: Category
*/
?>

<?php get_header(); ?>
<div id="content" class="content category">

<style>
	.categoryTitle {
		font: bold 25px Droid Sans, Helvetica, Arial, sans-serif;
		color: #333;
		clear: left;
	}
	.CatDescription, .CatDescription p {
		color: #9E9E9E;
	}
	div.post-category {
		display: none;
	}

</style>

<div class="content-title">

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>


		<h1>
			<div class="categoryTitle"><?php single_cat_title(); ?></div>
			<span class="CatDescription"><?php echo category_description(); ?></span>
		</h1>


    <a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' 
class="flip"'; ?>></a>
</div>

<?php get_template_part('loop'); ?>

<?php get_template_part('pagination'); ?>

<?php get_footer(); ?>
