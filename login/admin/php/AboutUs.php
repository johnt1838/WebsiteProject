<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="default_styles.css">
  <link rel="stylesheet" href="aboutus_styles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <title>AboutUs</title>
</head>

<body>


  <ul>
    <li><a href="index.php">Notes</a></li>
    <li><a href="mathimata.php">Edit Notes</a></li>
    <li><a href="faqs.php">FAQs</a></li>
    <li><a href="support.php">Υποστήριξη</a></li>
    <li class="active"><a href="AboutUs.php">About Us</a></li>
    <li><a href="users.php">Users</a></li>
    <li style="float:right"><a href="logout.php">Logout</a></li>
     <li style="float:right"><a><?php print $user_data['user_name']; ?></a></li>
  </ul>


  <div class="wrapper">
    <h1>Η ομάδα μας</h1>

    <div class="team">

      <div class="team_member">
        <div class="team_img">
          <img class="image" src="kanwmpam1.PNG" alt="Team_image">
        </div>

        <h3>Κωνσταντίνος Μπακαλάρος</h3>
        <p class="role">Διαχειριστης</p>
        <p>Φοιτητής τμήματος Πληροφορικής και Τηλεπικοινωνιών. <br></br><!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/KBakalaros" data-color-scheme="no-preference: dark; light: dark; dark: dark;" data-size="large" data-show-count="true" aria-label="Follow @KBakalaros on GitHub">Follow @KBakalaros</a></p>

      </div>

      <div class="team_member">
        <div class="team_img">
          <img class="image" src="golden1.png" alt="Team_image">
        </div>
        
        <h3>Χρυσόστομος Παπαθανασίου</h3>
        <p class="role">Διαχειριστης</p>
        <p>Φοιτητής τμήματος Πληροφορικής και Τηλεπικοινωνιών. <br></br><!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/GoldenPap" data-color-scheme="no-preference: dark; light: dark; dark: dark;" data-size="large" data-show-count="true" aria-label="Follow @GoldenPap on GitHub">Follow @GoldenPap</a></p>
        
      </div>
      <div class="team_member">
        <div class="team_img">
          <img class="image" src="johnterp.png" alt="Team_image">
        </div>
        
        <h3>Ιωάννης<br>Τέρπο</h3>
        <p class="role">Διαχειριστης</p>
        <p>Φοιτητής τμήματος Πληροφορικής και Τηλεπικοινωνιών. <br></br>
        <!-- Place this tag where you want the button to render. -->
<a class="github-button" href="https://github.com/johnt1838" data-color-scheme="no-preference: dark; light: dark; dark: dark;" data-size="large" data-show-count="true" aria-label="Follow @johnt1838 on GitHub">Follow @johnt1838</a>
        </p>
      </div>
    </div>
  </div>


<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>

</html>