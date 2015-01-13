<?php
//start session
session_start();

/**
 * Contact form with file attachment
 * Release Date: April 24th 2008
 * Author: Elle Meredith <http://designbyelle.com.au/>
 * 
 * Resources used to create this script
 * phMailer <http://www.phphq.net?script=phMailer> by Scott L. <scott@phphq.net>
 * an article on Sitepoint by Kevin Yank, (13 Feb 2003) Accessed on April 24, 2008
 * "Advanced email in PHP" <http://www.sitepoint.com/article/advanced-email-php>
 * and "PHP: Sending Email (Text/HTML/Attachments)"
 * <http://www.webcheatsheet.com/php/send_email_text_html_attachment.php>
 *
 * one more: http://www.sebastiansulinski.co.uk/web_design_tutorials/php/php_file_upload.php
 *
 * This script is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 * 
 * This script is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * http://www.gnu.org/licenses/gpl.txt
 *
 */



// prints form
function print_form(){
?>
	<form method="post" action="<?php echo $_SERVER[’PHP_SELF’];?>" id="uploadform" enctype="multipart/form-data">
	
	<p>A resume is required as part of your application. Please also include your full name as the title of your resume. We will take into account your ability to follow instructions properly.<br /><br /><label for="attachment">(1 file only, max file size 1024kb. Allowed file formats are .doc, .docx, .pdf, .zip, .rar)</label>
	<input name="attachment" id="attachment" type="file" tabindex="7">

	<p>Wait, is your resume title your full name? It should be in the format FirstName_LastName.</p>
	<p><input type="submit" name="submit" id="submit" value="Upload Resume"  tabindex="8"/></p>
	<p><strong>After you submit your resume, please wait until Friday night for an email from us detailing your interview time for either the next day or the day after. Thank you.</strong></p>
	<p><input type="hidden" name="submitted"  value="true" /></p>
	</form>
<?php
}

// enquiry form validation

function process_form() {

	$subject = 'VC Resumes';

	// Read POST request params into global vars
	// FILL IN YOUR EMAIL
	$to = "webualize@gmail.com, recruit@voyagerconsulting.net";
	
	// Allowed file types. add file extensions WITHOUT the dot.
	$allowtypes=array("zip", "rar", "doc", "pdf", "docx");
	
	// Require a file to be attached: false = Do not allow attachments true = allow only 1 file to be attached
	$requirefile="true";
	
	// Maximum file size for attachments in KB NOT Bytes for simplicity. MAKE SURE your php.ini can handel it,
	// post_max_size, upload_max_filesize, file_uploads, max_execution_time!
	// 2048kb = 2MB,       1024kb = 1MB,     512kb = 1/2MB etc..
	$max_file_size="1024";
	
	// Thank you message
	$thanksmessage="Your resume has been uploaded.";

	$errors = array(); //Initialize error array
		
 	// checks for required file
	// http://amiworks.co.in/talk/handling-file-uploads-in-php/
	if($requirefile=="true") {
		if($_FILES['attachment']['error']==4) {
			$errors[]='You forgot to attach a file';
		}
	}
		
	//checks attachment file
	// checks that we have a file
	if((!empty($_FILES["attachment"])) && ($_FILES['attachment']['error'] == 0)) {
			// basename -- Returns filename component of path
			$filename = basename($_FILES['attachment']['name']);
			$ext = substr($filename, strrpos($filename, '.') + 1);
			$filesize=$_FILES['attachment']['size'];
			$max_bytes=$max_file_size*1024;
			
			//Check if the file type uploaded is a valid file type. 
			if (!in_array($ext, $allowtypes)) {
				$errors[]="Invalid extension for your file: <strong>".$filename."</strong>";
				
		// check the size of each file
		} elseif($filesize > $max_bytes) {
				$errors[]= "Your file: <strong>".$filename."</strong> is to big. Max file size is ".$max_file_size."kb.";
			}
			
	} // if !empty FILES

	if (empty($errors)) { //If everything is OK
		
		// send an email
		// Obtain file upload vars
		$fileatt      = $_FILES['attachment']['tmp_name'];
		$fileatt_type = $_FILES['attachment']['type'];
		$fileatt_name = $_FILES['attachment']['name'];
		
		// Headers
		$headers = "From: $emailfrom";
		
		// create a boundary string. It must be unique
		  $semi_rand = md5(time());
		  $mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

		  // Add the headers for a file attachment
		  $headers .= "\nMIME-Version: 1.0\n" .
		              "Content-Type: multipart/mixed;\n" .
		              " boundary=\"{$mime_boundary}\"";

		  // Add a multipart boundary above the plain message
		  $message.="--{$mime_boundary}\n";
		  $message.="Content-Type: text/plain; charset=\"iso-8859-1\"\n";
		  $message.="Content-Transfer-Encoding: 7bit\n\n";
		
		if (is_uploaded_file($fileatt)) {
		  // Read the file to be attached ('rb' = read binary)
		  $file = fopen($fileatt,'rb');
		  $data = fread($file,filesize($fileatt));
		  fclose($file);

		  // Base64 encode the file data
		  $data = chunk_split(base64_encode($data));

		  // Add file attachment to the message
		  $message .= "--{$mime_boundary}\n" .
		              "Content-Type: {$fileatt_type};\n" .
		              " name=\"{$fileatt_name}\"\n" .
		              //"Content-Disposition: attachment;\n" .
		              //" filename=\"{$fileatt_name}\"\n" .
		              "Content-Transfer-Encoding: base64\n\n" .
		              $data . "\n\n" .
		              "--{$mime_boundary}--\n";
		}
		
		
		// Send the completed message
		
		$envs = array("HTTP_USER_AGENT", "REMOTE_ADDR", "REMOTE_HOST");
		foreach ($envs as $env)
		$message .= "$env: $_SERVER[$env]\n";
		
		if(!mail($to,$subject,$message,$headers)) {
			exit("Mail could not be sent. Sorry! An error has occurred, please report this to the website administrator.\n");
		} else {
			echo '<div id="formthankyou" style="background: #fdfbab;"><h3>Thank You</h3><p>'. $thanksmessage .'</p></div>';
			unset($_SESSION['myForm']);
			print_form();
			
		} // end of if !mail
		
	} else { //report the errors
		echo '<div id="formfeedback"><h3>Error!</h3><p>The following error(s) has occurred:<br />';
		foreach ($errors as $msg) { //prints each error
				echo " - $msg<br />\n";
			} // end of foreach
		echo '</p><p>Please try again</p></div>';
		print_form();
	} //end of if(empty($errors))

} // end of process_form()
?>



