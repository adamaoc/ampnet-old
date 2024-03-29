<?php 
	$local = dirname(__FILE__);
	if (isset($_POST['Name'], $_POST['Email'], $_POST['Message'])){
		include('NiceSimpleContactForm/contactengine.php');
		$formStatus = validate_send_email($_POST['Name'], $_POST['City'], $_POST['address'], $_POST['Email'], $_POST['Message']);
	} 

?>

<div class="col-xs-12 col-sm-12">
	<h2>
		<span class="glyphicon glyphicon-comment"></span>
		contact Us 
	</h2>
	<h3><span>- (214) 702-6752 -</span> Dallas, TX</h3>
	<div class="col-xs-12 col-sm-6 col-md-6">
		<p>Have questions or concerns for our team? Shoot us an email here and we'll get back with you as soon as possible.</p>
		<div class="hidden-xs">
			<p>Give us your name, email address, city where you reside, and a detailed message here.</p>
			<p>We love hearing from our clients and potential clients, so if you have any questions or concerns please do not hesitate to contact us!</p>
		</div>
		<?php 
		if(isset($formStatus)) { 
			if ($formStatus == 'success') {
				$sendSuccess = true;
				echo "<p>Thanks for contacting us! We'll be getting back to you as soon as possible. </p>";
			} else {
		?>
			<div class="alert alert-danger"> 
				<ul>
					<?php foreach ($formStatus as $status) {
						echo '<li>'.$status.'</li>';
					} ?>
				</ul>
			</div>
		<?php } 
		} ?>
	</div>
	<a id="contact"></a>
	<div class="col-xs-12 col-sm-6 col-md-6">
		<?php 
		if (isset($sendSuccess)) { 
			echo "<p>SENT!</p>";
		} else { 
			?>
		<form method="post" action="#contact" role="form" class="contact-form">
  			<div class="form-group">
				<label for="Name">Name:</label>
				<input type="text" name="Name" id="Name" class="form-control" placeholder="Your Name" value="<?php if(isset($_POST['Name'])) { echo htmlspecialchars($_POST['Name']); } ?>" />
			</div>
			<div class="form-hidden">
				<label for="moreinfo" class="dontshow">testing</label>
				<input type="input" name="moreinfo" id="moreinfo" class="dontshow" value="" />
			</div>
			<div class="form-group">
				<label for="City">City / State:</label>
				<input type="text" name="City" id="City" class="form-control" placeholder="City / State" value="<?php if(isset($_POST['City'])) { echo htmlspecialchars($_POST['City']); } ?>" />
			</div>
			<div class="form-group">
				<label for="Email">Email:</label>
				<input type="text" name="Email" id="Email" class="form-control" placeholder="youremail@youremail.com" value="<?php if(isset($_POST['Email'])) { echo htmlspecialchars($_POST['Email']); } ?>" />
			</div>
			<div class="form-group">
				<label for="Message">Message:</label><br />
				<textarea name="Message" rows="10" id="Message" class="form-control" placeholder="Your Detailed Message HERE!"><?php if(isset($_POST['Message'])) { echo htmlspecialchars($_POST['Message']); } ?></textarea>
			</div>
			<input type="submit" name="submit" value="Send Message" class="btn btn-default" />
		</form>
		<?php } ?>
	</div>

</div>
