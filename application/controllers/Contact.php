<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends FrontendController {

  public function index() {

    $data['title'] = ucfirst('contact Us'); // Capitalize the first letter

    $this->load->helper('url');
    $this->load->view('templates/header', $data);
    $this->load->view('pages/contact');
    $this->load->view('templates/footer');
  }

  public function sendmail() {

    if(isset($_POST["submit"])) {
      //process the input from the form
      $first_name = self::test_input($_POST["first_name"]);
      $last_name = self::test_input($_POST["last_name"]);
      $email = self::test_input($_POST['email']);
      $country = $_POST["country"];
      $state = $_POST["state"];
      $body = self::test_input($_POST['message']);

      // store the form variable in $data array for use in the view
      $data['title'] = ucfirst('success');
      $data['first_name'] = $first_name;
      $data['last_name'] = $last_name;
      $data['country'] = $country;
      $data['state'] = $state;
      $data['body'] = $body;

      // load the email library 
      $this->load->library('email');
      $this->email->from($email);
      $this->email->to('vonvikky@gmail.com');
      $this->email->subject('Contact form submission');
      $this->email->message($first_name . " " . $last_name ." ". "in ". $state. " ". $country.  " wrote the following:" . "\n\n" . $body);
      $this->email->send();

      // renders the page after mail has been sent
      $this->load->helper('url');
      $this->load->view('templates/header', $data);
      $this->load->view('pages/mail', $data);
      $this->load->view('templates/footer');
    } else {

      // redirects user who accidentally visits this url to the contact page
      header("location:" .base_url()."index.php/contact");
    }

    
  }

  // Removes white spaces and html and special characters from the form before processing 
  static function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

}