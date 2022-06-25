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


                    $agentname = $_POST['agentname'];
                    $agentcost = $_POST['agentcost'];
                    $clientcharge = $_POST['clientcharge'];
                    $sname = $_POST['sname'];
                    $description = $_POST['description'];
                   
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
                        $sql = "INSERT INTO othser (customerphone,customername,customeremail,passportno,customeraddress,passportcopy,agentname,agentcost,clientcharge,issuedate,sname,description)
                        VALUES ('$customerphone','$customername','$customeremail','$passportno','$customeraddress','$new_passportcopy_name','$agentname','$agentcost','$clientcharge','$dateAndTime','$sname','$description')";
                        mysqli_query($conn, $sql);
                        header("Location: other_service.php");

                    }


                    


                
                }

                


            



    }









?>
       
 