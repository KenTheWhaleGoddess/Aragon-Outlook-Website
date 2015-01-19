<div class="sidebar">
		
		<div class="sidebar-ad" style="margin-top: -1em;">
		<div class="advertisement-notice">Advertisement</div>
		<!-- Outlook-sidebar-ATF-300x250 -->
		<div id='div-gpt-ad-1392342608875-1' style='width:300px; height:250px;'>
		<script type='text/javascript'>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392342608875-1'); });
		</script>
		</div>
		</div>

	<?php 
	if (is_single()) { ?> 


		<div class="article-author author-bio-widget widget">
		<h3 class="article-author-h3">About the Author:
			<a data-instant href="<?php echo get_author_posts_url(get_the_author_meta( 'ID' ) ); ?>">
					<?php the_author(); ?>
			</a>
		</h3>
		<div class="gravatar">
				<a data-instant href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
					<? userphoto_the_author_thumbnail(); ?>
				</a>
		</div>
		<div class="author-blurb">
				<?php the_author_description(); ?>
		</div><br />
		</div>
	<?php 


}


else {

	}?>



	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) :
		$widget_args = array(
			'after_widget' => '</div></div>',
			'before_title' => '<h3>',
			'after_title' => '</h3><div class="widget-body clear">'
		);
	?>
  
	<?php endif; ?>

	<div class="sidebar-ad">
		<div class="advertisement-notice">Advertisement</div>
		<!-- Outlook-sidebar-BTF-300x600 -->
		<div id='div-gpt-ad-1392342608875-2'>
		<script type='text/javascript'>
		googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392342608875-2'); });
		</script>
		</div>
	</div>


</div> <!-- end sidebar -->