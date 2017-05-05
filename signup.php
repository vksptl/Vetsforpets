<?php
session_start();
require_once("config.php");

if( isset($_SESSION["user_id"])) { header("location: index.php"); exit; }

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php require_once("inc/header.inc.php"); ?>
    <title>Sing Up | VetsForPets</title>
</head>
<body class="loginpage">
    <div class="header">
		<?php require_once("inc/menu.inc.php"); ?>
    </div>
    <div class="inner-header inhdcolor7">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </div>
    <div class="">
        <div class="container">
            <div class="col-sm-6">
            </div>
            <div class="col-sm-6">
                <div class="loginbox">
                    <h1>Join Us</h1>
					<form name="register_form" id="register_form" method="post">
                    <div id="contact-form">
                        <div>
                            <input name="f_nm" id="f_nm" type="text" placeholder="First Name *" class="text-field input-style" >
                        </div>
                        <div>
                            <input name="l_nm" id="l_nm" type="text" placeholder="Last Name*" class="text-field input-style" >
                        </div>
                        <div>
                            <input id="u_eml" name="u_eml" type="text" placeholder="Email ID *" class="text-field input-style" >
                        </div>
                        <div>
                            <input id="u_pwd" name="u_pwd" type="password" placeholder="Password *" class="text-field input-style" >
                        </div>
						
                        <div class="text-center">
                            <input id="r_btn" name="r_btn" type="submit" class="home-box-button" value="Sign Up →" /><br />
							<div id="error_message_register" style="margin-top:1px;"></div>
                        </div>
                    </div>
                </div>
                <div class="bottombox">
                    Already a Member? <a href="signin.php">LOGIN →</a>
                </div>
            </div>
        </div>
    </div>
    <?php require_once("inc/script.inc.php"); ?>
</body>
</html>
