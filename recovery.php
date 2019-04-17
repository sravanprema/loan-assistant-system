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
            $codes=$_SESSION['array'];
            $code=$_POST['code'];
            $count=0;
            $i=9;
            do{
                if($codes==$code)
                {
                    $i=99;
                    echo "Your Code is Accepted ";
                    echo "Change Password";
                    echo '<form action="changepassword.php" method="post">
                    <input type="text" name="password" placeholder="Enter New Password">
                    <input type="submit" value="Submit">                    ';
                    
                }
                if($count>14){
                    echo "The Entered Code is not valid";
                    echo '<a href="forgot.php">Go back and Try Again </a>';
                }
                $count=$count+1;
            }while($i!=99);
        ?>
        </form>
    </body>
</html>