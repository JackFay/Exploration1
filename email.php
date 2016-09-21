<?php

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

$comments = $_REQUEST['comments'];
$lastname = $_REQUEST['lastname'];
$firstname = $_REQUEST['firstname'];
$email = $_REQUEST['email'];

print "your last name is-" .$lastname;
print "<br />";
print "your first name is-" .$firstname;
print "<br />";
print "your comments are-" .$comments;
print "<br />";
print "your email is-" .$email;
$to = $email;
$subject = "Test Email!";
$message = $comments;
$from = "from: test@gmail.com";

$success = mail($to, $subject, $message, $from);

if($success){
print "<br/>success";
}else{
print "<br/>failure";
}

?>