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
                    $agent_id = $_POST['agent_id'];
                    $agentName = $_POST['agentname'];
                    $agentPhone = $_POST['agentphone'];
                    $agentAddress = $_POST['agentaddress'];
                    $agentType = $_POST['agenttype'];
                    $international = $_POST['international'];
                    $domestic = $_POST['domestic'];
                    
                        $sql = "UPDATE `agent` SET agentname = '$_POST[agentname]',agentphone = '$_POST[agentphone]',agentaddress = '$_POST[agentaddress]',agenttype = '$_POST[agenttype]',international = '$_POST[international]',domestic = '$_POST[domestic]' where agent_id = '$_POST[agent_id]' ";
                       
                        mysqli_query($conn, $sql);
                        header("Location: agent.php");

                    


                
                }



                if(isset($_POST['delete']))
                {
                    $agent_id = $_POST['agent_id'];
                    $query = "DELETE FROM agent where agent_id='$agent_id' ";
                    //Data delete query
                    mysqli_query($conn,$query);
                    header("Location: agent.php");
                }

                


            



    }









?>
       
 