<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $name = isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';
    $message = isset($_POST['message']) ? htmlspecialchars($_POST['message']) : '';

    if (!empty($name) && !empty($email) && !empty($message)) {
        
        echo "Thank you for contacting us, " . $name . ". We will get back to you shortly.";

    } else {
        http_response_code(400); 
        echo "Please fill out all fields.";
    }
} else {
    http_response_code(403); // Forbidden
    echo "Access denied.";
}
?>