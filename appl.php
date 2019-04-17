<?php
SESSION_START();
?>
<!-- this is the code for register process -->
<!DOCTYPE html>
<html>
    <head>
        <title>application form values</title>
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
            $loanamount=$_POST["loanamount"];
            $name=$_POST["name"];
            $ro=$_POST["ro"];
            $dob=$_POST["dob"];
            $age=$_POST["age"];
            $radio=$_POST["radio"];
            $design=$_POST["design"];
            $empcode=$_POST["empcode"];
            $net=$_POST["net"];
            $ded=$_POST["ded"];
            $gross=$_POST["gross"];
            $dojd=$_POST["dojd"];
            $pos=$_POST["pos"];
            $retdue=$_POST["retdue"];
            $pan=$_POST["pan"];
            $panupload=$_POST["panupload"];
            $aadhar=$_POST["aadhar"];
            $aadharupload=$_POST["aadharupload"];
            $addres=$_POST["addres"];
            $addoff=$_POST["addoff"];
            $phoneres=$_POST["phoneres"];
            $phoneoff=$_POST["phoneoff"];
            $assets=$_POST["assets"];
            $accno=$_POST["accno"];
            $gua1=$_POST["gua1"];
            $gua2=$_POST["gua2"];
            
            // prevention of sql injection
            $loanamount=stripcslashes($loanamount);
            $name=stripcslashes($name);
            $ro=stripcslashes($ro);
            $dob=stripcslashes($dob);
            $age=stripcslashes($age);
            $radio=stripcslashes($radio);
            $design=stripcslashes($design);
            $empcode=stripcslashes($empcode);
            $net=stripcslashes($net);
            $ded=stripcslashes($ded);
            $gross=stripcslashes($gross);
            $dojd=stripcslashes($dojd);
            $pos=stripcslashes($pos);
            $retdue=stripcslashes($retdue);
            $pan=stripcslashes($pan);
            $panupload=stripcslashes($panupload);
            $aadhar=stripcslashes($aadhar);
            $aadharupload=stripcslashes($aadharupload);
            $addres=stripcslashes($addres);
            $addoff=stripcslashes($addoff);
            $phoneres=stripcslashes($phoneres);
            $phoneoff=stripcslashes($phoneoff);
            $assets=stripcslashes($assets);
            $accno=stripcslashes($accno);
            $gua1=stripcslashes($gua1);
            $gua2=stripcslashes($gua2);

                    
                $values="INSERT INTO applicationform(LOANAMOUNT, NAME, RELATION, DOB, AGE, GENDER, DESIGNATION, EMPLOYEECODE, NETSALARY,DEDUCTIONS, GROSS, DOJ, POS, RETDUE, PANCARD, PANFILE, AADHAR, AADHARFILE, RESIDENCE, OFFICE, RESCONTACT, OFFCONTACT, ASSETS, ACCNUMBER, GUA1, GUA2) VALUES ('$loanamount','$name','$ro','$dob','$age','$radio','$design','$empcode','$net','$ded','$gross','$dojd','$pos','$retdue','$pan','$panupload','$aadhar','$aadharupload','$addres','$addoff','$phoneres','$phoneoff','$assets','$accno','$gua1','$gua2')";

                $server=mysqli_query($connection,$values);
                
                if(!$server){
                    echo"You Details cannot been Saved!";
                    echo'<br><a href="register.html">Go back and Try Again</a>';
                }
                else{
                    
                    $_SESSION['loanamount']=$loanamount;
                    $_SESSION['name']=$name;
                    $_SESSION['employee']=$empcode;
                    $_SESSION['gross']=$gross;
                    $_SESSION['net']=$net;
                    $_SESSION['deduct']=$ded;
                    $_SESSION['age']=$age;
                    
                    $check=$gross*0.4;
                    
                    if((($check<$net)||($check==$net))&&($age<60))
                    {
                        echo "Enter Your Respective Desired Months Below and Submit. Your Loan Will be Processed.";
                        echo'      <form action="loanprocess.php" method="POST">
                                   <input type="text" name="months" placeholder="Enter The months For Your Loan">
                                   <input type="submit" value="Sumbit">
                                   </form> ';
                    }
                    else{
                        echo "Your Loan Cannot be granted as:"; echo'<br>';
                        echo "Age is more than 60."; echo'<br>';
                        echo "Your Age:"; echo $age;
                        echo "Your Net Salary is not enough to pay the Loan";
                        echo "Salary Should be More than $check"; echo '<br>';
                        echo "Your Salary : $net";
                    }
                }
            }
            
        ?></center>
    </body>
</html>