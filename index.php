<?php
session_start();
require_once("config.php");

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php require_once("inc/header.inc.php"); ?>
    <title> VetsForPets</title>
</head>
<body>
    <div class="header">
        <?php require_once("inc/menu.inc.php"); ?>
    </div>

    <div class="flexslider">
        <ul class="slides">
            <li>
                <img src='images/slider1.jpg' alt=" " /></li>
            <li>
                <img src='images/slider2.jpg' alt=" " /></li>
            <li>
                <img src='images/slider3.jpg' alt=" " /></li>
            <li>
                <img src='images/slider4.jpg' alt=" " /></li>
        </ul>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="penal-box">
                        <div class="title">
                            <h1>
                                Breeds that live longer</h1>
                        </div>
                        <div class="text-desc text-center">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec a vestibulum tellus.
                                Ut ac porttitor leo. Nam condimentum, augue iaculis consequat venenatis, justo eros
                                elementum ligula, id ultrices lacus diam condimentum neque.
                            </p>
                            <p>
                                Ut metus magna, consectetur ac metus in, aliquam vestibulum quam. Nunc fermentum
                                porttitor ipsum in rutrum.Aenean vel neque ultricies ligula tempus dapibus sed ut
                                diam. Maecenas ut felis pulvinar nulla commodo posuere. Curabitur finibus diam nec
                                elementum imperdiet. Etiam eleifend mi velit, aliquam cursus nulla vestibulum et.
                                Suspendisse maximus elit urna, in blandit ipsum fermentum vel.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="home-boxmain">
        <div class="container">
            <div class="col-sm-6">
                <div class="home-box-in">
                    <div class="home-box-tit ">
                        <h2 class="home-box-tit-text">
                            Get Your Pet Checked Up</h2>
                    </div>
                    <div class="home-box-desc">
                        Follow the link below to get an appointment with a highly classified veterinarian
                        near you.
                    </div>
                    <div class="home-box-btn-pn ">
                        <a href="appointment.php" class="home-box-button ">GO → </a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="home-box-in">
                    <div class="home-box-tit ">
                        <h2 class="home-box-tit-text">
                            Access All Features</h2>
                    </div>
                    <div class="home-box-desc">
                        Login to an existing account or Signup to create a new account to access all features
                        of our website.
                    </div>
                    <div class="home-box-btn-pn ">
                        <a href="signin.php" class="home-box-button ">GO → </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="penal-box">
                        <div class="title">
                            <h1>
                                AT VETS-FOR-PETS:</h1>
                        </div>
                        <div class="text-desc">
                            <p>
                                We care about you. Healthy pets, Happy pets.</p>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="penal-box">
                        <div class="title">
                            <h1>
                                COMING SOON:</h1>
                        </div>
                        <div class="text-desc">
                            <p>
                                All the vetrinarians in your city just a click away.</p>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="penal-box">
                        <div class="title">
                            <h1>
                                DON'T MISS THIS:</h1>
                        </div>
                        <div class="text-desc">
                            <p>
                                Weekly blogs by verified physicians to take better care of your pet.</p>
                        </div>
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
		<a href="appointment.php" target="_blank" class="home-box-button btnappoint">Book An Appointment Now</a>
    <?php require_once("inc/script.inc.php"); ?>
</body>
</html>
