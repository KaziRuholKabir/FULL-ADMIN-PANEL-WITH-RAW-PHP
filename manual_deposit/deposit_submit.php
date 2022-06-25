<?php
    $timezone = date_default_timezone_set("Asia/Dhaka");
   
    $conn = mysqli_connect('localhost','root','','himu');
    // Database connection

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
        //Chechking the database is connected or not. If not then this line of code will execute
    }
    else{

            if(isset($_POST['submit']))
                {    
                    $authorname = $_POST['authorname']; 
                    $refname = $_POST['refname'];
                    $voucherno = $_POST['voucherno'];
                    $amount = $_POST['amount'];
                    $description = $_POST['description'];
                    $bname = $_POST['bname'];
                    $bacc= $_POST['bacc'];
                    $paymethod = $_POST['paymethod'];
                    $dateAndTime = date("Y-m-d H:i:s");
                        $sql = "INSERT INTO mandeposit (authorname,refname,voucherno,amount,description,paymethod,bname,bacc,issuedate)
                        VALUES ('$authorname','$refname','$voucherno','$amount','$description','$paymethod','$bname','$bacc','$dateAndTime')";
                        mysqli_query($conn, $sql);
                        header("Location: manual_deposit.php");

                    }



                    if($paymethod=="Bank"){
                        $sql4= "SELECT balance FROM bank_details WHERE bankname='$bname'";
                        $result = $conn-> query($sql4);
                        $row = $result-> fetch_assoc();
                        $balance = $row["balance"];
                        $total = $balance + $amount;
    
                        $sql2 = "UPDATE `bank_details` SET balance = '$total' where bankname='$_POST[bname]' ";
                        
                        mysqli_query($conn, $sql2);
    
                    }
                    


                
                }

                


            



    









?>
       
 