<?php 
$local = dirname(__FILE__);
	// echo $local.'<br>';
include('sharedviews/header.php'); ?>
<div class="container">
	<div>
		<script type="text/javascript" src="http://app.ecwid.com/script.js?2557029" charset="utf-8"></script>
		<!-- remove layout parameter if you want to position minicart yourself -->
		<script type="text/javascript"> xMinicart("style=","layout=attachToCategories"); </script>
	</div>
	<div id="my-store-2557029">This store is powered by Ecwid - <a href="http://www.ecwid.com">Shopping Cart Software</a>. If you your browser does not support JavaScript, please proceed to its <a href="http://app.ecwid.com/jsp/2557029/catalog">simple HTML version</a>.</div><div>
		<script type="text/javascript" src="http://app.ecwid.com/script.js?2557029" charset="utf-8"></script><script type="text/javascript"> xProductBrowser("categoriesPerRow=3","views=grid(3,3) list(10) table(20)","categoryView=grid","searchView=list","style=","id=my-store-2557029");</script>
	</div>
</div><?php // off index container ?>
<?php include('sharedviews/footer.php'); ?>