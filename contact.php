<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php require_once("inc/header.inc.php"); ?>
    <title>VetsForPets</title>
</head>
<body>
    <div class="header">
       <?php require_once("inc/menu.inc.php"); ?>
    </div>
    <div class="inner-header inhdcolor5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        Contact Us</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerbox">
                        <h1 class="hdtitle boxhdcolor5">
                            Write Us</h1>
                        <div class="col-sm-6">
                            <br />
                            <div class="error-message">
                               <?php 
						
						 if(isset($_SESSION['msg']))
						 { 
						 echo $_SESSION['msg'];
							unset($_SESSION['msg']);
						 }
						 
						 ?>	
						 </div>
						 <div class="errormsg"> 
						  <?php 
						
						 if(isset($_SESSION['error']))
						 { 
						 echo $_SESSION['error'];
							unset($_SESSION['error']);
						 }
						 
						 ?>	<br>
                            </div>
                           <form id="contact-form" class='contact-form' action="" method="post" >
                                <div>
                                    <input name="name" type="text" placeholder="Name *" class="text-field input-style"
                                        required>
                                </div>
                                <div>
                                    <input name="query" type="text" placeholder="Query *" class="text-field input-style"
                                        required>
                                </div>
                                <div>
                                    <input name="email" type="text" placeholder="Email ID *" class="text-field input-style"
                                        required>
                                </div>
                                <div>
                                    <input name="phone" type="text" placeholder="Phone No. *" class="text-field input-style"
                                        required>
                                </div>
                                <div>
                                    <input name="submit" type="submit" class="home-box-button " value="POST →" />
                                </div>
                            </div>    <br clear="all" />
                        </div>
                        <br clear="all" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-main">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>
                            About Us</h2>
                        <p id="divAbout">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi sed lorem vitae erat
                            venenatis vestibulum. Donec vel libero at tortor mattis condimentum quis non est.</p>
                    </div>
                    <div class="col-md-3 col-md-offset-1 quicklink">
                        <h2>
                            Quick Link</h2>
                        <ul>
                            <li><a href="index.php">home</a></li>
                            <li><a href="about.php">About</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <div class="info-ads">
                            <h2>
                                Address</h2>
                            <div id="divAdres">
                                <p>
                                    8437 Poplar Street Roswell, GA 30075</p>
                                <p>
                                    <span>FAX: </span>(03) 9876 - 5432</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=" copyright">
            <div class="container ">
                <div class="pull-left">
                    <p class="">
                        &copy; Copyright "Company" 2016. All rights reserved.
                    </p>
                </div>
                <div class="pull-right">
                    <ul class="social-links social-links_mod-a list-inline">
                        <li><a target="_blank" href="http://www.facebook.com/"><i class="icons fa fa-facebook">
                        </i></a></li>
                        <li><a target="_blank" href="https://twitter.com/"><i class="icons fa fa-twitter"></i>
                        </a></li>
                        <li><a target="_blank" href="https://www.linkedin.com/"><i class="icons fa fa-linkedin">
                        </i></a></li>
                        <li><a target="_blank" href="https://www.instagram.com/"><i class="icons fa fa-instagram">
                        </i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("inc/script.inc.php"); ?>
	<?php 
	
if(isset($_POST['submit'])){
 
$name = Trim(stripslashes($_POST['name'])); 
$query = Trim(stripslashes($_POST['query'])); 
$email = Trim(stripslashes($_POST['email'])); 
$phone = Trim(stripslashes($_POST['phone']));

$EmailFrom = "alpesh.atlas@gmail.com";
$EmailTo = "mayankmca.patel@gmail.com,$email";
$Subject = "Vets for Pets";

// prepare email body text
$Body = "Hello sir \n\n please check your website enquiry\n\n\n";
$Body .= "Name :  $name \n\n";
$Body .= "Query :  $query  \n\n";
$Body .= "Email :  $email  \n\n";
$Body .= "Phone :  $phone  \n\n";
$Body .= "\n\n\n Thanks";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
if ($success){
 $_SESSION['msg']="Your message has been sent Successfully, We will get back to you soon....";	
   print "<script>window.location='contact.php';</script>";
    exit;      
}
else{
	 $_SESSION['error']="Something is missing, Please Try Again..!...";	
	  print "<script>window.location='contact.php';</script>";
    exit;   
}

   }
?>
</body>
</html>
