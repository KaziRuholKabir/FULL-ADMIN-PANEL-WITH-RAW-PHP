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
                    $ticketagent = $_POST['ticketagent'];
                    $ticketno = $_POST['ticketno'];
                    $sector = $_POST['sector'];
                    $segment = $_POST['segment'];
                    $traveldate = $_POST['traveldate'];
                    $grossfare = $_POST['grossfare'];
                    $basefare = $_POST['basefare'];
                    $commission = $_POST['commission'];
                    $ait = $_POST['ait'];
                    $clientbill = $_POST['clientbill'];
                    $due = $_POST['due'];
                    $paid = $_POST['paid'];
                    $servicecharge = $_POST['servicecharge'];
                    $discount = $_POST['discount'];
                    $exprofit = $_POST['exprofit'];
                    $netpay = $_POST['netpay'];
                    $dateAndTime = date("Y-m-d H:i:s");


                    $passportcopy_name = $_FILES['passportcopy']['name'];
                    $tmp_passportcopy_name = $_FILES['passportcopy']['tmp_name'];
                    $passportcopy_ex = pathinfo($passportcopy_name, PATHINFO_EXTENSION);
                    $passportcopy_ex_lc= strtolower($passportcopy_ex);
                    $allowed_exs = array("jpg", "jpeg", "png");
                    if(in_array($passportcopy_ex_lc, $allowed_exs)){
                        $new_passportcopy_name = uniqid("IMG-", true).'.'.$passportcopy_ex_lc;
                        $passportcopy_upload_path = '../../assets/uploads/'.$new_passportcopy_name;       
                        move_uploaded_file($tmp_passportcopy_name, $passportcopy_upload_path);


                        $sql = "UPDATE `domestic` SET customerphone = '$_POST[customerphone]',customername = '$_POST[customername]',customeremail = '$_POST[customeremail]',passportno = '$_POST[passportno]',customeraddress = '$_POST[customeraddress]',ticketagent = '$_POST[ticketagent]',ticketno = '$_POST[ticketno]',sector = '$_POST[sector]',segment = '$_POST[segment]',traveldate = '$_POST[traveldate]',grossfare = '$_POST[grossfare]', basefare = '$_POST[basefare]',commission = '$commission',passportcopy= '$new_passportcopy_name',ait = '$ait',clientbill = '$clientbill',due = '$due',paid = '$paid',servicecharge = '$servicecharge',discount = '$discount',exprofit = '$exprofit',netpay = '$netpay',lastedit = '$dateAndTime' where ticket_id='$_POST[ticket_id]' ";
                       
                        mysqli_query($conn, $sql);
                        header("Location: ticket_int.php");

                    }


                
                }

                


            
                if(isset($_POST['delete']))
                {
                    $ticket_id = $_POST['ticket_id'];
                    $query = "DELETE FROM domestic where ticket_id='$ticket_id' ";
                    //Data delete query
                    mysqli_query($conn,$query);
                    header("Location: ticket_int.php");
                }



    }









?>
       
 