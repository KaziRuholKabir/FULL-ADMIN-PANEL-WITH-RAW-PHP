<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMU ADMIN PANEL</title>
    <link rel="stylesheet" href="" class=""><script src=""></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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

                        <li >
                            <a href="../users/users.php"><i class="fas fa-users"></i>Users</a>
                        </li>

                        <li class="sub-menu">
                            <a href="#"><i class="fas fa-plane"></i> International Ticket
                                <div class="fa fa-caret-down right"></div>
                        
                            </a>
                            <ul class="left-menu-dp">
                                <li><a href="ticket_int/ticket_int.php"><i class="far fa-file-alt"></i>Ticket</a></li>
                                <li><a href="cancel_list/cancel_list.php"><i class="far fa-file-excel"></i>Cancel List</a></li>
                                <li><a href="refund_list/refund_list.php"><i class="fas fa-file-export"></i>Refund List</a></li>
                                <li><a href="reissue_list/reissue_list.php"><i class="fas fa-sync"></i>Re-issue List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="../domestic_ticket/domestic_ticket.php"><i class="fas fa-map"></i>Domestic Ticket</a>
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
</div>
<!-- ================Sidebar END=========== -->

        <div class="content-wrapper">
            <div class="container-fluid">
                <div class="bg-white">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <h4>International Ticket</h4>
                        </div>
                        <div class="col-lg-4 col-sm-12">

                        </div>
                        <div class="col-lg-4 col-sm-12">

                        </div>
                    </div>
                    
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