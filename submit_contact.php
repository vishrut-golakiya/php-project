<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Here, you can add code to send email or save the contact details to a database

    echo "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Contact Submitted - Demo Website</title>
        <link rel='stylesheet' href='style.css'>
    </head>
    <body>
        <header>
            <h1>Contact Us</h1>
            <nav>
                <a href='index.php'>Home</a>
                <a href='about.php'>About</a>
                <a href='contact.php'>Contact</a>
            </nav>
        </header>
        <main>
            <h2>Contact Form Submitted</h2>
            <p>Thank you, $name! Your message has been received.</p>
        </main>
        <footer>
            <p>&copy; 2024 Demo Website</p>
        </footer>
    </body>
    </html>";
}
?>
