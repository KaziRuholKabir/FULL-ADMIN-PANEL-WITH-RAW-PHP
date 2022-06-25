<?php

if(isset($_POST['submit']) && isset($_FILES['header_part'])){
    include "db_conn.php";
    echo "<pre>";
    print_r($_FILES['header_part']);
    echo"<pre>";
    $img_name = $_FILES['header_part']['name'];
    $img_size = $_FILES['header_part']['size'];
    $tmp_name = $_FILES['header_part']['tmp_name'];
    $error = $_FILES['header_part']['error'];

    if($error ===0){
        if($img_size > 125000){
            $em = "Sorry, your file is too large.";
            header("Location: home.php?error=$em");
        }
        else{
            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc= strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png");
            if(in_array($img_ex_lc, $allowed_exs)){
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = '../assets/uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                $sql = "INSERT INTO header_part(header_url) VALUES('$new_img_name')";

                mysqli_query($conn, $sql);
                header("Location: company_setting.php");






            }
            else{
                $em = "Unknow error occurred!";
                header("Location: home.php?error=$em");
            }
        }


    }
    else{
        $em = "Unknow error occurred!";
        header("Location: home.php?error=$em");
    }


}
else{
    header("Location: home.php");
}



?>