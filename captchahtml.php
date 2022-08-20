<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact us - We The Friends | VPS Hosting, Dedicated Hosting & Email Marketing Solutions Provider</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.5">
	<!-- Framework Css -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/bootstrap.min.css">
	<!-- Font Awesome / Icon Fonts -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/font-awesome.min.css">
	<!-- Owl Carousel / Carousel- Slider -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/owl.carousel.min.css">
	<!-- Animations -->
	<link rel="stylesheet" type="text/css" href="assets/css/lib/animations.min.css">
	<!-- Style Theme -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<!-- Light Style Theme -->
	<link rel="stylesheet" type="text/css" href="assets/css/light.css">
	<!-- Responsive Theme -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<script src="https://www.google.com/recaptcha/api.js?render=6LeoYFYhAAAAADVWVE9Kv8o7FaSyimniwuiitG8b"></script>
</head>
<?php
if(isset($_POST['submit'])){
$url= 'https://www.google.com/recaptcha/api/siteverify';
$secret = '6LeoYFYhAAAAAJwQ8LaD7Yjp1QMbIWS7axCqV9hi';
$response = $_POST['token_generate'];
$remoteip = $_SERVER['REMOTE_ADDR'];
$request = file_get_contents($url . '?secret=' .$secret. '&response='.$response);
$result = json_decode($request);
// print_r($result);
}
// if($result->success == true)
// { ?> 
// <script> alert("Data Saved Successfully"); 
// </script>
// <?php
// }
// else{
// ?>
// <script> alert("Data not saved");</script>
// <?php
// }
// ?>
<body class="contact">
<div class="wrapper">
	<!--===================== Header ========================-->
<header class="transparent">
	<div class="container">
		<div class="row">
			<div class="col-md-2">
				<div class="logo"><a href="/"><img src="assets/images/logo.png" alt="logo"></a></div>
			</div>
			<div class="col-md-8">
				<ul class="menu">
					<li><a href="/">Home</a></li>
					<li><a href="vps-hosting">VPS Hosting</a></li>
					<li><a href="dedicated-hosting">Dedicated Server</a></li>
					<li><a href="email-marketing">Email Marketing</a></li>
					<li class="active"><a href="contact-us.php">Contact Us</a></li>
				</ul>
			</div>
			<div class="col-md-2">
				<div class="button-header">
					<a href="https://tawk.to/chat/5bc903a1460a125f2656afd0/default" class="custom-btn"><img src="assets/images/live-chat.svg"> LIVE CHAT</a>
				</div>
			</div>
		</div>
	</div>
	<div class="mobile-block">
		<div class="logo-mobile"><a href="/"><img src="assets/images/logo-light.png" alt="logo"></a></div>
		<a href="#" class="mobile-menu-btn"><span></span></a>
		<div class="mobile-menu">
			<div class="inside">
				<div class="logo">
					<a href="/"><img src="assets/images/logo-light.png" alt="logo"></a>
				</div><!--logo-->
				<ul class="menu panel-group" id="accordion" aria-multiselectable="true">
						<li><a href="/">Home</a></li>
					<li><a href="vps-hosting">VPS Hosting</a></li>
					<li><a href="dedicated-hosting">Dedicated Server</a></li>
					<li><a href="email-marketing">Email Marketing</a></li>
					<li><a href="contact-us.php">Contact Us</a></li>
				</ul><!--menu-->
				<div class="button-header">
				    <a target="_blank" href="https://tawk.to/chat/5bc903a1460a125f2656afd0/default" class="custom-btn custom-mobile"><img src="assets/images/live-chat.svg"> LIVE CHAT</a>
			    </div>
				</div><!--inside-->
		</div><!--mobile-menu-->
	</div>
