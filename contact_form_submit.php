<?php
if(isset($_POST['email'])) {
     
    // CHANGE THE TWO LINES BELOW
    $email_to = "me@vduong.xyz";
     
    $email_subject = "Message received from vduong.xyz";
     
     
    function died($error) {
        // your error code can go here
        echo "I am sorry, but there were error(s) found with the form you submitted. ";
        //echo "These errors appear below.";
        echo $error."";
        //echo "Please refresh and try again.";
        echo "<a href='contact2.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";



        echo "Please click <a href='contact2.html'> here</a> to try again";

        die();
    }
     
    // validation expected data exists
    if(!isset($_POST['form_name']) ||
        //!isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['subject']) ||
       //!isset($_POST['telephone']) ||
        //!isset($_POST['comments'])) {
       !isset($_POST['message'])) {
        died('I am sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $form_name = $_POST['form_name']; // required
    //$last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $form_subject = $_POST['subject']; // not required
    //$telephone = $_POST['telephone']; // not required
    $message = $_POST['message']; // required
     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.';
  }
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$form_name)) {
    $error_message .= 'The name you entered does not appear to be valid.';
  }

// if(!preg_match($string_exp,$last_name)) {
//    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
//}
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($form_name)."\n";
//    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Subject: ".clean_string($form_subject)."\n";
//    $email_message .= "Telephone: ".clean_string($telephone)."\n";
//    $email_message .= "Comments: ".clean_string($comments)."\n";
    $email_message .= "Message: ".clean_string($message)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
  
Thank you for contacting me. I will get in touch with you very soon. 

<?php
}
die();
?>
