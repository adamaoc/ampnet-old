<?php 
	$local = dirname(__FILE__);
	// echo $local.'<br>';
	if (isset($_POST['Name'])){
		include('NiceSimpleContactForm/contactengine.php');
		$formStatus = validate_send_email($_POST['Name'], $_POST['City'], $_POST['Email'], $_POST['Message']);
	} 

	if (isset($success)) {
		include('contactthanks.php');
	}else{
?>

<div class="col-xs-12 col-sm-12">
	<h2>
		<span class="glyphicon glyphicon-comment"></span>
		contact Us
	</h2>

	<div class="col-xs-12 col-sm-6 col-md-6">
		<p>Have questions or concernes for our team? Shoot us an email here and we'll get beck with you as soon as possible.</p>
		<div class="hidden-xs">
			<p>Give us your name, email address, city where you reside, and a detailed message here.</p>
			<p>We love hearing from our clients and potential clients so if you have any questions or concernes please do not hesitate to contact us!</p>
		</div>
		<?php if(isset($formStatus)) { ?>
		<div class="alert alert-danger"> 
			<ul>
				<?php foreach ($formStatus as $status) {
					echo '<li>'.$status.'</li>';
				} ?>
			</ul>
		</div>
		<?php } ?>
	</div>
	<a id="contact"></a>
	<div class="col-xs-12 col-sm-6 col-md-6">
		<form method="post" action="#contact" role="form" class="contact-form">
  			<div class="form-group">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" class="form-control" placeholder="Your Name" />
			</div>
			<div class="form-group">
				<label for="City">City / State:</label>
				<input type="text" name="City" id="City" class="form-control" placeholder="City / State" />
			</div>
			<div class="form-group">
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" class="form-control" placeholder="youremail@youremail.com" />
			</div>
			<div class="form-group">
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="10" id="Message" class="form-control" placeholder="Your Detailed Message HERE!"></textarea>
			</div>
			<input type="submit" name="submit" value="Send Message" class="btn btn-default" />
		</form>
	</div>

</div>
<?php 
	}
?>