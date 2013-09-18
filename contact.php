<?php 
$local = dirname(__FILE__);
	// echo $local.'<br>';
include('NiceSimpleContactForm/contactengine.php');
if (isset($_POST['Name'])){
	$formStatus = validate_send_email($_POST['Name'], $_POST['City'], $_POST['Email'], $_POST['Message']);
}
include('sharedviews/header.php'); ?>
<div class="container">
	
	<div class="row">
		<div class="col-xs-12 col-sm-6 col-md-6">
			<h1>Contact Holiday Design!</h1>
			<p>Have questions or concernes for our team? Shoot us an email here and we'll get beck with you as soon as possible.</p>
			<div class="hidden-xs">
				<p>Give us your name, email address, city where you reside, and a detailed message here.</p>
				<p>We love hearing from our customers so if you have any questions or concernes please do not hesitate to contact us!</p>
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
		<div class="col-xs-12 col-sm-6 col-md-6">
			<form method="post" action="" role="form" class="contact-form">
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

</div><?php // off index container ?>
<?php include('sharedviews/footer.php'); ?>