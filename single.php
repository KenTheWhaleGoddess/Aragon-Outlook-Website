<?php get_header(); ?>
<div id="content" class="content post">

    <?php if ( have_posts() ) { ?>
        <?php while ( have_posts() ) { 
			the_post(); ?>

			<div class="content-title">
				<?php the_category(' <span>/</span> '); ?>

<!-- Print button --> <?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>

			</div>
		<div class="entry">
            <div <?php post_class('single clear'); ?> id="post_<?php the_ID(); ?>">
                <div class="post-meta">
                    <h1><?php the_title(); ?></h1>
                    by <span class="post-author">
			<!-- <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" 
title="Posts by <?php the_author(); ?>"><?php the_author(); ?></a>--></span>
			<?php
			if(function_exists('coauthors_posts_links'))
				coauthors_posts_links();
			else
				the_author_posts_link(); ?>
			 on <span
                        class="post-date"><a data-instant href="/<?php the_time(__('Y')) ?>/<?php 
the_time(__('m')) ?>/"><?php the_time(__('F j, Y')) ?></a></span>. <!--&bull; 
<span><?php the_time() ?></span>--> <?php edit_post_link( __( 'Edit entry'), 
'&bull; '); ?><a href="#livefyre-comments" class="post-comms"><?php 
comments_number(__('No Comments'), __('1 Comment'), __('% Comments'), '', __(
'Comments Closed') ); ?></a></div>

<!-- Start of post content -->
				
                <div class="post-content">

			<span class=note><?php echo get_post_meta($post->ID, 'note', true); ?></span>

			<?php the_content(); ?>

			<!-- FB recommendations popup -->
			<fb:recommendations-bar site="aragonoutlook.org" read_time="10"></fb:recommendations-bar>

			<span class=end-byline><?php echo get_post_meta($post->ID, 'endnote', true); ?></span>
			<br />
			<span class=end-byline><?php echo get_post_meta($post->ID, 'update', true); ?></span>

			<div class="bottom-share-buttons">
				<ul>
					<li id="FB" style="margin: 0 0 0 20px; float: left; max-height: 40px;">
						<iframe src="//www.facebook.com/plugins/like.php?href=<?php the_permalink(); 
?>&amp;width=125&amp;height=46&amp;colorscheme=light&amp;layout=button_count&am
p;action=like&amp;show_faces=false&amp;send=true&amp;appId=146716895537285" 
scrolling="no" frameborder="0" style="border:none; overflow:hidden; 
width:125px; height:46px;" allowTransparency="true"></iframe>
					</li>

					<li id="Twit">
						<a href="https://twitter.com/share" class="twitter-share-button" 
data-via="aragonoutlook" data-dnt="true">Tweet</a>
						<script>!function(d,s,id){var 
js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElemen
t(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertB
efore(js,fjs);}}(document,"script","twitter-wjs");</script>
					</li>
					
					<li id="googleplus" style="margin: 0 20px 0 0; float: right;">
						<!-- Place this tag where you want the +1 button to render. -->
						<div class="g-plusone" data-size="medium"></div>

						<!-- Place this tag after the last +1 button tag. -->
						<script type="text/javascript">
								  (function() {
								    var po = document.createElement('script'); po.type = 
'text/javascript'; po.async = true;
								    po.src = 'https://apis.google.com/js/plusone.js';
								    var s = document.getElementsByTagName('script')[0]; 
s.parentNode.insertBefore(po, s);
								  })();
								</script>
					</li>
				</ul>
			</div> <!-- End of bottom share buttons -->

			<div class="advertisement-notice" style="margin: 1.5em 0 0.5em;">Advertisement</div>
			<div class="article-footer-ad">
				<!-- Outlook-article-BTF-468x60 -->
				<div id='div-gpt-ad-1392342608875-0' style='width:468px; height:60px;'>
				<script type='text/javascript'>
				googletag.cmd.push(function() { googletag.display('div-gpt-ad-1392342608875-0'); });
				</script>
				</div>
			</div>

<a href="http://aragonoutlook.org/distinction.php" style="display: none;">experimental</a>

					<h3 id="relatedPostsThumbsTitle">You might also like:</h3>
					<?php get_related_posts_thumbnails(); ?>
					
					
				</div>
	
<!-- End of post content -->


                <!-- <div class="post-footer"><?php the_tags(__('<strong>Tags: </strong>'), ', '); 
?></div> -->
            </div>

        </div>

        <?php } 
		} ?>

<?php comments_template(); ?>

<?php get_footer(); ?>
