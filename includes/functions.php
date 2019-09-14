<?php
			
	//DB connection.
	function conDB()
	{
		include("server.php");
	}
///////////////////////////////////////////////////
	
	
// 	function professional_registration()
// 	{
// 		$alert="";
// 		if(isset( $_POST['prof_submit']))
// 		{
// 			$title = $_POST['title'];
// 			$first_name = $_POST['first_name'];
// 			$last_name = $_POST['last_name'];
// 			$gender = $_POST['gender'];
// 			$country = $_POST['country'];
// 			$city = $_POST['city'];
// 			$language = $_POST['language'];
// 			$educational_level = $_POST['educational_level'];			
// 			$phone_no = $_POST['phone_no'];			
// 			$email = $_POST['email'];			
// 			$password = $_POST['password'];
// 			$cpassword = $_POST['cpassword'];
			
			
// 			// must be a number for mobile number
// 		if(!preg_match("/^[0-9]*$/",$_POST["phone_no"]))
// 		{
// 			$error .= "<div class=alerterror alerterr-danger alerterr-dismissable>
// 			<b>Only Numbers</b> are allowed in Mobile Number!
// 			</div>";
			
// 		}
					
// 		// must be a valid email address
//     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//         return "<div class=alerterror alerterr-danger alerterr-dismissable>
// 							Please supply correctly your E-mail Address and a valid Mobile Number. Your account activation details will be sent to your E-mail address. <br>
// 							Your account activation details will be sent to your E-mail address.<br/>
							
// 							</div>";
//     }		
// /////////////////////////////////////////////////////////////////////////////////////////
// // Random characters
// $random_chars="";
// $characters = array("B","C","D","F","G","H","J","K","L","M","N",
// "P","Q","R","S","T","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9");
 
// // set the array
// $keys = array();
 
// // set length
// $length = 7;
 
// // loop to generate random keys and assign to an array
// while(count($keys) < $length) {
// 	$x = mt_rand(0, count($characters)-1);
// 	if(!in_array($x, $keys)) {
//        $keys[] = $x;
//     }
// }
 
// // extract each key from array
// foreach($keys as $key){
//    $random_chars .= $characters[$key];
// }	
// $random_chars = "prof_".$random_chars;



// //////////////////////////////////////////////////////////////////////////////////////////
// 			  if($password != $cpassword)
// 			{
// 				return "<div class=alerterror alerterr-danger alerterr-dismissable>
// 							<b>Password does not match!</b> <br>
// 							Try Again.
							
// 							</div>";
// 			}
			
// /////////////////////////////////////////////////////////////////////////////////////////


// 			  			else
// 			{
// 	/////////////////SEND SMS NOTIFICATION/////////////////////
	
	
// ////////////////////////////////////////////////////////////////////////////////////////////////////////////	
	
	
			
// 	///////////////////////////////////////////////////////////////////////////////////////////////////			
// 				conDB();//database connection
				
// 		  ////////////////////////////////////////////////////////////////////////////////////
						  
// 				date_default_timezone_set("Africa/Lagos");
// 						$date = date('F dS, Y h:i A', time());
				
// 						$date2 = date('M d, Y h:ia', time());
						
						
								
				
// 				$phone_no = mysqli_query("SELECT * FROM professional_registration WHERE phone_no='$phone_no'");
				
// 				$check_email = mysqli_query("SELECT * FROM professional_registration WHERE email='$email'");
				
				
// 				if(mysqli_num_rows($phone_no)>0)
// 				{
					
// 					$alert = "
					
// 					<div class='alert alert-danger-alt alert-dismissable'>
//                 <span class='glyphicon glyphicon-certificate'></span>
//                 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
//                     ×</button><strong>
// <b>Mobile Number [$phone_no]</b> Already Exist! <br>
// 							&nbsp;&nbsp;Enter another Mobile Number or <a href=index.php><b>Login</b> Here</a>!
					
// 					</div>
					
// 				";

