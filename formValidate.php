<?php
	if (array_key_exists('submit', $_POST)) {
		
		// remove escape characters from POST array
if (PHP_VERSION < 6 && get_magic_quotes_gpc()) {
  function stripslashes_deep($value) {
    $value = is_array($value) ? array_map('stripslashes_deep', $value) : stripslashes($value);
    return $value;
    }
  $_POST = array_map('stripslashes_deep', $_POST);
  }
		
    	//mail processing script
        $to = 'reesec3815@aol.com'; //change email address
        $subject = 'Pre-qualification Application';
       
		
		// list expected fields
		 $expected = array('firstname', 'lastname', 'middlename', 'birthday', 'address', 'county', 'state', 'phone', 'email', 'time', 'employment', 'employlength','netincome', 'bedrooms', 'homesize', 'website', 'movein', 'pets', 'comments');
		
		// set required fields
		$required = array('firstname', 'lastname', 'middlename', 'birthday', 'address', 'county', 'state', 'phone', 'email', 'accesscode');
  
  		// create empty array for any missing fields
  		$missing = array();
		// assume that there is nothing suspect
		$suspect = false;
		//create a pattern to locate suspect phrases
		$pattern = '/Content-Type:|Bcc:|Cc:/i';
		
		  // function to check for suspect phrases
  function isSuspect($val, $pattern, &$suspect) {
    // if the variable is an array, loop through each element
	// and pass it recursively back to the same function
	if (is_array($val)) {
      foreach ($val as $item) {
	    isSuspect($item, $pattern, $suspect);
	    }
	  }
    else {
      // if one of the suspect phrases is found, set Boolean to true
	  if (preg_match($pattern, $val)) {
        $suspect = true;
	    }
	  }
    }
	// check the $_POST array and any subarrays for suspect content
		isSuspect($_POST, $pattern, $suspect);
			if ($suspect) {
				$mailSent = false;
				unset($missing);
			} else
          // process the $_POST variables
        foreach ($_POST as $key => $value) {
			// assign to temp variable and strip whitespace if not an array
			$temp = is_array($value) ? $value : trim($value);
			// if empty and required, add to $missing array
			if (empty($temp) && in_array($key, $required)) {
				array_push($missing, $key);
			} elseif (in_array($key, $expected)) {
			// otherwise, assign to variable of the same name as $key
				${$key} = $temp;
			}
		}
	}
	
		// validate the email address
		if(!empty($email)) {
		// regex to identify illegal characters in email address
		$checkEmail = '/^[^@]+@[^\s\r\n\'";,@%]+$/';	
		// reject the email address is it doesn't match
		if (!preg_match($checkEmail, $email)) {
			$suspect = true;
			$mailSent = false;
			unset($missing);
		}
		// access code 
		if (strtolower($_POST['code']) != 'arc01') {die('Wrong access code. Please use your back button and try again.');}

	}	
		// go ahead only if not suspect and all required field OK
		if (!!suspect && empty($missing)) {
        
        // build the message
        $message = "First Name: $firstname\r\n\r\n";
		$message .= "Middle Name: $middlename\r\n\r\n";
		$message .= "Last Name: $lastname\r\n\r\n";
		$message .= "Date of Birth: $birthday\r\n\r\n";
		$message .= "Address: $address\r\n\r\n";
		$message .= "County: $county\r\n\r\n";
		$message .= "State: $state\r\n\r\n";
		$message .= "Phone: $phone\r\n\r\n";
		$message .= "Email: $email\r\n\r\n";
		$message .= "When is the best time to call?: $time\r\n\r\n";
		$message .= "Are you currently employed full time?: $employment\r\n\r\n";
		$message .= "How long have you been on the job?: $employlength\r\n\r\n";
		$message .= "What is your monthly net income?: $netincome\r\n\r\n";
		$message .= "How many bedrooms will you need?: $bedrooms\r\n\r\n";
		$message .= "What is the size of the home you need?: $homesize\r\n\r\n";
        $message .= "How did you find our website?: $website\r\n\r\n";
		$message .= "When would you like to move in?: $movein\r\n\r\n";
		$message .= "Do you have pets?: $pets\r\n\r\n";
		$message .= "Additional comments: $comments";
		
		// create empty array for missing fields
		$missing = array();

		// limit line length to 70 characters
		$message = wordwrap($message, 70);
		
		
		
		// create additional headers
		$headers = "From: ARC Rentals - Pre-qualification Application<feedback@arcrentals.net>\r\n";
		$headers .= 'Content-Type: text/plain; charset=utf-8';
		if (!empty($email)) {
			$headers .= "\r\nReply-To: $email";
		}
        
        // send it
        $mailSent = mail($to, $subject, $message, $headers);
		if ($mailSent) {
			// $missing is on longer needed if the email is sent, so unset it
			unset($missing);
		}
	}
 ?>