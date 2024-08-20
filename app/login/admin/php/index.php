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
  
  <style>
    body, html {
      height: 100%;
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
    }
    
    * {
      box-sizing: border-box;
    }
    
    .bg-image {
      /* Full height */
      height: 100%; 
      
      /* Center and scale the image nicely */
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
    }
    
    /* Images used */
    .img1 { background-image: url("notes3.jpg"); }
    .img2 { background-image: url("notes4.jpg"); }
    .img3 { background-image: url("purple.jpg"); }
    .img4 { background-image: url("yellownotes.jpg"); }
    .img5 { background-image: url("purple2.jpg"); }
    .img6 { background-image: url("purple1.jpg"); }
    
    /* Position text in the middle of the page/image */
    .bg-text {
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0, 0.4); /* Black w/opacity/see-through */
      color:  rgb(104, 97, 165);
      
      font-weight: bold;
      font-size: 80px;
      border: 10px solid  rgba(104, 97, 165,0.8);
      position: fixed;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      z-index: 2;
      width: 300px;
      padding: 20px;
      text-align: center;
    }
    </style>
</head>
<body>

  
    <ul>
      <li class="active"><a href="index.php">NOtes</a></li>
      <li><a href="mathimata.php">Edit Notes</a></li>
      <li><a href="faqs.php">FAQs</a></li>
      <li><a href="support.php">Υποστήριξη</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
      <li><a href="users.php">Users</a></li>
      <li style="float:right"><a href="logout.php">Logout</a></li>
      <li style="float:right"><a><?php print $user_data['user_name']; ?></a></li>
    </ul>
    
     <div class="bg-image img1"></div>
        <div class="bg-image img2"></div>
        <div class="bg-image img3"></div>
        <div class="bg-image img4"></div>
        <div class="bg-image img5"></div>
        <div class="bg-image img6"></div>
        
        <div class="bg-text">NOtes</div>
    



</body>
</html>