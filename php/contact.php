<?php
if (isset($_POST['submit'])) {
  $to = "garyd42@legend-gary.com"; // this is your Email address
  $email = $_POST['email']; // this is the sender's Email address
  $name = $_POST['name'];
  $website = $_POST['website'];
  $subject = $_POST['subject'];
  $message = 'Message sent from: ' . $name . "\n" .
             "Website: " . $website . "\n" .
             "Return Email: " . $email .  "\n\n" .
             $_POST['message'];

  if (mail($to,$subject,$message))
    echo '<div><h3>Thank you ' . $name . ', I will contact you shortly</h3></div>';

  else
    echo '<div><h3>FAILED</h3></div>';
}
?>