// 				}

				
// 				if(mysqli_num_rows($check_email)>0)
// 				{
// 					return"					<div class='alert alert-danger-alt alert-dismissable'>
//                 <span class='glyphicon glyphicon-certificate'></span>
//                 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
//                     ×</button>

// 							<b>Email [$email]</b> Already Exist! <br>
// 							&nbsp;&nbsp;Change your Email Address or <a href=index.php><b>Login</b> Here</a>!
							
// 							</div>
					
// 					";

// 				}
// 				else
// 				{
					
					
// 					//////////////////////////////////////////////////////////////////////////////////////////////
// /////Email Sending
// // now, compose the content of the verification email, it will be sent to the email provided during sign up
//                 // generate verification code, acts as the "key"
				
//                 $verificationCode = "$random_chars";
 
//                 // send the email verification
//                 $verificationLink = "http://www.meetupcareer.com/professional-registration-activate.php?email=[$email]";
 
//                 $htmlStr = "";
// $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;'>Dear " . $first_name . ",</span><br /><br />";
 
//                 $htmlStr .= "<span style= 'font-weight:bold; font-size:16px; color:red;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;'>Thank you for Signing Up on Meet-Up</span><br /><br />";
//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>
				
// 				You’re just a click away from enjoying a superb experience you can only get on Meet-Up. Please activate your new account as it will be inactive unless activated. Below are the Details about your new account:
				
// 				</span><br /><br />";
				
//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Your Username: </span> <span style= 'font-weight:bold; font-size:18px; color:#050046; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'><b>$email</b></span><br /><br />";
				
//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Your Confirmation Code is </span> <span style= 'font-weight:bold; font-size:18px; color:#050046; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'><b>$random_chars</b></span><br /><br />";

//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Password: $password</span> <br /><br />";
				
//                 $htmlStr .= "<span style= 'font-weight:normal; text-align:justify; font-size:16px; color:#000;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Activate your account by clicking <b>“Activate Now”</b> link below and input your Confirmation Code [<span style= 'font-weight:bold; font-size:14px; color:blue; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>$random_chars</span>]</b> on the input field:</span><br /><br /><br /><br />";
				
				
//                 $htmlStr .= " <table width=100% align=center border=0>
// 				<tr>
// 				<td align=center><a href='{$verificationLink}' style='font-size:24px; background-color:#000080; line-height: 100%; padding-top: 18px; padding-right: 30px; padding-bottom: 18px; padding-left: 30px; border-radius:4px;color: #FFF; text-decoration:none; cursor:pointer; border-bottom-color:none;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;margin: 0 auto;' target='_blank'>Activate Now</a>
// 				</td>
// 				</tr>
// 				</table>
// 				<br /><br />";
				
				 
 
//                 $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Our Best regards,</span><br />";
//                 $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Meet-Up Team</span><br /><br />";
//                 $htmlStr .= "<img src='http://www.meetup.com/images/e-logo.jpg'><br/>";
//                 $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Meet-Up...Creating an enabling enviromement for Research</span>";
				
				 
//                 $name = "The Meet-Up Team";
//                 $email_sender = "no-reply@meetupcarrer.com";
//                 $subject = "Activate your Account";
//                 $recipient_email = $email;
 
//                 $headers  = "MIME-Version: 1.0\r\n";
//                 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
//                 $headers .= "From: The Meet-Up Team <{$email_sender}> \n";
 
//                 $body = $htmlStr;
 
//                 // send email using the mail function, you can also use php mailer library if you want
//                 if( mail($recipient_email, $subject, $body, $headers) )				
				
				
// 		////////////////////////////////////////////////////////////////////////////////////////////////////
				
// /////////////////////////////////////END EMAIL ACTIVATION NOTIFICATION CODE////////////////////////////////////				

// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////				
// 				mysqli_query("INSERT INTO professional_registration VALUES( '', '$title', '$first_name', '$last_name', '$gender', '$country', '$city', '$language', '$educational_level', '$phone_no', '$email', '$password', '$date2', '$random_chars', '0')");
				


							
				
