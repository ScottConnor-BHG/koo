<?php


					// error_log($_POST["name"]);
          // $message= "Name: ". $_POST["name"]."\r\n"; 
          // $message.="Email Address: ".$_POST["email"]."\r\n";
          // $message.="Organization: ". $_POST["organization"]."\r\n"; 
          // $message.="Telephone: ".$_POST["tel"]."\r\n";
          // $message.="Name: ". $_POST["message"]."\r\n"; 
          // $message.="Email Address: ".$_POST["timeline"]."\r\n";
          // $message.="Email Address: ".$_POST["budget"]."\r\n";





					$to      = 'scottay81@gmail.com';
					$subject = 'Portfolio contact test';
					// error_log($_POST["name"]);
          $message= "Name: ". $_POST["name"]."\r\n"; 
          $message.="Email Address: ".$_POST["email"]."\r\n";
          $message.="Organization: ". $_POST["organization"]."\r\n"; 
          $message.="Telephone: ".$_POST["tel"]."\r\n";
          $message.="Message: ". $_POST["message"]."\r\n"; 
          $message.="Timeline: ".$_POST["timeline"]."\r\n";
          $message.="Budget: ".$_POST["budget"]."\r\n";
					$headers = 'From: Scottay81@gmail.com' . "\r\n" .
			    'Reply-To: scottay81@gmail.com' . "\r\n" .
			    'X-Mailer: PHP/' . phpversion();
			    // error_log($message);
			mail($to, $subject, $message, $headers);
			


?>