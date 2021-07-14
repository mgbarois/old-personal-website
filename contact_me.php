<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Madeleine Barois | <?php echo $xml->head->title->$lang; ?></title>
<meta name="description" content="">
<meta name="author" content="">

<!-- Favicons
    ================================================== -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
<link rel="apple-touch-icon" href="img/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

<!-- Bootstrap -->
<link rel="stylesheet" type="text/css"  href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">

<!-- Stylesheet
    ================================================== -->
<link rel="stylesheet" type="text/css"  href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/prettyPhoto.css">
<link href="https://fonts.googleapis.com/css?family=Abel|Alegreya+Sans|Dosis|Fira+Sans|Fira+Sans+Condensed|Gothic+A1|Nanum+Gothic|Oxygen|Pontano+Sans|Yanone+Kaffeesatz|Source+Sans+Pro:300" rel="stylesheet">
<script type="text/javascript" src="js/modernizr.custom.js"></script>
</head>
<body>

<section class="contact-me">
	<div class="container">
		<div class="message">

			<?php
			
			if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
			{
				if ($lang == 'en')
				{
					echo "<p>The e-mail address you gave is not valid.<p><a href=\"en.php\"><button type=\"submit\" class=\"btn btn-default\">Back to the page</button></a>";
				}
				else 
				{
					echo "<p>L'adresse mail que vous avez renseignée n'est pas valide.</p><a href=\"fr.php\"><button type=\"submit\" class=\"btn btn-default\">Retour à la page</button></a>";
				}
				return false;
			}
				
			$name = $_POST['name'];
			$email_address = $_POST['email'];
			$message = $_POST['message'];
			$lang = $_POST['lang'];
				
			// Create the email and send the message
			$to = 'mgbarois@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
			$email_subject = "Website Contact Form:  $name";
			$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nMessage:\n$message";
			$headers = "From: noreply@yourdomain.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
			$headers .= "Reply-To: $email_address";	
			mail($to,$email_subject,$email_body,$headers);
			if ($lang == 'en')
			{
				echo "<p>Your message was successfully sent. I'll get back to you soon!</p><a href=\"en.php\"><button type=\"submit\" class=\"btn btn-default\">Back to the page</button></a>";
			}
			else 
			{
				echo "<p>Votre message à bien été envoyé. Je vous répondrez dès que possible !</p><a href=\"fr.php\"><button type=\"submit\" class=\"btn btn-default\">Retour à la page</button></a>";
			}
			return true;			
			?>

		</div>
	</div>
</section>
</body>

<?php include 'footer.php';?>

<html>