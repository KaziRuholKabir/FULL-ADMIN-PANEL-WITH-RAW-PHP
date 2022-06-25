<?php

include("../db_conn.php");
error_reporting(0);
$ti=$_GET['ti'];



    
    $query = "DELETE FROM visarate where visarate_id='$ti' ";
    //Data delete query
    mysqli_query($conn,$query);
    header("Location: visa_rate.php");
?>