<?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $email = htmlspecialchars($_POST['email']);
            $subject = htmlspecialchars($_POST['subject']);
            $message = htmlspecialchars($_POST['message']);
            $to = "dpamneja@gmail.com"; // Replace with your email address
            $headers = "From: $email";

            if (empty($name) || empty($email) || empty($subject) || empty($message)) {
                echo "<div class='error'>All fields are required.</div>";
            } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "<div class='error'>Invalid email format.</div>";
            } else {
                $mail_sent = mail($to, $subject, $message, $headers);
                if ($mail_sent) {
                    echo "<div class='success'>Your message has been sent successfully.</div>";
                } else {
                    echo "<div class='error'>Failed to send your message. Please try again later.</div>";
                }
            }
        }
        ?>