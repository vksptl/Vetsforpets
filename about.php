<?php
session_start();

//if( isset($_SESSION["user_id"])) { header("location: index.php"); exit; }

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
    <div class="inner-header inhdcolor2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        ABOUT US</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="innerbox">
                        <h1 class="hdtitle boxhdcolor2">
                            ABOUT US</h1>
                        <div class="text-desc text-center">
                            <p>
                                We are beginning in 2016, we are dedicated to making life easier for pet parents.
                                The idea struck us with the launch of PetFoodDirect.com – the first online pet store
                                to deliver pet food and supplies right to your front door. Over the time, we realized
                                there was so much more we could be doing to help our customers navigate the incredible
                                journey that is pet parenting! Not only that, we are aiming to provide veterinarian
                                facilities to the customer who can easily book an appointment using our website
                                and Android Application that is under development. The site will update weekly blogs
                                written by verified and reputed vets across the globe to help our pet parents in
                                each and every way possible. Record charts will be maintained of the pets, so as
                                to continue the treatment right where your pet left the last time. Across our network,
                                we provide pet parents places to engage and connect, access trusted advice and expert
                                information. Our mission is to help you find what you need quickly and hassle free,
                                so you can spend more time loving your pets!</p>
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
