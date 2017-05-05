<?php
session_start();
require_once("config.php");

if( isset($_SESSION["user_id"])) { header("location: index.php"); exit; }

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php require_once("inc/header.inc.php"); ?>
    <title>Sign In | VetsForPets</title>
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
                    <h1>Login Detail</h1>
					<form role="form" class="login-form cf-style-1" name="login_form_page_2" id="login_form_page_2">
						<div id="contact-form">
							<div>
								<input id="login_username" name="login_username" type="text" placeholder="Email ID *" class="text-field input-style">
							</div>
							<div>
								<input id="login_password" name="login_password" type="password" placeholder="Password *" class="text-field input-style">
							</div>
							<div class="text-center">
								<input name="submit" type="submit" name="login_btn_page_2" id="login_btn_page_2" class="home-box-button" value="Login →" /><br />
								
								<div id="error_message_login" class="error_div" style="margin-top:1px;"></div>
							</div>
						</div>
					</form>
                   
                </div>
                 <div class="bottombox">
                        Not a member yet? <a href="signup.php">SIGN UP →</a>
                    </div>
            </div>
        </div>
    </div>
   <?php require_once("inc/script.inc.php"); ?>
</body>
</html>
