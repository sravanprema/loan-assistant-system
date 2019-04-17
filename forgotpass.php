<?php
session_start();
?>
<!-- forgot password processing -->
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    
    <body>
        <?php
            $email=$_POST["email"];
            $_SESSION['email']=$email;
            $otps = "m230ld9nb45";
            mail($email,"One Time Password",$otps);
            echo "A mail is sent to Your Email. Make Sure you change your password";
            echo "Enter the Code Recieved Here";
            $_SESSION['array']=$otps;
        ?>
        <form action="recovery.php" method="post">
            <input type="text" name="code" placeholder="Unique Code"required>
            <input type="submit" value="Submit">
        </form>
    </body>
</html>