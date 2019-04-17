<?php
session_start();
?>
<!-- Loan process -->
<!DOCTYPE html>
<html>
    <head>
        <title>Login Processing</title>
    </head>
    
    <body><center>
        <?php
        
            $months=$_POST['months'];
            $loan=$_SESSION['loanamount'];
            $name=$_SESSION['name'];
            $empcode=$_SESSION['employee'];
            $gross=$_SESSION['gross'];
            $net=$_SESSION['net'];
            $deduct=$_SESSION['deduct'];
            $age=$_SESSION['age'];
            
                
            $interest=($loan*12*(($months+1)/2)/1200);
            echo "Interest for $months months "; 
            echo $interest;echo '<br>';
            echo "Interest per Month"; 
            $interestm=($interest)/$months;
            echo $interestm;echo '<br>';
            echo "EMI :" ; $emi=$loan/$months;
            echo $emi; echo '<br>';
            echo "Total Payment \n";
            $total= $emi+$interestm;
            echo $total;echo '<br>';
          
            
            $check= 0.4 * $gross;
            $check1= $net-$check;
            
            if(($check1<$total)||($check1==$total))
            {
                echo "Your Loan cannot be Granted as you dont have enough salary to take back home";echo '<br>';
                $money=($age+($months/12));
                if($money>60){
                    echo "You even do not have enough Age to pay back your Debt."; echo '<br>';
                }
                echo '<a href="application_form.html">Go Back and Alter the Number of Months [OR] Your Loan Amount</a>';
            
            }
                
        ?>
        </center>
    </body>
</html>