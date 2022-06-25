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
                    $agentName = $_POST['agentName'];
                    $agentPhone = $_POST['agentPhone'];
                    $agentAddress = $_POST['agentAddress'];
                    $agentType = $_POST['agentType'];
                    $international = $_POST['international'];
                    $domestic = $_POST['domestic'];
                    $dateAndTime = date("Y-m-d H:i:s");
                    $zero="0";
                        $sql = "INSERT INTO agent (agentname, agentphone,agentaddress,agenttype,international,domestic)
                        VALUES ('$agentName','$agentPhone','$agentAddress','$agentType','$international','$domestic')";
        


                        if($domestic=="Active"){
                            $sql2 = "INSERT INTO domt (agentname,balancedom,issuedate)
                            VALUES ('$agentName','$zero','$dateAndTime')";
                            mysqli_query($conn, $sql2);
                            
        
                        }
                        mysqli_query($conn, $sql);
                        header("Location: agent.php");

                    }


                
                

                


            



    }









?>
       
 