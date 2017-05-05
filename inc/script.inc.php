	<script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/bootstrap.min.js" type="text/javascript"></script>
    <script src="js/menu.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>
	<script src="js/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript">

        jQuery('.flexslider').flexslider({
            animation: "fade",
            start: function (slider) {
                jQuery('body').removeClass('loading');
            }
        });
        $("#m1").addClass("active");

    </script>
	
	
    <script src="js/jquery.validate.js" type="text/javascript"></script>
	<style>
		input.error{
			border:1px solid red;
		}
		textarea.error{
			border:1px solid red;
		}
		label.error{
			color: red;
			font-size:1.0em;
		}
	</style>
	
	<script>
	$(function() {
		$("#register_form").validate({
			rules: {
				f_nm:{ required: true },
				l_nm:{ required: true },
				u_eml:{required : true , email: true},
				u_pwd:{ required: true }
			},
			messages: {
				f_nm:{ required:"Enter first name." },
				l_nm:{required:"Enter last name"},
				u_eml:{ required:"Enter email address." , email:"Please enter proper email."},
				u_pwd:{required:"Enter your password."}
			},
			
			submitHandler: function(form) {
				$("#error_message_register").show();
				var register_form_data = $("#register_form").serialize();
				$.ajax({
					type: "POST",
					url: "ajax_users_register.php",
					cache: false,
					data: register_form_data,
					success: function(data){
						if(data=="already")
						{
							$("#error_message_register").show();
							$("#error_message_register").css("color", "red");	
							$("#error_message_register").html("Your account is already register..!");
							return false;
						}
						if(data=="blank email")
						{
							$("#error_message_register").show();
							$("#error_message_register").css("color", "red");	
							$("#error_message_register").html("Please enter email id..!");
							return false;
						}
						
						if(data=="worng")
						{
							$("#error_message_register").show();
							$("#error_message_register").css("color", "red");	
							$("#error_message_register").html("Something worng please try again..!");
							return false;
						}
						if(data=="success")
						{
							$("#error_message_register").show();
							$("#error_message_register").css("color", "green");	
							$("#error_message_register").html("Your account is successfully register..! ");
							$("#register_form")[0].reset();
							return false;
						}
					
					}
				});
				return false;
			},
		});
	});
</script>



<!-- Login form-->
<script>
	$(function() {
		$("#login_form_page_2").validate({
			rules: {
				login_username:{required : true , email: true},
				login_password:{ required: true }
			},
			messages: {
				login_username:{ required:"Enter email address." , email:"Please enter proper email."},
				login_password:{required:"Enter your password."}
			},
			
			submitHandler: function(form) {
				
				$("#error_message_login").show();
				var login_form_data = $("#login_form_page_2").serialize();
				$.ajax({
					type: "POST",
					url: "ajax_users_login.php",
					cache: false,
					data: login_form_data,
					success: function(data){
						if(data=="success")
						{
							$("#error_message_login").show();
							$("#error_message_login").css("color", "green");	
							$("#error_message_login").html("Login Successfully..!");	
							window.location.href="index.php";
							return false;
						}
						else if(data=="username")
						{
							$("#error_message_login").show();
							$("#error_message_login").css("color", "red");	
							$("#error_message_login").html("Please enter email..!");
							return false;
						}
						else if(data=="password")
						{
							$("#error_message_login").show();
							$("#error_message_login").css("color", "red");	
							$("#error_message_login").html("Please enter password..!");
							return false;
						}
						else if(data=="not found")
						{
							$("#error_message_login").show();
							$("#error_message_login").css("color", "red");	
							$("#error_message_login").html("Email or password not match..!");
							return false;
						}
						
						else if(data=="pass not match")
						{
							$("#error_message_login").show();
							$("#error_message_login").css("color", "red");	
							$("#error_message_login").html("Password not match..!");
							return false;
						}
						else if(data=="fail login")
						{
							$("#error_message_login").show();
							$("#error_message_login").css("color", "red");	
							$("#error_message_login").html("Login fail please try again..!");
							return false;
						}
					}
				});
				return false;
			},
		});
	});
</script>
	
<script>
  $( function() {
	$( "#date" ).datepicker({
			showOtherMonths: true,
			selectOtherMonths: true,		
			minDate: 0
	});
  } );
</script>

	<script>
	  
	$(function() {
		$("#appo_form").validate({
			rules: {
				name:{ required: true },
				phone:{
					required: true,
					rangelength: [10, 10],
					digits: true
				},
				address:{ required: true },
				email:{required : true , email: true},
				specify:{ required: true },
				breed:{ required: true },
				age:{ required: true,digits: true },
				date:{ required: true,date: true },
				time:{ required: true},
				doctor:{ required: true }
			},
			messages: {
				name:{ required:"Enter first name." },
				phone:{required:"Enter your mobile",
					rangelength: "Mobile number must be 10 digits",
					digits: "Please give only numbers for Mobile"
				},
				address:{required:"Enter your address."},
				email:{ required:"Enter email address." , email:"Please enter proper email."},
				specify:{required:"Enter your specify."},
				breed:{required:"Enter your breed."},
				age:{required:"Enter your age.",digit:"Please enter only digit for age."},
				date:{required:"Enter your date.",date:"Please enter proper date."},
				time:{required:"Select your Time."},
				doctor:{required:"Select doctor."}
			},
			
			submitHandler: function(form) {
				$("#error_message_app").show();
				var app_form_data = $("#appo_form").serialize();
				$.ajax({
					type: "POST",
					url: "ajax_appointment_add.php",
					cache: false,
					data: app_form_data,
					success: function(data){
						if(data=="Not Details")
						{
							$("#error_message_app").show();
							$("#error_message_app").css("color", "red");	
							$("#error_message_app").html("Please fillup all details..!");
							return false;
						}
						else if(data=="already enter")
						{
							$("#error_message_app").show();
							$("#error_message_app").css("color", "red");	
							$("#error_message_app").html("Please enter other date and time. this date and time is already booked..!");
							return false;
						}
						else if(data=="smething")
						{
							$("#error_message_app").show();
							$("#error_message_app").css("color", "red");	
							$("#error_message_app").html("Something worng please try again..!");
							return false;
						}
						else if(data=="suuc app")
						{
							$("#error_message_app").show();
							$("#error_message_app").css("color", "green");	
							$("#error_message_app").html("Successfully appointment booked!");
							$("#appo_form")[0].reset();
							return false;
						}
						
					
					}
				});
				return false;
			},
		});
	});
</script>

		