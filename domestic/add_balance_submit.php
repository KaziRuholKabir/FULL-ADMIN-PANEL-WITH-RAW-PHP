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
                    $domt_id = $_POST['domt_id'];
                    $vouchernodom = $_POST['vouchernodom'];
                    $amount = $_POST['amount'];           
                    $bname = $_POST['bname'];
                    $chequeno = $_POST['chequeno'];
                    $accountno = $_POST['accountno'];
                    
                    $dateAndTime = date("Y-m-d H:i:s");

                        $sql = "UPDATE `domt` SET vouchernodom = '$_POST[vouchernodom]',banknamedom = '$_POST[bname]',accountno = '$_POST[accountno]',chequenamedom = '$_POST[chequeno]'";
                        mysqli_query($conn, $sql);


                        $sql2= "SELECT balancedom FROM domt WHERE domt_id='$domt_id'";
                        $result = $conn-> query($sql2);
                        $row = $result-> fetch_assoc();
                        $balancedom = $row["balancedom"];
                        $total = $balance + $amount;
                        $sql3 = "UPDATE `domt` SET balancedom = '$total' where domt_id='$_POST[domt_id]' ";
                        mysqli_query($conn, $sql3);


                        $sql4= "SELECT balance FROM bank_details WHERE bankname='$bname'";
                        $result = $conn-> query($sql4);
                        $row = $result-> fetch_assoc();
                        $balance = $row["balance"];
                        $total = $balance - $amount;
                        $sql5 = "UPDATE `bank_details` SET balance = '$total' where bankname='$_POST[bname]' ";
                        mysqli_query($conn, $sql5);



                        header("Location: domestic.php");


                    


                
                }

               

            



    }









?>
       
 