// 		echo "<script>alert('Check your Email Address to confirm your registration!'); window.location='professional-registration-activate.php'</script>";
				
				
// 				}
// 		}
// 		}						
// 		else
// 			{
// 			return $alert;
// 			}
// 		}
		
	
// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////

// ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////


// function student_registration()
// 	{
// 		$alert="";
// 		if(isset( $_POST['stud_submit']))
// 		{
// 			$title = $_POST['title'];
// 			$first_name = $_POST['first_name'];
// 			$last_name = $_POST['last_name'];
// 			$gender = $_POST['gender'];
// 			$dob = $_POST['dob'];
// 			$nationality = $_POST['nationality'];
// 			$address = $_POST['address'];
// 			$id_type = $_POST['id_type'];
// 			$flanguage = $_POST['flanguage'];
// 			$country_of_residence = $_POST['country_of_residence'];
// 			$educational_level = $_POST['educational_level'];
// 			$field = $_POST['field'];
// 			$phone_no = $_POST['phone_no'];
// 			$email = $_POST['email'];			
// 			$password = $_POST['password'];
// 			$cpassword = $_POST['cpassword'];
			
			
// 			// must be a number for mobile number
// 		if(!preg_match("/^[0-9]*$/",$_POST["phone_no"]))
// 		{
// 			$error .= "<div class=alerterror alerterr-danger alerterr-dismissable>
// 			<b>Only Numbers</b> are allowed in Mobile Number!
// 			</div>";
			
// 		}
					
// 		// must be a valid email address
//     if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
//         return "<div class=alerterror alerterr-danger alerterr-dismissable>
// 							Please supply correctly your E-mail Address and a valid Mobile Number. Your account activation details will be sent to your E-mail address. <br>
// 							Your account activation details will be sent to your E-mail address.<br/>
							
// 							</div>";
//     }		
// /////////////////////////////////////////////////////////////////////////////////////////
// // Random characters
// $random_chars="";
// $characters = array("B","C","D","F","G","H","J","K","L","M","N",
// "P","Q","R","S","T","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9");
 
// // set the array
// $keys = array();
 
// // set length
// $length = 7;
 
// // loop to generate random keys and assign to an array
// while(count($keys) < $length) {
// 	$x = mt_rand(0, count($characters)-1);
// 	if(!in_array($x, $keys)) {
//        $keys[] = $x;
//     }
// }
 
// // extract each key from array
// foreach($keys as $key){
//    $random_chars .= $characters[$key];
// }	
// $random_chars = "stud_".$random_chars;

// $checker = 0;

// //////////////////////////////////////////////////////////////////////////////////////////
// 			  if($password != $cpassword)
// 			{
// 				return "<div class=alerterror alerterr-danger alerterr-dismissable>
// 							<b>Password does not match!</b> <br>
// 							Try Again.
							
// 							</div>";
// 			}
			
// /////////////////////////////////////////////////////////////////////////////////////////


// 			  			else
// 			{
// 	/////////////////SEND SMS NOTIFICATION/////////////////////
	
// 			conDB();//database connection
				
// 		  ////////////////////////////////////////////////////////////////////////////////////
						  
// 				date_default_timezone_set("Africa/Lagos");
// 						$date = date('F dS, Y h:i A', time());
				
// 						$date2 = date('M d, Y h:ia', time());
				
// 				$phone_no = mysqli_query("SELECT * FROM student_registration WHERE phone_no='$phone_no'");
				
// 				$check_email = mysqli_query("SELECT * FROM student_registration WHERE email='$email'");
				
				
// 				if(mysqli_num_rows($phone_no)>0)
// 				{
					
// 					$alert = "
					
// 					<div class='alert alert-danger-alt alert-dismissable'>
//                 <span class='glyphicon glyphicon-certificate'></span>
//                 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
//                     ×</button><strong>
// 				<b>Mobile Number [$phone_no]</b> Already Exist! <br>
// 							&nbsp;&nbsp;Enter another Mobile Number or <a href=index.php><b>Login</b> Here</a>!
					
// 					</div>
						
// 				";

