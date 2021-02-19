<?php 

session_start();

	include("connection.php"); // Mporoume na xrisimopoiisoume require_once kalitera
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$user_password = $_POST['user_password'];

        $user_password = md5($user_password);
    
		if(!empty($user_name) && !empty($user_password))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);
			
			

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					$verification = $user_data['verification'];
					
					$admin = $user_data['admin'];
					
					
				if($verification == 1 && $admin == 0){	
					if($user_data['user_password'] === $user_password)
					{

						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}elseif($verification == 1 && $admin == 1){
				    if($user_data['user_password'] === $user_password)
					{
                        
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: /login/admin/users.php");
						die;
					}
				    }else{
				        echo "Den exeis kanei verify";
				    }
				
				}
				
			}
			
			echo "wrong username or password!!!!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <meta name="viewport" content="width=device-width, initial-scale=0">
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        <div class="box">
            <h2>Login</h2>
            <form method="post">
                <div class="inputBox">
                    <input type="text" name="user_name" required="" >
                    <label>Username</label>
                </div>

                
                <div class="inputBox">
                    <input type="password" name="user_password" required="">
                    <label>Password</label>
                </div>


                <input id="button" type="submit" value="Submit">

                <div class="inputBox">
                <a href="signup.php">Click to Signup</a><br><br>
            </div>

            </form>
        </div>
    </body>

</html>