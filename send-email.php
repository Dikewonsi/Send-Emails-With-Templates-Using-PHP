<?php
if (isset($_POST['submit'])) {
    $title = htmlspecialchars($_POST['title']);
    $fullname = htmlspecialchars($_POST['fullname']);
    $email = htmlspecialchars($_POST['email']);
    // $content = htmlspecialchars($_POST['content']);

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }

    // Set the location of the template file to be loaded
    $template_file = "./email-template.php";

    // Set the email 'from' information
    $email_from = "Phenom Talent MGT <info@phenomtalentmanagement.com>";

    // Create a list of the variables to be swapped in the HTML template
    $swap_var = array(
        "{SITE_ADDR}" => "https://phenomtalentmanagement.com",
        "{EMAIL_TITLE}" => "$title",
        "{TO_NAME}" => "$fullname",
        // "{EMAIL_CONTENT}" => "$content",
        "{TO_EMAIL}" => "$email"
    );

    // Create the email headers to begin the email
    $email_headers = "From: " . $email_from . "\r\nReply-To: " . $email_from . "\r\n";
    $email_headers .= "MIME-Version: 1.0\r\n";
    $email_headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

    // Load the email to and subject from the $swap_var
    $email_to = $swap_var['{TO_EMAIL}'];
    $email_subject = $swap_var['{EMAIL_TITLE}'];

    // Load in the template file for processing (after we make sure it exists)
    if (file_exists($template_file)) {
        $email_message = file_get_contents($template_file);
    } else {
        die("Unable to locate your template file");
    }

    // Search and replace for predefined variables, like SITE_ADDR, {TO_NAME}, {EMAIL_CONTENT}, etc.
    foreach (array_keys($swap_var) as $key) {
        if (strlen($key) > 2 && trim($swap_var[$key]) != '') {
            $email_message = str_replace($key, $swap_var[$key], $email_message);
        }
    }

    // Send the email
    if (mail($email_to, $email_subject, $email_message, $email_headers)) {
        echo "Email sent successfully to $email!";
    } else {
        echo "System failed while sending email!";
    }
} else {
    echo "No form data received!";
}
?>
