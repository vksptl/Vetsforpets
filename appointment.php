<?php
session_start();
require_once("config.php");

if(! isset($_SESSION["user_id"])) { header("location: signin.php"); exit; }

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
    <div class="inner-header inhdcolor6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Appointment</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerbox">
                        <h1 class="hdtitle boxhdcolor6">
                            Enter Details to Book An Appointment Pet Owner</h1>
                        <div class="col-sm-12">
                            <br />
                            <div class="error-message">
                                <div class="errormsg">
                                </div>
                            </div>
							<form action="" name="appo_form" id="appo_form" method="post">
								<div id="contact-form">
									<div class="col-sm-6">
										<input name="name" id="name" type="text" placeholder="Full Name *" class="text-field input-style" >
									</div>
									<div class="col-sm-6">
										<input name="phone" id="phone" type="text" placeholder="Phone Number *" class="text-field input-style" >
									</div>
									<div class="col-sm-6">
										<input name="address" id="address" type="text" placeholder="Address *" class="text-field input-style" >
									</div>
									<div class="col-sm-6">
										<input name="email" id="email" type="text" placeholder="Email ID *" class="text-field input-style" >
									</div>
									<div class="col-sm-12">
										<h3 class="text-center">
											Pet
											<br />
											<br />
											What is it?</h3>
										<br />
										<div class="text-center">
											<input type="radio" name="action"  value="Dog" /><label for="track">Dog</label>
											<input type="radio" name="action"  value="Cat" /><label for="Radio1">Cat</label>
											<input type="radio" name="action"  value="Fish" /><label for="Radio2">Fish</label>
											<input type="radio" name="action"  value="Rabbit" /><label for="Radio3">Rabbit</label>
											<input type="radio" name="action"  value="Other" /><label for="Radio4">Other</label>
										</div>
									</div>
									<br clear="all" />
									<br />
									<div class="col-sm-6">
										<input name="specify" id="specify" type="text" placeholder="Specify *" class="text-field input-style" >
									</div>
									<div class="col-sm-6">
										<input name="breed" id="breed" type="text" placeholder="Breed *" class="text-field input-style" >
									</div>
									<div class="col-sm-6">
										<input name="age" id="age" type="text" placeholder="Age *" class="text-field input-style" >
									</div>
									<div class="col-sm-3">
										<input name="date" id="date" type="text" placeholder="date *" class="text-field input-style" >
									</div>
									<div class="col-sm-3">
										<select name="time" id="time" class="text-field input-style hasDatepicker">
											<option value="">-- Select Time --</option>
											<option value="10:00 AM">10:00 AM</option>
											<option value="10:15 AM">10:15 AM</option>
											<option value="10:30 AM">10:30 AM</option>
											<option value="10:45 AM">10:45 AM</option>
											<option value="11:00 AM">11:00 AM</option>
											<option value="11:15 AM">11:15 AM</option>
											<option value="11:30 AM">11:30 AM</option>
											<option value="11:45 AM">11:45 AM</option>
											<option value="12:00 AM">12:00 AM</option>
											<option value="12:15 AM">12:15 AM</option>
											<option value="12:30 AM">12:30 AM</option>
											<option value="12:45 AM">12:45 AM</option>
											<option value="01:00 PM">01:00 PM</option>
											<option value="01:15 PM">01:15 PM</option>
											<option value="01:30 PM">01:30 PM</option>
											<option value="01:45 PM">01:45 PM</option>
											<option value="02:00 PM">02:00 PM</option>
											<option value="04:00 PM">04:00 PM</option>
											<option value="04:15 PM">04:15 PM</option>
											<option value="04:30 PM">04:30 PM</option>
											<option value="04:45 PM">04:45 PM</option>
											<option value="05:00 PM">05:00 PM</option>
											<option value="05:15 PM">05:15 PM</option>
											<option value="05:45 PM">05:45 PM</option>
											<option value="06:00 PM">06:00 PM</option>
											<option value="06:15 PM">06:15 PM</option>
											<option value="06:30 PM">06:30 PM</option>
											<option value="06:45 PM">06:45 PM</option>
										</select>
									</div>
									<div class="col-sm-12">
										<select name="doctor" id="doctor" class="text-field input-style hasDatepicker">
											<option value="">-- Select Doctor --</option>
											<option value="Dr. Diwakar Kumar Mishra">Dr. Diwakar Kumar Mishra</option>
											<option value="Dr. Praveen Datt Sharma">Dr. Praveen Datt Sharma</option>
											<option value="Dr. Girish Kumar">Dr. Girish Kumar</option>
											<option value="Dr. Alka Kalia">Dr. Alka Kalia</option>
											<option value="Dr. Pankaj Bhardwaj">Dr. Pankaj Bhardwaj</option>
											<option value="Dr. Nikhil">Dr. Nikhil</option>
											<option value="Dr. Nitin Srivastava">Dr. Nitin Srivastava</option>
											<option value="Dr. D.K Singh">Dr. D.K Singh</option>
										</select>
									</div>
									<div class="col-sm-12 ">
										<input name="submit" type="submit" class="home-box-button pull-right" value="POST →" />
										<div id="error_message_app" style="font-size:1.0em;"></div>
									</div>
									
									<br clear="all" />
								</div>
							</form>
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
                            <li><a href="index.html">home</a></li>
                            <li><a href="about.html">About</a></li>
                            <li><a href="contact.html">Contact</a></li>
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
</body>
</html>
