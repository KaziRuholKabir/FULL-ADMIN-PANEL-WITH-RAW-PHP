<?php
include("../db_conn.php");
error_reporting(0);
$ui=$_GET['ui'];
$nm=$_GET['nm'];
$em=$_GET['em'];
$ph=$_GET['ph'];
$rl=$_GET['rl'];
$ps=$_GET['ps'];
$pr=$_GET['pr'];
$ds=$_GET['ds'];
$sl=$_GET['sl'];
$ph2=$_GET['ph2'];
$ph3=$_GET['ph3'];
$ph4=$_GET['ph4'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMU ADMIN PANEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/chart/apexcharts.css" class="">
    <link rel="stylesheet" href="../assets/css/sass.css">
    <link rel="stylesheet" href="../assets/css/layets.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
</head>
<body>
    <div class="main-wrapper">
        <div class="header-container fixed-top">
            <header class="header navbar navbar-expand-sm expand-header">
                <div class="header-left d-flex">
                    <div class="logo">
                        DevIngine
                    </div>
                    <a href="#" class="sidebarCollapse" id="toggleSidebar" data-placement="bottom">
                        <span class="fas fa-bars"></span>
                    </a>

                </div>
                <ul class="navbar-item flex-row ml-auto">
   
                    <li class="nav-item dropdown user-profile-dropdown">
                        <a href="" class="nav-link user" id="Notify" data-bs-toggle="dropdown">
                            <img src="../assets/img/settings.png" alt="" class="icon">
                            
                        </a>
                        <div class="dropdown-menu">
                            <div class="dp-main-menu">
                                <a href="../profile.php" class="dropdown-item"><span class="fas fa-user"></span>Profile</a>
                                <a href="../change_password.php" class="dropdown-item"><span class="fas fa-lock"></span>Change Password</a>
                                <a href="../logout.php" class="dropdown-item"><span class="fas fa-undo-alt"></span>Logout</a>
                                

                            </div>
                        </div>

                    </li>
                </ul>
            </header>
        </div>

        <!-- -------Nav Bar End------ -->
        

        <!-- ------Side Bar Start-------- -->

        <div class="left-menu">

            <div class="menubar-content">
                <nav class="animated bounceInDown">
                    <ul id="sidebar">
                        
                    <li>
                            <a href="../index.php"><i class="fas fa-home"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="../company_setting/company_setting.php"><i class="fas fa-building"></i>Company Setting</a>
                        </li>

                        <li class="active">
                            <a href="../users/users.php"><i class="fas fa-users"></i>Users</a>
                        </li>

                        <li class="sub-menu">
                            <a href="#"><i class="fas fa-plane"></i> International Ticket
                                <div class="fa fa-caret-down right"></div>
                        
                            </a>
                            <ul class="left-menu-dp">
                                <li><a href="international_ticket/international_ticket.php"><i class="fas fa-user-circle"></i>Ticket</a></li>
                                <li><a href="international_ticket/international_ticket.php"><i class="fas fa-id-card"></i>Cancel List</a></li>
                                <li><a href="international_ticket/international_ticket.php"><i class="fas fa-table"></i>Refund List</a></li>
                                <li><a href="international_ticket/international_ticket.php"><i class="fas fa-fingerprint"></i>Re-issue List &amp; Privacy</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="fas fa-map"></i> Domestic Ticket
                                <div class="fa fa-caret-down right"></div>
                        
                            </a>
                            <ul class="left-menu-dp">
                                <li><a href="../domestic_ticket/ticket_int/ticket_int.php"><i class="far fa-file-alt"></i>Domestic Ticket</a></li>
                                <li><a href="../domestic_ticket/cancel_list/cancel_list.php"><i class="far fa-file-excel"></i>Cancel List</a></li>
                                <li><a href="../domestic_ticket/refund_list/refund_list.php"><i class="fas fa-file-export"></i>Refund List</a></li>
                                <li><a href="../domestic_ticket/reissue_list/reissue_list.php"><i class="fas fa-sync"></i>Re-issue List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="../hotel/hotel.php"><i class="fas fa-hotel"></i>Hotel or Package</a>
                        </li>

                        <li>
                            <a href="../visa/visa.php"><i class="fas fa-atlas"></i>VISA</a>
                        </li>

                        <li>
                            <a href="../other_service/other_service.php"><i class="fas fa-spa"></i>Other Service</a>
                        </li>

                        <li>
                            <a href="../advance_payment/advance_payment.php"><i class="fas fa-money-bill"></i>Advance Payment</a>
                        </li>

                        <li>
                            <a href="../bank/bank.php"><i class="fas fa-money-check-alt"></i>Bank</a>
                        </li>

                        <li>
                            <a href="../domestic/domestic.php"><i class="fas fa-landmark"></i>Domestic</a>
                        </li>

                        <li>
                            <a href="../agent/agent.php"><i class="fas fa-user-tie"></i>Agent</a>
                        </li>

                        <li>
                            <a href="../debit/debit.php"><i class="fas fa-credit-card"></i>Debit</a>
                        </li>

                        <li>
                            <a href="../manual_deposit/manual_deposit.php"><i class="fa fa-dollar"></i>Manual Deposit</a>
                        </li>

                        <li>
                            <a href="../agent_history/agent_history.php"><i class="fa fa-area-chart"></i>Agent History</a>
                        </li>

                        <li>
                            <a href="../visa_rate/visa_rate.php"><i class="fa fa-line-chart"></i>Visa Rate</a>
                        </li>

                        <li>
                            <a href="../search_report/search_report.php"><i class="fas fa-sticky-note"></i>Search Report</a>
                        </li>

                        <li>
                            <a href="../salary_sheet/salary_sheet.php"><i class="fas fa-dollar-sign"></i>Salary Sheet</a>
                        </li>


                        
                    </ul>



                </nav>
            </div>
        </div>
<!-- ================Sidebar END=========== -->


<div class="content-wrapper">
        <div class="container-fluid">
            <div class="bg-white">
                <div class="row">
                    <div class="col-lg-4 col-sm-12">
                        <h4>Update User Info</h4>  
                    </div>
                    <div class="col-4">
                    </div>
                    <div class="col-4">
                    
                    </div>
                </div>



                <form action="update_submit.php" method="post" enctype="multipart/form-data">
                <div class="row">
                    
                    <div class="col-lg-4 col-sm-12">
                        <br>
                        <input type="hidden" name="user_id" class="form-control" value="<?php echo "$ui" ?>"><br>
                        <label for="username">Username: </label>
                        <input type="text" name="username" class="form-control" value="<?php echo "$nm" ?>"><br>

                        <label for="email">Email: </label>
                        <input type="email" name="email" class="form-control" value="<?php echo "$em" ?>"><br>

                        <label for="phone">Phone: </label>
                        <input type="int" name="phone" class="form-control" value="<?php echo "$ph" ?>"><br>

                        <label for="role">User Role:</label>
                        <select id="role" name="role" class="form-control">
                            <option value="<?php echo "$rl" ?>"><?php echo "$rl" ?></option>
                            <option value="Admin">Admin</option>
                            <option value="Manager">Manager</option>
                            <option value="Employee">Employee</option>
                            <option value="Agent">Agent</option>
                        </select><br>



                        <label for="password">Password: </label>
                        <input type="password" name="password" class="form-control" ><br>

                        <input type="submit" name="submit" value="Update User" class="btn btn-primary">
                        <input type="submit" name="delete" value="Delete User" class="btn btn-danger">

                        
                    </div>
                    <div class="col-lg-4 col-sm-12">
                    <label for="psaddress">Present Address: </label>
                    <input type="text" name="psaddress" class="form-control" value="<?php echo "$ps" ?>"><br>

                    <label for="praddress">Permanent Address: </label>
                    <input type="text" name="praddress" class="form-control" value="<?php echo "$pr" ?>"><br>
                    
                    <label for="designation">Designation: </label>
                    <input type="text" name="designation" class="form-control" value="<?php echo "$ds" ?>"><br>

                    <label for="salary">Salary: </label>
                    <input type="number" name="salary" class="form-control" value="<?php echo "$sl" ?>"><br>
                    </div>

                    <div class="col-lg-4 col-sm-12">
                    <label for="phone2">Optional Phone: </label>
                    <input type="int" name="phone2" class="form-control" value="<?php echo "$ph2" ?>"><br>
                    <label for="phone3">Optional Phone: </label>
                    <input type="int" name="phone3" class="form-control" value="<?php echo "$ph3" ?>"><br>
                    <label for="phone4">Optional Phone: </label>
                    <input type="int" name="phone4" class="form-control" value="<?php echo "$ph4" ?>"><br>



                    <label for="nid">NID: </label><br>
                    <?php
                        
                        $sql = "SELECT * FROM user_info WHERE user_id = '$ui'";
                        $res = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($res) > 0){
                            while($images = mysqli_fetch_assoc($res)){  ?>
                            <div class="alb">
                                <img src = "../assets/uploads/<?=$images['nid']?>">
                            </div>



                            <?php }  } ?>   
                    <input type="file" name="nid" class="form-control"><br><br>


                    <label for="cv">CV: </label><br>
                    <?php
                        
                        $sql = "SELECT * FROM user_info WHERE user_id = '$ui'";
                        $res = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($res) > 0){
                            while($images = mysqli_fetch_assoc($res)){  ?>
                            <div class="alb">
                                <img src = "../assets/uploads/<?=$images['cv']?>">
                            </div>



                            <?php }  } ?>    
                    <input type="file" name="cv" class="form-control"><br><br>

                    <label for="photo">Photo: </label><br>
                    <?php
                        
                        $sql = "SELECT * FROM user_info WHERE user_id = '$ui'";
                        $res = mysqli_query($conn, $sql);

                        if(mysqli_num_rows($res) > 0){
                            while($images = mysqli_fetch_assoc($res)){  ?>
                            <div class="alb">
                                <img src = "../assets/uploads/<?=$images['photo']?>">
                            </div>



                            <?php }  } ?>    
                    <input type="file" name="photo" class="form-control"><br><br>
                    </div>
                    
                </div>
                </form>
            </div>
        </div>
        
    </div>




    </div>
    




    <script src="../assets/js/jquery.min.js"></script>
    <script src="../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/chart/apexcharts.min.js"></script>
    <script src="../assets/js/chart/chart.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>