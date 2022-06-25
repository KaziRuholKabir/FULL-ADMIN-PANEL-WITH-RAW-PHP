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
                    $visaname = $_POST['visaname'];
                    $visaprice = $_POST['visaprice'];
                    
                        $sql = "INSERT INTO visarate (visaname,visaprice)
                        VALUES ('$visaname','$visaprice BDT')";
                        mysqli_query($conn, $sql);


                       

                       


                        
                        header("Location: visa_rate.php");

                    }


                
}

                


            



    









?>
       
 