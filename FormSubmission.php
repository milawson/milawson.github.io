


$name = $_POST['name'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$message = $_POST['message'];
$from = 'Demo Contact Form';
$to = 'lawsom5@mcmaster.ca';
$subject = 'Message from Contact Demo ';

$body = "From: $name\n E-Mail: $email\n Subject: $subject Message:\n $message";

if (mail ($to, $subject, $body, $from)){
  $result='<div class="alert alert-success">Thank you! I will be in touch with you shortly.</div>';
  }
