<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);
    $to = "oh-torontohealthanalytics@ontariohealth.ca";
    // $subject = "Contact Form Submission from " . $name;
    $subject = "Contact Form Submission from ";
    $headers = "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: _EMAIL_\r\n";
    $headers .= "Reply-To: _EMAIL_\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();

    // $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n\n";
    $body .= "Message:\n" . $message;

    if (mail($to, $subject, $body, $headers)) {
        //  echo "Message sent successfully!";
        header("Location: index.html");
        exit();
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}