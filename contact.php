<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set up email
    $to = "mjagadeesh1498@gmail.com";
    $subject = "New message from your website";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";

    // Send email
    if(mail($to, $subject, $body)) {
        // If email sent successfully
        echo "Thank you for your message. We'll be in touch soon!";
    } else {
        // If email failed to send
        echo "Oops! Something went wrong. Please try again later.";
    }
} else {
    // If form not submitted
    echo "Please submit the form first.";
}
?>
