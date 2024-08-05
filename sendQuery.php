<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);
            $to = "vinayak1995.australia@gmail.com";
            $headers = "From: $email";

            if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                echo "<div class='error'>All fields are required.</div>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='error'>Invalid email format.</div>";
            } else {
                $mail_sent = mail($to, $subject, $message, $headers);
                if ($mail_sent) {
                    echo "<div class='alert alert-success alert-dismissible fade show' role='alert'>Message sent Successfully!</div>";
                } else {
                    echo "<div class='alert alert-danger' role='alert'>Failed to send your message. Please try again later.</div>";
                }
            }
        }
?>