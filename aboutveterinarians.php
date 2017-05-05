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
    <div class="inner-header inhdcolor2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>
                        About Veterinarians</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 aboutvete">
                    <div class="aboutvete-inn">
                        <h3 class="aboutvete-tit">
                            ABOUT VETERINARIANS
                        </h3>
                        <p class="aboutvete-desc">
                            KNOW EVERYTHING ABOUT THE TOP<br />
                            RATED PHYSICIANS WHO HAVE
                            <br />
                            COLLABRATED WITH US.
                        </p>
                        <div class="aboutvete-btnbox">
                            <a href="files/ERR.mht" target="_blank" class="home-box-button">Click Hear</a>
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
    <?php require_once("inc/script.inc.php"); ?>
</body>
</html>
