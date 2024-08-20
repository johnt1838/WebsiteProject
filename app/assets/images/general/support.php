<?php
$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $user_name = $_POST['name'];
        $user_email = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "konstantinosskate@gmail.com";
        $body = "";

        $body .= "From: " . $user_name . "\r\n";
        $body .= "Email: " . $user_email . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        mail($to, $messageSubject, $body);

        $message_sent = true;
    }

}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="default_styles.css">
    <link rel="stylesheet" href="stylesSupp1.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

    <title>Support</title>
</head>

<body>

    <ul>
        <li><a href="index.php">NOtes</a></li>
        <li><a href="faqs.html">FAQs</a></li>
        <li class="active">
            </liclass><a href="support.php">Υποστήριξη</a></li>
        <li><a href="AboutUs.html">About Us</a></li>
        <li style="float:right"><a href="/login/signup.php">Register</a></li>
        <li style="float:right"><a href="/login/login.php">Login</a></li>
    </ul>


    <section class="contact">

        <div class="content">

            <h2>Contact Us</h2>
            <p>Στην σελίδα υποστήριξης μπορείτε να μας στείλετε τύχον προβλήματα ή τυχόν ερωτήσεις, συμπληρώνοντας τα
                παρακάτω πεδία.
            </p>
        </div>

        <div class="container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Διεύθυνση</h3>
                        <p>Ippokratous 1,<br>Lamia,Ellada,<br>35100</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Τηλέφωνο</h3>
                        <p>6978787878</p>
                    </div>
                </div>

                <div class="box">
                    <div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    <div class="text">
                        <h3>Email</h3>
                        <p>mplampla@gmail.com</p>
                    </div>
                </div>

            </div>


            <div class="contactForm">
                <form action="support.php" method="POST">
                    <h2>Send Message</h2>
                    <div class="inputBox">
                        <input type="text" name="name" required="required">
                        <span>Full Name</span>
                    </div>

                    <div class="inputBox">
                        <input type="text" name="email" required="required">
                        <span>Email</span>
                    </div>

                    <div class="inputBox">
                        <textarea name="message" required="required"></textarea>
                        <span>Type your message</span>
                    </div>

                    <div class="inputBox">
                        <input type="submit" name="" value="Send">
                    </div>

                </form>

            </div>

        </div>

    </section>

</body>

</html>