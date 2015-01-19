<?php
/*
Template Name: Site Archives
*/
?>

<?php get_header(); ?>

<div id="content" class="content page sitearchives">

<div class="entry">

<div class="page type-page status-publish hentry single clear">

<div class="post-meta">
<h1>Look up articles</h1>
</div>

<div class="post-content" >

<center>
	<span class="note">
		For historical print edition archives, see <a href="https://drive.google.com/folderview?id=0BxNx9rQ4Mblybk1HbGNFVDRpbG8&usp=drive_web" target="_blank">this page</a>.
	</span>
</center>

<hr style="clear:both;" />

<div class="archives-page-section monthly">
<h3 class="archives-page-heading">By issue:</h3>
	<ul class="archive-list monthly">
		<?php wp_get_archives('type=monthly'); ?>
	</ul>
</div>

<div class="archives-page-section categories">
<h3 class="archives-page-heading">By category:</h3>
	<ul class="archive-list categories">
		<?php wp_list_categories('orderby=id&title_li='); ?>
	</ul>
</div>

<div class="archives-page-section writers">
<h3 class="archives-page-heading">By writer:</h3>
	<ul class="archive-list authors">
		<?php wp_list_authors('exclude_admin=0'); ?>  
	</ul>
</div>

</div> <!-- /.post-content -->

</div> <!-- /.page.hentry.single.clear -->

</div> <!-- /.entry -->

<?php display_author_media($author_id); ?>

<?php get_footer(); ?>