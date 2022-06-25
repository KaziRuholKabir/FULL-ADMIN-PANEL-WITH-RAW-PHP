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

                    $userid = $_POST['user_id'];
                    $name = $_POST['username'];
                    $email = $_POST['email'];
                    $phone = $_POST['phone'];
                    $role = $_POST['role'];
                    $password = $_POST['password'];
                    $psaddress = $_POST['psaddress'];
                    $praddress = $_POST['praddress'];
                    $designation = $_POST['designation'];
                    $salary = $_POST['salary'];
                    $phone2 = $_POST['phone2'];
                    $phone3 = $_POST['phone3'];
                    $phone4 = $_POST['phone4'];
                    

                    $nid_name = $_FILES['nid']['name'];
                    $tmp_nid_name = $_FILES['nid']['tmp_name'];

                    $cv_name = $_FILES['cv']['name'];
                    $tmp_cv_name = $_FILES['cv']['tmp_name'];

                    $photo_name = $_FILES['photo']['name'];
                    $tmp_photo_name = $_FILES['photo']['tmp_name'];

                    $nid_ex = pathinfo($nid_name, PATHINFO_EXTENSION);
                    $nid_ex_lc= strtolower($nid_ex);

                    $cv_ex = pathinfo($cv_name, PATHINFO_EXTENSION);
                    $cv_ex_lc= strtolower($cv_ex);

                    $photo_ex = pathinfo($photo_name, PATHINFO_EXTENSION);
                    $photo_ex_lc= strtolower($photo_ex);
        
                    $allowed_exs = array("jpg", "jpeg", "png");
                    if(in_array($nid_ex_lc, $allowed_exs)){


                        $new_nid_name = uniqid("IMG-", true).'.'.$nid_ex_lc;
                        $new_cv_name = uniqid("IMG-", true).'.'.$cv_ex_lc;
                        $new_photo_name = uniqid("IMG-", true).'.'.$photo_ex_lc;



                        $nid_upload_path = '../assets/uploads/'.$new_nid_name;
                        $cv_upload_path = '../assets/uploads/'.$new_cv_name;
                        $photo_upload_path = '../assets/uploads/'.$new_photo_name;


                        move_uploaded_file($tmp_nid_name, $nid_upload_path);
                        move_uploaded_file($tmp_cv_name, $cv_upload_path);
                        move_uploaded_file($tmp_photo_name, $photo_upload_path);
                        $sql = "UPDATE `user_info` SET username = '$_POST[username]',email = '$_POST[email]',phone = '$_POST[phone]',role = '$_POST[role]',password = '$_POST[password]',psAddress = '$_POST[psaddress]',prAddress = '$_POST[praddress]',designation = '$_POST[designation]',salary = '$_POST[salary]',phone2 = '$_POST[phone2]',phone3 = '$_POST[phone3]', phone4 = '$_POST[phone4]',nid = '$new_nid_name',cv= '$new_cv_name',photo = '$new_photo_name' where user_id='$_POST[user_id]' ";
                       
                        mysqli_query($conn, $sql);
                        header("Location: users.php");

                    }


                
                }



                if(isset($_POST['delete']))
                {
                    $user_id = $_POST['user_id'];
                    $query = "DELETE FROM user_info where user_id='$user_id' ";
                    //Data delete query
                    mysqli_query($conn,$query);
                    header("Location: users.php");
                }

                


            



    }









?>
       
 