<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];
		$user_email = $_POST['user_email'];
		$tilefono = $_POST['tilefono'];
		$first_name = $_POST['first_name'];
		$last_name = $_POST['last_name'];

		if(!empty($user_name) && !empty($user_password) && !empty($tilefono) && !empty($first_name) && !empty($last_name))
		{

			//save to database
			$vkey = md5(time().$user_name);
			$user_password = md5($user_password);
			
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,user_password,user_email,vkey, verification, tilefono, first_name, last_name) values ('$user_id','$user_name','$user_password','$user_email', '$vkey', '0', '$tilefono', '$first_name', '$last_name')";

			mysqli_query($con, $query);
			
			
			$to = $user_email;
			$subject = "Email verification"; //metavliti gia na pairnume to mail
			$message = "Πάτα το λίνκ για να ολοκληρωθεί η εγγραφή σου: 'no-notes.tk/login/verify.php?vkey=$vkey"; //minima pou stelnume sto mail
			$headers = "From: info@no-notes.tk";
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers = "Content-type:text/html;charset=UTF-8" . "\r\n";

            mail($to,$subject,$message,$headers);
            
			header("Location: login.php");

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
        <meta charset="utf-8">
        <title>Sign Up</title>
        
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="box">
            <h2>SignUp</h2>
            <form method="post">
                
                <div class="inputBox">
                    <input type="text" name="first_name" pattern='[a-zA-Z]*' required="">
                    <label>First Name</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="last_name" pattern='[a-zA-Z]*' required="">
                    <label>Last Name</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="user_name" pattern='[a-zA-Z0-9]*' required="">
                    <label>Username</label>
                </div>

                <div class="inputBox">
                    <input type="text" name="user_email" pattern='^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$'  required="">
                    <label>Email</label>
                </div>

                
                <div class="inputBox">
                    <input type="password" name="user_password" pattern='[a-zA-Z0-9]*' required="" >
                    <label>Password</label>
                </div>
                
                <div class="inputBox">
                    <input type="text" name="tilefono" pattern='[0-9]*' required="">
                    <label>Τηλέφωνο</label>
                </div>


                <input id="button" type="submit"  value="Submit">

                <div class="inputBox">
                <a href="login.php">Click to Login</a><br><br>
                
            </div>

            </form>
        </div>
    </body>


</html>