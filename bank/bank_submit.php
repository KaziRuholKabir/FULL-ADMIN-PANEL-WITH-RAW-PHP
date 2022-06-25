<?php

    $conn = mysqli_connect('localhost','root','','himu');
    // Database connection

    if($conn->connect_error){
        die('Connection Failed : '.$conn->connect_error);
        //Chechking the database is connected or not. If not then this line of code will execute
    }
    else{

            if(isset($_POST['submit']))
                {    
                    $bankname = $_POST['bankname'];
                    $accountno = $_POST['accountno'];
                    $balance="0";
                        $sql = "INSERT INTO bank_details (bankname, accountno, balance)
                        VALUES ('$bankname','$accountno','$balance')";
        
                        mysqli_query($conn, $sql);
                        header("Location: bank.php");

                    }


                
                

                


            



    }









?>
       
 