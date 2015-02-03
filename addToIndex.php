<?php get_header(); ?>


<div id="column1" style="float: left; margin: 0;"> <?php //separate into columns. idk why this width works but dont change ?>
<div style="height:310px;width:310px;border:solid 2px 
#aeaeae;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">

<br></br>
<div class="box"> <?php //Features box starts here ?>
	<h1>Features</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>










<div class="content-title">

    <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>


		<h1>
			<div class="categoryTitle"><?php single_cat_title(); ?></div>
			<span class="CatDescription"><?php echo category_description(); ?></span>
		</h1>


    <a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php get_template_part('loop'); ?>











</div>
<div style="height:310px;width:310px;border:solid 2px 
#aeaeae;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">

<br></br>
<div class="box"> <?php //Opinion box starts here ?>
	<h1>Opinion</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php //OPINION article loop here ?>

</div>
</div> <?php //End column 1 ?>

<div id="column2" style="float: left; margin: 0; width: 50%"> <?php //column 2. idk why this width works but dont change ?>
<div style="height:310px;width:310px;border:solid 2px 
#aeaeae;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">

<br></br>
<div class="box"> <?php //News box starts here ?>
	<h1>News</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php //NEWS article loop here ?>

</div>

<div style="height:310px;width:310px;border:solid 2px 
#aeaeae;overflow:scroll;overflow-x:hidden;overflow-y:scroll;"

<div class="box"> <?php //sports box starts here ?>
	<h1>Sports</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php //SPORTS article loop here ?>

</div>
</div> <?php //End column 2 ?>
