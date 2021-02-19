<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="default_styles.css">
    <link rel="stylesheet" href="faqs_styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <title>FAQs</title>
</head>

<body>


  <ul>
    <li><a href="index.php">Notes</a></li>
    <li><a href="notes.php">Σημειώσεις</a></li>
    <li class="active"><a href="faqs.php">FAQs</a></li>
    <li><a href="support.php">Υποστήριξη</a></li>
    <li><a href="AboutUs.php">About Us</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
    <li style="float:right"><a><?php print $user_data['user_name']; ?></a></li>
  </ul>

 <div class="container-fluid">

    <h2>Frequently Asked Questions(FAQs)</h2>
    <div class="accordion">
        <div class="icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
        <h4>Ποιοι είμαστε και τι κάνουμε;</h4>
    </div>

    <div class="panel">
        <p>Είμαστε 3 φοιτητές του τμήματος Πληροφορικής και Τηλεπικοινωνιών και η σελίδα που βλέπετε είναι το project μας για το μάθημα "Τεχνολογίες WWW".</p>

    </div>

    <div class="accordion">
        <div class="icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
        <h4>Τι σημειώσεις μπορώ να βρω στην σελίδα σας;</h4>
    </div>

    <div class="panel">
        <p>Μπορείτε να δείτε σημειώσεις των μαθημάτων του τμήματος μας. Οι περισσότερες από αυτές είναι γραμμένες από συμφοιτητές μας.</p>

    </div>

    <div class="accordion">
        <div class="icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
        <h4>Γιατί πρέπει να φτίαξω λογαριασμό;</h4>
    </div>

    <div class="panel">
        <p>Θα χρειαστείτε έναν λογαριασμό για να έχετε πρόσβαση στις ανεβασμένες σημειώσεις.</p>

    </div>

    <div class="accordion">
        <div class="icon"><i class="fa fa-plus" aria-hidden="true"></i></div>
        <h4>Erwtisi 4</h4>
    </div>

    <div class="panel">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Quasi dolore inventore eius! Modi quas ullam quia, 
            quasi harum laboriosam placeat obcaecati saepe error 
            explicabo, aut distinctio molestias iure vitae odio.</p>

    </div>

 </div>

 <script src="app.js"></script>

</body>

</html>