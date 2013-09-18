<?php 
$local = dirname(__FILE__);
	// echo $local.'<br>';

include('../sharedviews/header.php'); ?>
<div class="container">
	
	<div class="row">
		
		<div class="col-xs-12">	
			<h1>Your message has been sent!</h1><br />
		</div>
		<div class="col-xs-12 col-sm-6">
			<p><a href="/" class="btn btn-success">Back to Home Page</a></p>
			<p><a href="/store/" class="btn btn-success">Back to Store</a></p>
		</div>
		<div class="col-xs-12 col-sm-6 module">
			<p>Thanks for sending us a message! We'll be getting back with you as soon as possible.</p>
			<p>At Holiday Design we specialize in year around holiday or seasonal decorations and gifts. We pride ourselves on being able to offer these at great prices with a versatile online experience. We are adding inventory all the time but it doesn't last long as most of our products are one and done deals! So get started shopping today and check out our interactive store!</p>
					<p><a class="btn btn-primary btn-lg" href="/store/">Go Shopping &rarr;</a></p>
		</div>
	</div><?php // off row ?>

	</div><?php // off index container ?>
 <?php include('../sharedviews/footer.php'); ?>