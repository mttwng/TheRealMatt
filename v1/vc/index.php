<?php
//start session
session_start();

// Include all the output functions
require_once('fns.php'); 

// populate input fields into the session using a sub-array
// check http://www.scriptygoddess.com/archives/2007/05/28/how-to-use-session-cookies-in-php/
// also check the above link for remembering checkboxes values
$_SESSION['myForm'] = $_POST;

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
   "http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>

	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>Resume</title>
	<style type="text/css">
	body {font:normal normal normal 15px/1.4em 'Open Sans', sans-serif; color: #4A4A4A; /*line-height: 135%; margin-left:50px;*/}
	#uploadform {width: 700px;}
	label {display: block;}
	input, textarea {width: 90%;}
	input#submit {width: auto;}
	#formfeedback {background: #f2dede; color: #b94a48; padding: 5px;}
	#formthankyou {background: #dff0d8; color: #468847; padding: 5px;}
	</style>
</head>
<body>
	
	<h3>Resume Upload</h3>
	<div id="uploadform">
	<?php
	// contact form
	if (isset($_POST['submitted']) && ('true' == $_POST['submitted'])) { 
		// checks if the form is submitted and then processes it
    	process_form(); 
		
	} else { 
		// else prints the form
    	print_form(); 
	}

	
	?>
	</div>
</body>
</html>
<?php session_destroy(); //unset session data ?>