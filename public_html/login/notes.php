<?php
session_start();

    include("connection.php");
    include("functions.php");

    $user_data = check_login($con);

?>


<!DOCTYPE html>
<html>
<head>
  
    <title>Notes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="default_styles.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> <!-- auto edw ftiaei -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
</head>
<body>

  
    <ul>
      <li><a href="index.php">NOtes</a></li>
      <li  class="active"><a href="notes.php">Σημειώσεις</a></li>
      <li><a href="faqs.php">FAQs</a></li>
      <li><a href="support.php">Υποστήριξη</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
      <li style="float:right"><a href="logout.php">Logout</a></li>
      <li style="float:right"><a><?php print $user_data['user_name']; ?></a></li>
    </ul>
    
    <div class="container" style="margin-top: 200px">
    <table class="table" style="background-color: #fff">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>Subject</th>
            <th>Action</th>
      
        </tr>
        </thead>
        <tbody>
        <?php
        include "config.php";
        include_once "Common.php";
        $common = new Common();
        $records = $common->getAllnotes($con);
        if ($records->num_rows>0){
            $sr = 1;
            while ($record = $records->fetch_object()) {
                $NotesId = $record->inst_ID;
                $name = $record->inst_Name;
                $link = $record->Inst_Ws;
                ?>
                <tr>
                    <th><?php echo $name;?></th>
                    <td><a href="<?php echo $link?>" class="btn btn-danger btn-sm">Download</a> </td>
                </tr>
                
                <?php
                $sr++;
            }
        }
        ?>
        
        </tbody>
    </table>

   </div> 
</body>
</html>

