<!-- this is the code for register process -->
<!DOCTYPE html>
<html>
    <head>
        <title>Register Process</title>
        <meta charset="utf-8">
    </head>

    <body><center>
        <?php
            $connection= mysqli_connect("localhost","id8385171_acc","sravan1234","id8385171_accounts");
            // check connection
            if(!$connection)
            {
                die("Your Server is not Connected to the database!");
            }
            else{
            echo"You have been connected to the database";
            $fname=$_POST["fname"];
            $lname=$_POST["lname"];
            $gender=$_POST["gender"];
            $pass=$_POST["pass"];
            $pass1=sha1($pass);
            $confirm=$_POST["confirm"];
            $email=$_POST["email"];
            $mobile=$_POST["mobile"];
            
            // prevention of sql injection
            $fname=stripcslashes($fname);
            $lname=stripcslashes($lname);
            $gender=stripcslashes($gender);
            $pass1=stripcslashes($pass1);
            $confirm=stripcslashes($confirm);
            $email=stripcslashes($email);
            $mobile=stripcslashes($mobile);
            
            if($confirm===$pass){
                
                $values="INSERT INTO registrations(firstname ,lastname, password, email, mobile, gender) VALUES('$fname','$lname','$pass1','$email','$mobile','$gender') ";
                $server=mysqli_query($connection,$values);
                if(!$server){
                    echo"Your values have not been added!";
                    echo'<br><a href="register.html">Go back and Try Again</a>';
                }
                else{
                    echo"Your values have been added!";
                    echo'<br><a href="login.html">Go Back</a>';
                }
            }
            }
        ?></center>
    </body>
</html>