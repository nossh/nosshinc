<?php
	//Variables
	$success = $error = "";
	$NosshincEmail = "nosshinc@gmail.com";

//Validate user data
	function userData($data)
	{
		$data = htmlspecialchars($data);
		$data = stripslashes($data);
		$data = trim($data);

		return $data;
	}
	if (isset($_POST['send'])) {
		$name = userData($_POST['name']);
		$email = userData($_POST['email']);
		$phone = userData($_POST['phone']);
		$message = userData($_POST['message']);

	//Sending email
		$subject = "Customer Enquiry";
		$emailBody = "
			<!DOCTYPE html>
			<html>
			<head>
				<title>New Enquiry From Nosshinc Contact Form</title>
				<style>
					.email-content {
						width: 100%;
						margin: auto;
						border: 2px #8b008b solid;
						padding: 23px;
					}
					.email-content p.heading {
						background-color: #8b008b;
						color: #fff;
						text-align: center;
						padding: 10px;
					}
					.email-content p {
						font-weight: bold;
					}
					.email-content p span {
						font-weight: normal;
					}
					.email-content div.message-body p{
						text-align: justify;
						background: #fff;
						color: #000;
						font-weight: normal;
						padding: 0;
					}
				</style>
			</head>
			<body>
				<div class='container'>
					<div class='email-content'>
						<p class='heading'>Enquiry Details</p>
						<p>Name: <span> $name </span></p>
						<p>Phone: <span> $phone </span></p>
						<p class='message'>Message</p>
						<div class='message-body'>
							<p> $message
							</p>
						</div>
					</div>
				</div>
			</body>
			</html>
		";
		//  The Content-type header must be set while sending HTML mail.
				$header  = 'MIME-Version: 1.0' . "\r\n";
				$header .= 'Content-type: text/html; charset=utf-8' . "\r\n";
				
				//Additional headers
				$header .= 'To: $NosshincEmail' . "\r\n";
				$header .= 'From: $name @No Inc.' . "\r\n";
				
				//Mail it
				mail($NosshincEmail, $subject, $emailBody, $header);

				
		// Thank you message
				$subject = "Enquiry received @ Nossh Inc.";
				
				//Additional headers
				$header .= 'To: $email' . "\r\n";
				$header .= 'From: $NosshincEmail : Nossh Inc' . "\r\n";
				$emailBody = "
					<!DOCTYPE html>
						<html>
						<head>
							<title>New Enquiry From Nosshinc Contact Form</title>
							<style>
								.email-content {
									width: 100%;
									margin: auto;
									border: 2px #8b008b solid;
									padding: 23px;
								}
								.email-content div:nth-child(1) {
									width: 55px;
									margin: auto;
								}
								.email-content div img {
									width: 50px;
									height: 50px;
								}
								.email-content div.message-body p{
									text-align: justify;
									background: #fff;
									color: #000;
									font-weight: normal;
									padding: 0;
								}
							</style>
						</head>
						<body>
							<div class='container'>
								<div class='email-content'>
									<div>
										<a href='https://www.nosshinc.com'>
											<img src='images/logo_smaller.png'>
										</a>
									</div>
									<div class='message-body'>
										<p>
											Hello $name ,<br><br>
											Thank you for reaching out to us.<br>
											We will get back to you as soon as possible.<br><br>

											Nossh Inc. Team.
										</p>
									</div>
								</div>
							</div>
						</body>
						</html>
				";
				//Mail it
				mail($email, $subject, $emailBody, $header);

				$success = "<p class='alert alert-success'>Thank you for your message. We will get back to you soonest.</p>";
	}
?>
<?php
	include 'includes/header.php';
?>
<!-- inner page banner -->
<section class="inner-page-banner">
	<div class="page-heading text-center">
		<h2>Contact Page</h2>
		<span class="section_1-breadcrumbs"><a href="index.php"><i class="fa fa-home home_1"></i> Home</a> <span>/ Contact</span></span>
	</div>
</section>
<!-- //inner page banner -->

<!-- contact -->		
<section class="contact py-5">
	<div class="container">
		<div class="heading pb-4">
			<h3 class="heading mb-2 text-center"> <span>Contact </span> Us </h3>
			<p class="para mb-5 text-center">Is there anything you want us to know, do for you?

Talk to us today by filling the form below. We will be glad to here from you.</p>
		</div>
		<div class="row contact-agileinfo">
			<div class="col-md-7 contact-right">
			<?php echo $success; ?> 
				<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">  
					<input type="text" name="name" placeholder="Name" required="">
					<input type="email" class="email" name="email" placeholder="Email" required="">
					<input type="text" name="phone" placeholder="Phone" >
					<textarea name="message" placeholder="Message" required=""></textarea>
					<div class="read mt-3">
					<button type="submit" name="send">
						<a href="#">Submit <span class="btn ml-2"><i class="fas fa-arrow-right" aria-hidden="true"></i></span></a>
					</button>
						
					</div>	
				</form>
			</div>
			<div class="col-md-5 mt-md-0 mt-5 contact-left">
				<div class="address">
					<h5>Address:</h5>
					<p><span class="fa fa-home"></span>Favour of God Building behind Farm Suport, Ilesha Express Way Akure, Ondo State.</p>
				</div>
				<div class="address address-mdl">
					<h5>Phones:</h5>
					<p><span class="fa fa-phone"></span> +234(0)817 628 1852</p>
					<p><span class="fa fa-mobile"></span>+234(0)810 893 8172</p>
				</div>
				<div class="address">
					<h5>Email:</h5>
					<p><span class="fa fa-envelope"></span> <a href="mailto:nosshinc@gmail.com">nosshinc@gmail.com</a></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="agileits-w3layouts-map">
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3957.5474314023636!2d5.158900102290354!3d7.292218871689745!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sng!4v1571179762602!5m2!1sen!2sng" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>
<!-- //contact -->	

<!-- //contact -->



<?php
	include 'includes/footer.php';
?>