</header>
<!--===================== End of Header ========================-->
	<!--===================== Bg Form ========================-->
	<div class="bg-form">
		<div class="container">
			<h2 class="text-center">Contact Us</h2>
			<p class="text-center">We’re here to help.</p>
			<div class="info-block-contact animatedParent">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 animated bounceInLeft">
						<div class="inside left">
							<div class="images"><img src="assets/images/phone-light.png" alt="phone"></div>
							<h4>Have questions? Call Us.</h4>
							<a href="tel:+923325594344">+923325594344</a>
						</div><!--inside-->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 animated bounceInRight">
						<div class="inside right">
							<div class="images"><img src="assets/images/mail-light.svg" alt="mail"></div>
							<h4>Email Us</h4>
							<a href="mailto:support@wethefriends.com">support@wethefriends.com</a>
						</div><!--inside-->
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 animated bounceInLeft">
						<div class="inside left">
							<div class="images"><img src="assets/images/address-light.svg" alt="address"></div>
							<h4>Address</h4>
							<span>We the friends<br>House No 26, Green Avenue, Chinar Street, Islamabad, Pakistan</span>
                        
						</div><!--inside-->
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 animated bounceInRight">
						<div class="inside right">
							<div class="images"><img src="assets/images/like-light.svg" alt="like"></div>
							<h4>talha_mansoor</h4>
							<ul class="social-icon">
								<li><a href="skype:talha_mansoor?add"><i class="fa fa-skype"></i></a></li>
							</ul><!--social-icon-->
						</div><!--inside-->
					</div>
				</div>
			</div><!--info-block-contact-->
		</div>
	</div>
	<!--===================== End of Bg Form ========================-->
	<!--===================== Form Contact ========================-->
	<div class="form-contact animatedParent">
		<h3>Send Message</h3>
		<?php
           if(isset($_POST['email'])) {
           $emailSent = FALSE;
            // EDIT THE 2 LINES BELOW AS REQUIRED
            $email_to = "ceo@wethefriends.com";
            $email_subject = "WeTheFriend Contact Us";
         	$headers = "From: ceo@wethefriends.com";
            $fullname = $_POST['name'];
            $email_from = $_POST['email'];
            $message = $_POST['message'];
            
            $usersubject = "Thank You for Contact Us";
        	$userheaders = "From: systems@wethefriends.com";
        	$email_message = "\n\n";
            $email_message .= "Full Name: ".$fullname."\n";
            $email_message .= "Email: ".$email_from."\n";
            $email_message .= "Messages: ".$message."\n";
        
            mail($email_to,$email_subject,$email_message,$headers);
        	//mail($email_from,$usersubject,$email_message,$userheaders);
           if(!empty($_POST['g-recaptcha-response']))
  {
        $secret = '6LeoYFYhAAAAAJwQ8LaD7Yjp1QMbIWS7axCqV9hi';
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
        if($responseData->success)
            $message = "g-recaptcha verified successfully";
        else
            $message = "Some error in verifying g-recaptcha";
       echo $message;
           }
            
            if ($emailSent = mail($email_to,$email_subject,$email_message,$headers)) {
                $msg="We have received your enquiry. We will contact you soon.";
                }
           }
    	else
  //         
        {
        
        ?>
        <form class="animated growIn" id="frmContact" action="" method="POST" novalidate="novalidate">
        
		<div class="form-group">
			<input required type="text" name="name" placeholder="Your Name">
		</div>
		<div class="form-group">
			<input required type="text" name="email" placeholder="Email">
		</div>
		<div class="form-group">
			<label for="message">Message:</label>
			<textarea id="message" name="message"></textarea>
		</div>
        <div class="g-recaptcha">
        <input type="hidden" name="token_generate" id="token_generate">
        </div>
		<div class="form-group text-right">
			<button type="submit" name="submit">Send</button>
		</div>
	</form>
       
	<?php
     }
    ?>

	</div><!--form-contact End of Form Contact ========================-->
<script>
      
        
        grecaptcha.ready(function() {
          grecaptcha.execute('6LeoYFYhAAAAADVWVE9Kv8o7FaSyimniwuiitG8b', {action: 'submit'}).then(function(token) {
              // Add your logic to submit to your backend server here.
          var response = document.getElementById('token_generate');
          response.value = token;
          });
        });
      
  </script> -->
<div class="pre-footer"><img src="assets/images/line-prefoter.svg" alt="bg-prefooter"></div> 
	<!--===================== Footer ========================-->
<footer>
	<div class="container">
		<div class="widget-footer">
			<h4>Our Services</h4>
			<ul>
				<li><a href="vps-hosting">VPS Hosting</a></li>
				<li><a href="dedicated-hosting">Dedicated Server</a></li>
				<li><a href="email-marketing">Email Marketing</a></li>
				<li><a href="contact-us.php">Custom Solutions</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Support</h4>
			<ul>
				<li><a href="contact-us.php">Contact Us</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer">
			<h4>Contact Us</h4>
			<ul>
				<li><a href="tel:+923325594344">+92-332-559-4344</a></li>
				<li><a href="mailto:support@wethefriends.com">support@wethefriends.com</a></li>
			</ul>
		</div><!--widget-footer-->
		<div class="widget-footer last">
			<a href="/"><img src="assets/images/logo-light.png" alt="logo"></a>
			<div class="button-footer">
				<a target="_blank" href="https://tawk.to/chat/5bc903a1460a125f2656afd0/default" class="custom-btn"><img src="assets/images/live-chat.svg"> LIVE CHAT</a>
			</div>
		</div><!--widget-footer-->
		<div class="copyright">
			<p>&copy; Copyright 2022 We The Friends, All Rights Reserved.</p>
		</div><!--copyright-->
	</div>
</footer>
<!--===================== End of Footer ========================-->
</div><!--wrapper-->
<script src="assets/js/lib/jquery.js"></script>
<script src="assets/js/lib/bootstrap.min.js"></script>
<script src="assets/js/lib/owl.carousel.min.js"></script>
<script src="assets/js/lib/css3-animate-it.js"></script>
<script src="assets/js/lib/counter.js"></script>
<script src="assets/js/main.js"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5bc903a1460a125f2656afd0/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->


</body>
</html>