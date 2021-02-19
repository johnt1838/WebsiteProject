<?php
session_start();

    //include("config.php");
    include("functions.php");
    include("connection.php");

    $user_data = check_login($con);

?>
<?php 
session_start();

	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		//$id = $_POST['inst_ID'];
		$name = $_POST['inst_Name'];
        $link = $_POST['Inst_Ws'];
        
		if(!empty($name) && !empty($link))
		{

			$query = "insert into notesvol2 (inst_Name,Inst_Ws,inst_ph) values ('$name','$link','0')";

			mysqli_query($con, $query);
            
			header("Location: mathimata.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Notes</title>
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
      <li  class="active"><a href="mathimata.php">Edit Notes</a></li>
      <li><a href="faqs.php">FAQs</a></li>
      <li><a href="support.php">Υποστήριξη</a></li>
      <li><a href="AboutUs.php">About Us</a></li>
      <li><a href="users.php">Users</a></li>
      <li style="float:right"><a href="logout.php">Logout</a></li>
      <li style="float:right"><a><?php print $user_data['user_name']; ?></a></li>
    </ul>
<br>
<br>

    
<div class="container" style="margin-top: 200px">
    <table class="table" style="background-color: #fff">
        <thead id="thead" style="background-color: #26a2af">
        <tr>
            <th>Sr.No</th>
            <th>Subject</th>
            <th>Link</th>
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
                    <th><?php echo $NotesId;?></th>
                    <th><?php echo $name;?></th>
                     <td><a alert=<?php echo $link?> class="btn btn-danger btn-sm">Open</a> </td>
                    <td><a href="delete-notes.php?NotesId=<?php echo $NotesId?>" class="btn btn-danger btn-sm">Delete</a> </td>
                </tr>
                
                <?php
                $sr++;
            }
        }
        ?>
        
        </tbody>
    </table>
    <form method="post" position="relative">
                <div class="inputBox">
                    <input type="text" name="inst_Name" required="" >
                    <label>Subject</label>
                </div>

                
                <div class="inputBox">
                    <input type="text" name="Inst_Ws" required="">
                    <label>Link</label>
                </div>

                <input id="button" type="submit" value="Submit">

    </form>
</div>

</body>
</html>


