<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"];

    // Save data to a text file (you may want to use a database in production)
    $data = "$name, $email, $contact\n";
    file_put_contents("form-data.txt", $data, FILE_APPEND);

    // Debug statement
    error_log("Form data saved: $data", 0);

    // Redirect to the thank you page
    header("Location: thank-you.html");
    exit();
} else {
    // Redirect to an error page if accessed directly
    header("Location: error.html");
    exit();
}
?>
