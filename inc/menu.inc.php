        <nav class="navbar navbar-default">
            <div class="container">
                <div class="navbar-header">
                    <a class="nav-logo" href="index.php">
                        <img id="imgLogo" src="images/logo.png" alt="" /></a>
                </div>
                <div id='cssmenu'>
                    <ul class="">
                        <li><a href="index.php"><i class="fa fa-home"></i>Home</a></li>
                        <li><a href="about.php"><i class="fa fa-info-circle"></i>About</a>
                            <ul>
                                <li><a href="about.php">ABOUT US</a></li>
                                <li><a href="ourteam.php">OUR TEAM</a></li>
                                <li><a href="aboutveterinarians.php">ABOUT VETERINARIANS</a></li>
                                <li><a href="privacypolicy.php">PRIVACY POLICY</a></li>
                                <li><a href="feedback.php">FEEDBACK</a></li>
                                <li><a href="doctor.php">Doctor</a>
                              </li>
                            </ul>
                        </li>
                        <li><a href="services.php"><i class="fa fa-truck"></i>Services</a> </li>
                        <li><a href="doglib.php"><i class="fa fa-book"></i>library</a>
                            <ul>
                                <li><a href="doglib.php">DOGS</a></li>
                                <li><a href="catslib.php">CATS</a></li>
                                <li><a href="fishlib.php">FISH</a></li>
                                <li><a href="rabbitslib.php">RABBITS</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.php"><i class="fa fa-phone"></i>Contact</a></li>
						
						<?php if(!isset($_SESSION["user_id"])) { ?>
                        <li><a href="signup.php"><i class="fa fa-user"></i>Signup</a></li>
                        <li><a href="signin.php"><i class="fa fa-sign-in"></i>Signin</a></li>
						<?php } ?>	
						
						<?php if(isset($_SESSION["user_id"])) { ?>
						<li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a></li>
						<?php } ?>	
                    </ul>
                </div>
            </div>
        </nav>