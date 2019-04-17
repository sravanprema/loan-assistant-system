<?php
            $connection= mysqli_connect("localhost","id8385171_acc","sravan1234","id8385171_accounts");
            // check connection
            if(!$connection)
            {
                die("Your Server is not Connected to the database!");
            }
            else
            {
            $email=$_POST["email"];
            $sql="select LOANAMOUNT, NAME, DESIGNATION, EMPLOYEECODE FROM applicationform where RESCONTACT='".$email."'";
            $r=mysqli_query($connection,$sql);
            $rowcount=mysqli_num_rows($r);
            echo "<center><table border = 3>";
            echo "<tr> 
            <th> LOAN AMOUNT </th> <th> NAME</th> <th> DESIGNATION</th> <th> EMPLOYEECODE</th>
            }
        ?>