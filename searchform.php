<?php
/*
Template Name: Search box & share buttons in header
*/
?>

<div class="search">

<!-- google site search -->
<div style="width: 250px; height: 61px;">
<script>
  (function() {
	var cx = '010634391660698898078:4a-s3dnx8me';
	var gcse = document.createElement('script');
	gcse.type = 'text/javascript';
	gcse.async = true;
	gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		'//www.google.com/cse/cse.js?cx=' + cx;
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>

<p class="follow-sprite">
		<a class="FB-follow" href="http://www.facebook.com/aragonoutlook" target="_blank">
			<img class="emptypixel" src="http://aragonoutlook.org/images/empty-pixel.gif"/>
		</a>
</p>
<p class="follow-sprite" style="margin-top: 3px;">
		<a class="Twit-follow" href="http://www.twitter.com/aragonoutlook" target="_blank">
			<img class="emptypixel" src="http://aragonoutlook.org/images/empty-pixel.gif"/>
		</a>
</p>

</div>
