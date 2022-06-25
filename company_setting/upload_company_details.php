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
                    $name = $_POST['comapny_title'];
                    $password = $_POST['company_slogan'];
                    $contact = $_POST['company_mobile'];
                    $email = $_POST['company_address'];
                    
                    $sql = "INSERT INTO company_details (title,slogan,mobile,address)
                    VALUES ('$name','$password','$contact','$email')";
                    mysqli_query($conn, $sql);
                    header("Location: company_setting.php");
                
                }






    }









?>
       


       