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
                    $customerphone = $_POST['customerphone'];
                    $customername = $_POST['customername'];
                    $customeremail = $_POST['customeremail'];
                    $passportno = $_POST['passportno'];
                    $customeraddress = $_POST['customeraddress'];
                    $refname = $_POST['refname'];
                    $description = $_POST['description'];
                    $voucherno = $_POST['voucherno'];
                    $amount = $_POST['amount'];
                    $paymethod = $_POST['paymethod'];
                    $bname = $_POST['bname'];
                    
                    $dateAndTime = date("Y-m-d H:i:s");

                    $passportcopy_name = $_FILES['passportcopy']['name'];
                    $tmp_passportcopy_name = $_FILES['passportcopy']['tmp_name'];
                    $passportcopy_ex = pathinfo($passportcopy_name, PATHINFO_EXTENSION);
                    $passportcopy_ex_lc= strtolower($passportcopy_ex);
                    $allowed_exs = array("jpg", "jpeg", "png");
                    if(in_array($passportcopy_ex_lc, $allowed_exs)){
                        $new_passportcopy_name = uniqid("IMG-", true).'.'.$passportcopy_ex_lc;
                        $passportcopy_upload_path = '../assets/uploads/'.$new_passportcopy_name;       
                        move_uploaded_file($tmp_passportcopy_name, $passportcopy_upload_path);
                        $sql = "INSERT INTO advancepayment (customerphone,customername,customeremail,passportno,customeraddress,passportcopy,refname,description,voucherno,amount,paymethod,issuedate)
                        VALUES ('$customerphone','$customername','$customeremail','$passportno','$customeraddress','$new_passportcopy_name','$refname','$description','$voucherno','$amount','$paymethod','$dateAndTime')";
                        mysqli_query($conn, $sql);
                        header("Location: advance_payment.php");

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

                


            



    }









?>
       
 