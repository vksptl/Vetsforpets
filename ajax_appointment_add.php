<?php
session_start();
require_once("config.php");
require_once("class.phpmailer.php");

if($_REQUEST['name'] != "" && $_REQUEST['email']!=""&& $_REQUEST['phone']!=""&& $_REQUEST['address']!=""&& $_REQUEST['specify']!="" && $_REQUEST['breed']!="" && $_REQUEST['age']!="" && $_REQUEST['action']!="" && $_REQUEST['date']!="" && $_REQUEST['doctor']!="" && $_REQUEST['time']!="")
{
		$name 				= mysqli_real_escape_string($link, $_POST['name']);
		$email 				= mysqli_real_escape_string($link, $_POST['email']);
		$phone 				= mysqli_real_escape_string($link, $_POST['phone']);
		$address 			= mysqli_real_escape_string($link, $_POST['address']);
		$specify 			= mysqli_real_escape_string($link, $_POST['specify']);
		$breed 				= mysqli_real_escape_string($link, $_POST['breed']);
		$age 				= mysqli_real_escape_string($link, $_POST['age']);
		$action 			= mysqli_real_escape_string($link, $_POST['action']);
		$date 				= mysqli_real_escape_string($link, $_POST['date']);
		$time 				= mysqli_real_escape_string($link, $_POST['time']);
		$doctor				= mysqli_real_escape_string($link, $_POST['doctor']);
		$newDate 			= date("Y-m-d", strtotime($date));
		
		$q = mysqli_query($link,"select * from appointment where `reg_date` = '$newDate' and `time` = '$time'");
		if(mysqli_num_rows($q) > 0)
		{
			echo "already enter";
			exit;
		}
		else
		{	
			$EmailFrom = "info@evostainfotech.com";
			$EmailTo = ",$email";
			$Subject = "Vets for Pets appointment";

			/* prepare email body text*/
			$Body = "Hello sir \n\n please check your website appointment\n\n\n";
			$Body .= "Name :  $name \n\n";
			$Body .= "Email :  $email \n\n";
			$Body .= "Phone :  $phone \n\n Address :  $address \n\n Specify :  $specify \n\n Breed :  $breed \n\n Age :  $age \n\n Action :  $action \n\n Date :  $date \n\n Time :  $time \n\n Doctor :  $doctor \n\n";
			$Body .= "\n\n\n Thanks";
			
			$successs = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");
			
			
			$insert = mysqli_query($link,"insert into appointment(`user_id`,`full_name`,`email`,`mobile`,`address`,`what_pet`,`specify`,`breed`,`age`,`doctor_nm`,`reg_date`,`time`,`status`) values('".$_SESSION["user_id"]."','$name','$email','$phone','$address','$action','$specify','$breed','$age','$doctor','$newDate','$time','1')");
			if($insert)
			{
				echo "suuc app";
				exit;
			}
			else
			{
				echo "something";
				exit;
			}
		}
}	
else
{
	echo "Not Details";
	exit;
}


?>