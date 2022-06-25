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
                    $hotelname = $_POST['hotelname'];
                    $ticketagent = $_POST['ticketagent'];
                    $cityname = $_POST['cityname'];
                    $credit = $_POST['credit'];
                    $debit = $_POST['debit'];
                    $description = $_POST['description'];
                    $agentbill = $_POST['agentbill'];
                    $clientbill = $_POST['clientbill'];
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
                        $sql = "INSERT INTO hotel (customerphone,customername,customeremail,passportno,customeraddress,passportcopy,ticketagent,hotelname,cityname,credit,debit,description,agentbill,clientbill,issuedate)
                        VALUES ('$customerphone','$customername','$customeremail','$passportno','$customeraddress','$new_passportcopy_name','$ticketagent','$hotelname','$cityname','$credit','$debit','$description','$agentbill','$clientbill','$dateAndTime')";
                        mysqli_query($conn, $sql);


                        $sql4= "SELECT balance FROM bank_details WHERE bankname='$bname'";
                        $result = $conn-> query($sql4);
                        $row = $result-> fetch_assoc();
                        $balance = $row["balance"];
                        $total = $balance + $paid;

                        $sql2 = "UPDATE `bank_details` SET balance = '$total' where bankname='$_POST[bname]' ";
                        
                        mysqli_query($conn, $sql2);


                        
                        header("Location: hotel.php");

                    }


                
                }

                


            



    }









?>
       
 