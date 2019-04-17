<!-- this is the code for register process -->
<html>
    <head>
        <title>login Process</title>
        <meta charset="utf-8">
    </head>

    <body>
        <?php
            $connection= mysqli_connect("localhost","id8385171_acc","sravan1234","id8385171_accounts");
            // check connection
            if(!$connection)
            {
                die("Your Server is not Connected to the database!");
            }
            else
            {
                                

            $pass=$_POST["pass"];
            $pass1=sha1($pass);
            echo $pass1; echo'<br>';
            $email=$_POST["email"];
            
            // prevention of sql injection
            $email=stripcslashes($email);

            $result="SELECT password FROM registrations WHERE email='$email'";
                
                $password1 = mysqli_query($connection,$result); 
                $password= mysqli_fetch_array($password1);
              
		    if($password[0]==$pass1)
                { echo("Getting Redirected to Your Page");
               // header.Location('main.html');
               // header("Location: main.html");
               print '<script>window.location.href="main.html";</script>';
             }
             
            else{
                print '<script>document.write("Your Credentials are Wrong. Try Again!");
                window.location.href="login.html";
                </script>';
            }
              
            }
        ?>
    </body>
</html>