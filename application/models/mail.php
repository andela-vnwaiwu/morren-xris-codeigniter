<?php

// checks if the form was actually submitted with the submit button
if(isset($_POST["submit"])) {
  $to = "vonvikky@gmail.com"; // this is your Email address
  $from = test_input($_POST["email"]); // this is the sender's Email address
  $first_name = test_input($_POST["first_name"]);
  $last_name = test_input($_POST["last_name"]);
  $country = $_POST["country"];
  $state = $_POST["state"];
  $body = test_input($_POST['message']);
  $subject = "Contact form submission";
  $message = $first_name . " " . $last_name ." ". "in ". $state. " ". $country.  " wrote the following:" . "\n\n" . $body;
  $headers = "From:" . $from;
  mail($to, $subject, $message, $headers); 
} else {

  // redirects user who accidentally visits this url to the contact page
  header("location: http://localhost/morren/index.php?controller=pages&action=contact");
}

// Removes white spaces and html and special characters from the form before processing 
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
