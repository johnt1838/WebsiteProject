<?php
if(isset($_GET['vkey'])){
    $vkey = $_GET['vkey'];
    include("connection.php");
    
    $query = "select * from users where vkey = '$vkey' limit 1";
    $result = mysqli_query($con, $query);
    
    if($result && mysqli_num_rows($result) > 0){
        
        $update = $con->query("UPDATE users SET verification = 1 WHERE vkey = '$vkey' LIMIT 1");
        
    
        if($update){
            echo "yparxeis sindesou me to login";
        }
    }
}else{
    die("Something went wrong");
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>verification</title>
        <link rel="stylesheet" href="style1.css">
    </head>
    <body>
        
    </body>

</html>