// 				}

				
// 				if(mysqli_num_rows($check_email)>0)
// 				{
// 					return"					<div class='alert alert-danger-alt alert-dismissable'>
//                 <span class='glyphicon glyphicon-certificate'></span>
//                 <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
//                     ×</button>

// 							<b>Email [$email]</b> Already Exist! <br>
// 							&nbsp;&nbsp;Change your Email Address or <a href=index.php><b>Login</b> Here</a>!
							
// 							</div>
					
// 					";

// 				}
// 				else
// 				{
					
					
// 					//////////////////////////////////////////////////////////////////////////////////////////////
// /////Email Sending
// // now, compose the content of the verification email, it will be sent to the email provided during sign up
//                 // generate verification code, acts as the "key"
				
//                 $verificationCode = "$random_chars";
 
//                 // send the email verification
//                 $verificationLink = "http://www.meetupcareer.com/professional-registration-activate.php?email=[$email]";
 
//                 $htmlStr = "";
// 				$htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;'>Dear " . $first_name . ",</span><br /><br />";
 
//                 $htmlStr .= "<span style= 'font-weight:bold; font-size:16px; color:red;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;'>Thank you for Signing Up on Meet-Up</span><br /><br />";
//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>
				
// 				You’re just a click away from enjoying a superb experience you can only get on Meet-Up. Please activate your new account as it will be inactive unless activated. Below are the Details about your new account:
				
// 				</span><br /><br />";
				
//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Your Username: </span> <span style= 'font-weight:bold; font-size:18px; color:#050046; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'><b>$email</b></span><br /><br />";
				
//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Your Confirmation Code is </span> <span style= 'font-weight:bold; font-size:18px; color:#050046; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'><b>$random_chars</b></span><br /><br />";

//                 $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Password: $password</span> <br /><br />";
				
//                 $htmlStr .= "<span style= 'font-weight:normal; text-align:justify; font-size:16px; color:#000;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Activate your account by clicking <b>“Activate Now”</b> link below and input your Confirmation Code [<span style= 'font-weight:bold; font-size:14px; color:blue; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>$random_chars</span>]</b> on the input field:</span><br /><br /><br /><br />";
				
				
//                 $htmlStr .= " <table width=100% align=center border=0>
// 				<tr>
// 				<td align=center><a href='{$verificationLink}' style='font-size:24px; background-color:#000080; line-height: 100%; padding-top: 18px; padding-right: 30px; padding-bottom: 18px; padding-left: 30px; border-radius:4px;color: #FFF; text-decoration:none; cursor:pointer; border-bottom-color:none;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;margin: 0 auto;' target='_blank'>Activate Now</a>
// 				</td>
// 				</tr>
// 				</table>
// 				<br /><br />";
		
//                 $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Our Best regards,</span><br />";
//                 $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Meet-Up Team</span><br /><br />";
//                 $htmlStr .= "<img src='http://www.meetup.com/images/e-logo.jpg'><br/>";
//                 $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Meet-Up...Creating an enabling enviromement for Research</span>";
				
				 
//                 $name = "The Meet-Up Team";
//                 $email_sender = "no-reply@meetupcarrer.com";
//                 $subject = "Activate your Account";
//                 $recipient_email = $email;
 
//                 $headers  = "MIME-Version: 1.0\r\n";
//                 $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
//                 $headers .= "From: The Meet-Up Team <{$email_sender}> \n";
 
//                 $body = $htmlStr;

 
//                 // send email using the mail function, you can also use php mailer library if you want
//                 if( mail($recipient_email, $subject, $body, $headers) )				
				
				
				
// /////////////////////////////////////END EMAIL ACTIVATION NOTIFICATION CODE////////////////////////////////////				
// 				mysqli_query("INSERT INTO student_registration VALUES( '', '$random_chars', '$title', '$first_name', '$last_name', '$gender', '$dob', '$nationality', '$address', '$id_type', '$flanguage', '$country_of_residence', '$educational_level','$field', '$phone_no', '$email', '$password', '$date2', '$checker' )");
				
