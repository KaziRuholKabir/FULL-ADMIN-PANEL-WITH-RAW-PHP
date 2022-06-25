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

                        $sql = "UPDATE `mandeposit` SET authorname = '$_POST[authorname]',refname = '$_POST[refname]',voucherno = '$_POST[voucherno]',amount = '$_POST[amount]',description = '$_POST[description]',bname = '$_POST[bname]',bacc = '$_POST[bacc]',paymethod = '$_POST[paymethod]',issuedate = '$dateAndTime";
                        mysqli_query($conn, $sql);


                    


                        header("Location: debit.php");


                    


                
                }

               

            


                if(isset($_POST['delete']))
                {
                    $expenses_id = $_POST['expenses_id'];
                    $query = "DELETE FROM expenses where expenses_id='$expenses_id' ";
                    //Data delete query
                    mysqli_query($conn,$query);
                    header("Location: debit.php");
                }

    }









?>
       
 