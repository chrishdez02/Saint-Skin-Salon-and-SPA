<!DOCTYPE html>
<!--
	Assignment: Final WEBD 165 web site project 
	Author: Christopher Hernandez 
	Date: December 10, 2017 
	Filename: contactus.html 
	Description: Services page of Fleek Salon and Spa site 
	Dependencies: styles.css, fleek_logo.png, index.html, services.html, about.html
--> 
<html lang="en">
  <head>
    <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   	<meta name="description" content="This is the contact page for Fleek Salon and Spa">
   	<meta name="keywords" content="salon, spa, contact, us">
    <title>Contact Us</title>
    <!-- Bootstrap -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/styles.css" type="text/css">


        <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Abel" rel="stylesheet">  
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

<script       
  src="https://code.jquery.com/jquery-1.12.4.min.js"
  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
  crossorigin="anonymous"></script>
  </head>
    
<body>

<nav class="navbar navbar-inverse navbar-toggleable-sm fixed-top">

			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
				<span class="navbar-toggler-icon"></span>
			</button>
			<a class="navbar-brand hidden-sm-down" href="index.html">Saint Skin</a>
			<div class="collapse navbar-collapse" id="Navbar">
				<ul class="navbar-nav ml-auto w-100 justify-content-end">
					<li class="nav-item"><a class="nav-link " href="index.html">Home</a></li>
					<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
					<li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
					<li class="nav-item active"><a class="nav-link " href="/contactus.php">Contact</a></li>
				</ul>
				
			</div>	
		
	</nav> 
	 
    <header >
        <div class="container-fluid">
            <div class="header-content row">
                <div class="col-md-3 offset-md-2 text-center align-self-center">
                    <h1><span>Saint Skin</span></h1>
                </div>
                <div class="col-md-3 offset-md-2 text-center align-self-center hidden-md-up">
                    <img src="images/fleek_logo.svg" class="img-responsive mx-auto d-block  logo-valign" style="height:150px;margin-bottom:50px;margin-top:40px">

                </div>
                <div class="col-2 align-self-center justify-content-center hidden-sm-down">
                    <img src="images/fleek_logo.svg" class="img-responsive mx-auto d-block  logo-valign" style="height:150px;margin:30px">
                </div>
                <div class="col-md-4 align-self-center text-center">
                    <div class="col">
                    <h1>Salon &amp;</h1>
                    </div>
                    <div class="col-12">
                    <h1>Spa</h1>
                    </div>
                </div>
            </div>
                 
        </div>
  	</header>

<div class="container-fluid color">
<div class="container">
   
    <div class="row rowpad">
          
<?php 

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	
	
//print_r($_POST);


	
	$name = $_POST['name'];
	$message = $_POST['comment'];
    $phone = $_POST['telnum'];
    $email = $_POST['emailid'];
		
require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

//$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->isMail();


$mail->setFrom('from@example.com', 'Mailer');
$mail->addAddress('saintskinsalonandspa@gmail.com', 'Joe User');     // Add a recipient
//$mail->addAddress('ellen@example.com');               // Name is optional
$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
//$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'Message from '. $name;
$mail->Body    = 'The following message is from: '.$name. 
                 '<br> Phone: '.$phone.
                 '<br> Email: '.$email.
                 '<br> Message: ' .$message;
$mail->AltBody = $message;

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    print '<div class="col-12 text-center">
              <h3 class="colorhd">Message sent successfully!</h3>
               <br>
           </div>';
}

	


} else { //Display the form.
	
	print  '<div class="col-12 text-center">
              <h3 class="colorhd">Book Your Appointment</h3>
               <br>
           </div>
		<div class="col-12 col-md-8 offset-md-2">
                <form action="" method="post">
					<div class="form-group row">

						<div class="col">
							<input type="text" class="form-control" id="firstname" name="name" placeholder="Name">
						</div>
					</div>
					<div class="form-group row">
						
						<div class="col-6">
							<input type="tel" class="form-control" id="telnum" name="telnum" placeholder="Phone">
						</div>
										
						<div class="col-6">
							<input type="email" class="form-control" id="emailid" name="emailid" placeholder="Email">
						</div>
					</div>
					<div class="form-group row">
						
					</div>	
					<div class="form-group row">
						<div class="col">
							<textarea class="form-control" id="feedback" name="comment" rows="12" placeholder="Comments"></textarea>
						</div>
					</div>
					<div class="form-group row">
						<div class="col-md-10">
							<input type="submit" name="submit" value="Submit" id="submit">
								
						</div>
					</div>
				</form>
            </div>';
}
        
?>
        </div>
</div>
</div>
    
    
<footer>
        <div class="container-fluid pt-3 pb-3">	 
            <div class="container">
            <div class="row">
                <div class="col-md-6 text-md-left text-center">
                    <p>&copy; 2018 Copyright Saint Skin Salon &amp; Spa. All Rights Reserved.</p>
                </div>
                <div class="col-md-6 text-md-right align-self-center text-center">
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a class="fa fa-facebook fa-lg" aria-hidden="true"></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="fa fa-twitter fa-lg" aria-hidden="true"></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="fa fa-youtube fa-lg" aria-hidden="true"></a>
                        </li>
                        <li class="list-inline-item">
                            <a class="fa fa-yelp fa-lg" aria-hidden="true"></a>
                        </li>
                    </ul>                


                </div>

            </div>
            </div>
        </div>

        
        
</footer>
    
	 <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/tether.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>    
    
</body>
    
</html>