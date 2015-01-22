<?php get_header(); ?>


<div id="column1" style="float: left; margin: 0;"> 
<div style="height:310px;width:310px;border:solid 2px 
grey;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">

<br></br>
<div class="content-title">
	<h1>Features</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php //FEATURES article loop here ?>


</div>
<div style="height:310px;width:310px;border:solid 2px 
grey;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">

<br></br>
<div class="content-title">
	<h1>Opinion</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php //OPINION article loop here ?>

</div>
</div>

<div id="column2" style="float: left; margin: 0; width: 50%">
<div style="height:310px;width:310px;border:solid 2px 
grey;overflow:scroll;overflow-x:hidden;overflow-y:scroll;">

<br></br>
<div class="content-title">
	<h1>News</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php //NEWS article loop here ?>

</div>

<div style="height:310px;width:310px;border:solid 2px 
grey;overflow:scroll;overflow-x:hidden;overflow-y:scroll;"

<div class="content-title">
	<h1>Sports</h1>
	<a href="javascript: void(0);" id="mode"<?php if ($_COOKIE['mode'] == 'grid') echo ' class="flip"'; ?>></a>
</div>

<?php //SPORTS article loop here ?>

</div>
</div>