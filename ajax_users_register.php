<?php
require_once("config.php");

if(isset($_POST['u_eml']) && $_POST['u_eml']!="")
{
	
	function random_string($length)
	{
		$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
		$string = substr( str_shuffle( $chars ), 0, $length );
		return $string;
	} 
	 
	$first_name 		= mysqli_real_escape_string($link, $_POST['f_nm']);
	$last_name 			= mysqli_real_escape_string($link, $_POST['l_nm']);
	$user_email 		= mysqli_real_escape_string($link, $_POST['u_eml']);
	$user_password 		= mysqli_real_escape_string($link, $_POST['u_pwd']);
	$verified_users 	= '0';					
	$verif_code 		= random_string(25);	
	$user_status			= '1';	
	$reg_date = date("Y-m-d h:i:s");
	
	$sel_emp=mysqli_query($link, "select * from users where email='".$user_email."'");
	if(mysqli_num_rows($sel_emp) > 0)
	{ 
		echo "already";
		exit;
	}
	else
	{
		$sql = "INSERT INTO `users`(`first_name`,`last_name`,`email`,`password`,`verified_users`, `verif_code`,`reg_date`, `status`)
	
		VALUES ('$first_name','$last_name','$user_email','$user_password','$verified_users','$verif_code','$reg_date', '$user_status')";
		$result = mysqli_query($link, $sql);
		$last_id = mysqli_insert_id($link);
		
		if($result)
		{
			echo "success";
			exit;
		}
		else
		{
			echo "worng";
			exit;
		}
	}
	
}
else
{
	echo "blank email";
	exit;
}



?>