// 		echo "<script>alert('Check your Email Address to confirm your registration!'); window.location='student-registration-activate.php'</script>";
				
				
// 				}
// 		}
// 		}						
// 		else
// 			{
// 			return $alert;
// 			}
// 		}
		



function teacher_registration()
	{
		$alert="";
		if(isset( $_POST['teach_submit']))
		{
			$title = $_POST['title'];
			$first_name = $_POST['first_name'];
			$last_name = $_POST['last_name'];
			$gender = $_POST['gender'];
			$country = $_POST['country'];
			$city = $_POST['city'];
			$language = $_POST['language'];
			$educational_level = $_POST['educational_level'];	
			$field = $_POST['field'];		
			$phone_no = $_POST['phone_no'];			
			$email = $_POST['email'];			
			$password = $_POST['password'];
			$cpassword = $_POST['cpassword'];
			
			
			// must be a number for mobile number
		if(!preg_match("/^[0-9]*$/",$_POST["phone_no"]))
		{
			$error .= "<div class=alerterror alerterr-danger alerterr-dismissable>
			<b>Only Numbers</b> are allowed in Mobile Number!
			</div>";
			
		}
					
		// must be a valid email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        return "<div class=alerterror alerterr-danger alerterr-dismissable>
							Please supply correctly your E-mail Address and a valid Mobile Number. Your account activation details will be sent to your E-mail address. <br>
							Your account activation details will be sent to your E-mail address.<br/>
							
							</div>";
    }		
/////////////////////////////////////////////////////////////////////////////////////////
// Random characters
$random_chars="";
$characters = array("B","C","D","F","G","H","J","K","L","M","N",
"P","Q","R","S","T","V","W","X","Y","Z","1","2","3","4","5","6","7","8","9");
 
// set the array
$keys = array();
 
// set length
$length = 7;
 
// loop to generate random keys and assign to an array
while(count($keys) < $length) {
	$x = mt_rand(0, count($characters)-1);
	if(!in_array($x, $keys)) {
       $keys[] = $x;
    }
}
 
// extract each key from array
foreach($keys as $key){
   $random_chars .= $characters[$key];
}	
$random_chars = "teach_".$random_chars;

//////////////////////////////////////////////////////////////////////////////////////////
			  if($password != $cpassword)
			{
				return "<div class=alerterror alerterr-danger alerterr-dismissable>
							<b>Password does not match!</b> <br>
							Try Again.
							
							</div>";
			}
			
/////////////////////////////////////////////////////////////////////////////////////////


			  			else
			{
	/////////////////SEND SMS NOTIFICATION/////////////////////
	
			conDB();//database connection
				
		  ////////////////////////////////////////////////////////////////////////////////////
						  
				date_default_timezone_set("Africa/Lagos");
						$date = date('F dS, Y h:i A', time());
				
						$date2 = date('M d, Y h:ia', time());
				
				$phone_no = mysql_query("SELECT * FROM teacher_registration WHERE phone_no='$phone_no'");
				
				$check_email = mysql_query("SELECT * FROM teacher_registration WHERE email='$email'");
				
				
				if(mysql_num_rows($phone_no)>0)
				{
					
					$alert = "
					
					<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button><strong>
				<b>Mobile Number [$phone_no]</b> Already Exist! <br>
							&nbsp;&nbsp;Enter another Mobile Number or <a href=index.php><b>Login</b> Here</a>!
					
					</div>
						
				";

				}

				
				if(mysql_num_rows($check_email)>0)
				{
					return"					<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>

							<b>Email [$email]</b> Already Exist! <br>
							&nbsp;&nbsp;Change your Email Address or <a href=index.php><b>Login</b> Here</a>!
							
							</div>
					
					";

				}
				else
				{
					
					
					//////////////////////////////////////////////////////////////////////////////////////////////
/////Email Sending
// now, compose the content of the verification email, it will be sent to the email provided during sign up
                // generate verification code, acts as the "key"
				
                $verificationCode = "$random_chars";
 
                // send the email verification
                $verificationLink = "http://www.meetupcareer.com/professional-registration-activate.php?email=[$email]";
 
                $htmlStr = "";
				$htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;'>Dear " . $first_name . ",</span><br /><br />";
 
                $htmlStr .= "<span style= 'font-weight:bold; font-size:16px; color:red;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;'>Thank you for Signing Up on Meet-Up</span><br /><br />";
                $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>
				
				You’re just a click away from enjoying a superb experience you can only get on Meet-Up. Please activate your new account as it will be inactive unless activated. Below are the Details about your new account:
				
				</span><br /><br />";
				
                $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Your Username: </span> <span style= 'font-weight:bold; font-size:18px; color:#050046; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'><b>$email</b></span><br /><br />";
				
                $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Your Confirmation Code is </span> <span style= 'font-weight:bold; font-size:18px; color:#050046; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'><b>$random_chars</b></span><br /><br />";

                $htmlStr .= "<span style= 'font-weight:normal; font-size:16px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Password: $password</span> <br /><br />";
				
                $htmlStr .= "<span style= 'font-weight:normal; text-align:justify; font-size:16px; color:#000;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Activate your account by clicking <b>“Activate Now”</b> link below and input your Confirmation Code [<span style= 'font-weight:bold; font-size:14px; color:blue; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>$random_chars</span>]</b> on the input field:</span><br /><br /><br /><br />";
				
				
                $htmlStr .= " <table width=100% align=center border=0>
				<tr>
				<td align=center><a href='{$verificationLink}' style='font-size:24px; background-color:#000080; line-height: 100%; padding-top: 18px; padding-right: 30px; padding-bottom: 18px; padding-left: 30px; border-radius:4px;color: #FFF; text-decoration:none; cursor:pointer; border-bottom-color:none;font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif;margin: 0 auto;' target='_blank'>Activate Now</a>
				</td>
				</tr>
				</table>
				<br /><br />";
		
                $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Our Best regards,</span><br />";
                $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Meet-Up Team</span><br /><br />";
                $htmlStr .= "<img src='http://www.meetup.com/images/e-logo.jpg'><br/>";
                $htmlStr .= "<span style= 'font-size:13px; color:#000; font-family:Segoe, Segoe UI, DejaVu Sans, Trebuchet MS, Verdana, sans-serif'>Meet-Up...Creating an enabling enviromement for Research</span>";
				
				 
                $name = "The Meet-Up Team";
                $email_sender = "no-reply@meetupcarrer.com";
                $subject = "Activate your Account";
                $recipient_email = $email;
 
                $headers  = "MIME-Version: 1.0\r\n";
                $headers .= "Content-type: text/html; charset=iso-8859-1\r\n";
                $headers .= "From: The Meet-Up Team <{$email_sender}> \n";
 
                $body = $htmlStr;
 
                // send email using the mail function, you can also use php mailer library if you want
                if( mail($recipient_email, $subject, $body, $headers) )				
				
				
				
/////////////////////////////////////END EMAIL ACTIVATION NOTIFICATION CODE////////////////////////////////////				
				mysql_query("INSERT INTO teacher_registration VALUES( '', '$title', '$first_name', '$last_name', '$gender', '$country', '$city', '$language', '$educational_level', '$field', '$phone_no', '$email', '$password', '$date2', '$random_chars', '0')");
				


							
				
		echo "<script>alert('Check your Email Address to confirm your registration!'); window.location='teacher-registration-activate.php'</script>";
				
				
				}
		}
		}						
		else
			{
			return $alert;
			}
		}
		









	//function to activate account for professionals
	function activate_account_prof()
	{
			
		if(isset($_POST['prof_act_submit']))
		{
			$email = $_POST['email'];
			
				conDB(); //To connect to DB
				
				$date = date('Y-m-d H:i:s');
				
				$select_email = mysql_query("SELECT email FROM professional_registration WHERE email='$email'");
				$select_email2 = mysql_query("SELECT email FROM professional_registration WHERE email='$id_marker' AND checker = '1'");

				if(mysql_num_rows($select_email)!=1)
				{
					$alert = "<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
							<b>Invalid Email Address </b> or Account does not exist!
							
							
		</div>";
				}
				else if(mysql_num_rows($select_email2)==1)
				{
					$alert = "<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
					Your Account has already been Activated |
					<b>Login <a href=login.php>Here</a></b> 
					</div>";
				}
				else
				{
					mysql_query("UPDATE professional_registration SET email = '$email', checker = '1' WHERE email ='$email'");
					
		echo "<script>alert('You have been Registered Successfully! Click OK to Login Now!'); window.location='login.php'</script>";
					
				}
				
			return $alert;
		}
	
	}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//function to activate account for teachers
	function activate_account_teach()
	{
			
		if(isset($_POST['teach_act_submit']))
		{
			$email = $_POST['email'];
			
				conDB(); //To connect to DB
				
				$date = date('Y-m-d H:i:s');
				
				$select_email = mysql_query("SELECT email FROM teacher_registration WHERE email='$email'");
				$select_email2 = mysql_query("SELECT email FROM teacher_registration WHERE email='$id_marker' AND checker = '1'");

				if(mysql_num_rows($select_email)!=1)
				{
					$alert = "<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
							<b>Invalid Email Address </b> or Account does not exist!
							
							
		</div>";
				}
				else if(mysql_num_rows($select_email2)==1)
				{
					$alert = "<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
					Your Account has already been Activated |
					<b>Login <a href=login.php>Here</a></b> 
					</div>";
				}
				else
				{
					mysql_query("UPDATE teacher_registration SET email = '$email', checker = '1' WHERE email ='$email'");
					
		echo "<script>alert('You have been Registered Successfully! Click OK to Login Now!'); window.location='login.php'</script>";
					
				}
				
			return $alert;
		}
	
	}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//function to activate account for students
	function activate_account_stud()
	{
			
		if(isset($_POST['stud_act_submit']))
		{
			$email = $_POST['email'];
			
				conDB(); //To connect to DB
				
				$date = date('Y-m-d H:i:s');
				
				$select_email = mysql_query("SELECT email FROM student_registration WHERE email='$email'");
				$select_email2 = mysql_query("SELECT email FROM student_registration WHERE email='$id_marker' AND checker = '1'");

				if(mysql_num_rows($select_email)!=1)
				{
					$alert = "<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
							<b>Invalid Email Address </b> or Account does not exist!
							
							
		</div>";
				}
				else if(mysql_num_rows($select_email2)==1)
				{
					$alert = "<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
					Your Account has already been Activated |
					<b>Login <a href=login.php>Here</a></b> 
					</div>";
				}
				else
				{
					mysql_query("UPDATE student_registration SET email = '$email', checker = '1' WHERE email ='$email'");
					
		echo "<script>alert('You have been Registered Successfully! Click OK to Login Now!'); window.location='login.php'</script>";
					
				}
				
			return $alert;
		}
	
	}


///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	function newsletter_teach(){
		// subscribe newsletter
	if (isset($_POST['subscribe'])) {
		$sub_email = $_POST['email'];

		$alert = "";

		if (empty($sub_email)) {
			array_push($errors, "Your email address is required");
		}
		
		if (count($errors) == 0) {

		$sql = "INSERT INTO newsletter(email) VALUES ('$sub_email')";

		$query = mysqli_query($conn, $sql);

			if (mysqli_num_rows($query) == 1) {
				header('location: index.php?=subscribed');
			}else{
				$alert = "<div class='alert alert-danger-alt alert-dismissable'>
                <span class='glyphicon glyphicon-certificate'></span>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>
                    ×</button>
					This email has been subscribed |
					<b>Login <a href=login.php>Here</a></b> 
					</div>";
			}

		
		}else{
			echo "<script>alert('Oops! Internal error')</script>";
		}

		return $alert;
	}
	}

	function logout_user() {
		// logout
		if (isset($_SESSION['email'])) {
			session_start();
			session_destroy();
			unset($_SESSION['email']);
			echo "<script>alert('Logged out Successfully!')</script>";
			header('location: index.php');
		}

	}

?>