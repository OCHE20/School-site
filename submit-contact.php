<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    if(empty($name)|| empty($email) || empty($message)){
        echo "All fields required.";
        exit;
    }
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Invalid email format.";
        exit;
    }

    $to = "abahmeshach7@gmail.com";
    $subject = "New contact message from Mesh Hotel Website";
    $body = "Name:" $name\nEmail:
    $email\n\nMessage:\n$message;
    $headers = "From: $email":

    if(mail($to,$subject,$body,$headers)){
        echo "Thank you for your message! We will get back to you soon.";
    } else{
        echo "Sorry, something went wrong. Please try again.";
    }
    
    
} else {
    echo "Invalid request.";
}
?>