<?php
    session_start();
?>
<!doctype html>
<html>
    <head>
        <title>
            
        </title>
    </head>
    <body>
        <?php
            $connection= mysqli_connect("localhost","id8385171_acc","sravan1234","id8385171_accounts");
            $pass=$_POST["password"];
            $password=sha1($pass);
            $email=$_SESSION["email"];
            $query="UPDATE registrations SET password='$password' WHERE email = '$email' ";
            $result=mysqli_query($connection,$query);
            if(!$result){
                echo "Your password has not been changed.";
                echo '<a href="forgot.php"> Try Again </a>';
            }
            else{
                echo "YOur Password has been changed.";
                echo '<a href= "main.html" >Continue to My application</a>';
            }
      ?>
    </body>
</html>