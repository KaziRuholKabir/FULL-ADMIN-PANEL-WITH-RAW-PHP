<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMU ADMIN PANEL</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/chart/apexcharts.css" class="">
    <link rel="stylesheet" href="assets/css/sass.css">
    <link rel="stylesheet" href="assets/css/layets.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
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
                            <img src="assets/img/settings.png" alt="" class="icon">
                            
                        </a>
                        <div class="dropdown-menu">
                            <div class="dp-main-menu">
                                <a href="profile.php" class="dropdown-item"><span class="fas fa-user"></span>Profile</a>
                                <a href="change_password.php" class="dropdown-item"><span class="fas fa-lock"></span>Change Password</a>
                                <a href="logout.php" class="dropdown-item"><span class="fas fa-undo-alt"></span>Logout</a>
                                

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
                        <li class="active">
                            <a href="index.php"><i class="fas fa-home"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="company_setting/company_setting.php"><i class="fas fa-building"></i>Company Setting</a>
                        </li>

                        <li>
                            <a href="users/users.php"><i class="fas fa-users"></i>Users</a>
                        </li>




                        <!-- <li class="sub-menu">
                            <a href="#"><i class="fas fa-cogs"></i> Settings
                                <div class="fa fa-caret-down right"></div>
                        
                            </a>
                            <ul class="left-menu-dp">
                                <li><a href="#"><i class="fas fa-user-circle"></i>Accounts</a></li>
                                <li><a href="#"><i class="fas fa-id-card"></i>ID</a></li>
                                <li><a href="#"><i class="fas fa-table"></i>Table</a></li>
                                <li><a href="#"><i class="fas fa-fingerprint"></i>Security &amp; Privacy</a></li>
                            </ul>
                        </li> -->






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
                        <li>
                            <a href="domestic_ticket.php"><i class="fas fa-map"></i>Domestic Ticket</a>
                        </li>

                        <li>
                            <a href="hotel.php"><i class="fas fa-hotel"></i>Hotel or Package</a>
                        </li>

                        <li>
                            <a href="visa.php"><i class="fas fa-atlas"></i>VISA</a>
                        </li>

                        <li>
                            <a href="other_service.php"><i class="fas fa-spa"></i>Other Service</a>
                        </li>
                        <li>
                            <a href="advance_payment.php"><i class="fas fa-money-bill"></i>Advance Payment</a>
                        </li>

                        <li>
                            <a href="bank.php"><i class="fas fa-money-check-alt"></i>Bank</a>
                        </li>

                        <li>
                            <a href="domestic.php"><i class="fas fa-landmark"></i>Domestic</a>
                        </li>

                        <li>
                            <a href="agent.php"><i class="fas fa-user-tie"></i>Agent</a>
                        </li>
                        <li>
                            <a href="debit.php"><i class="fas fa-credit-card"></i>Debit</a>
                        </li>

                        <li>
                            <a href="manual_deposit.php"><i class="fa fa-dollar"></i>Manual Deposit</a>
                        </li>

                        <li>
                            <a href="agent_history.php"><i class="fa fa-area-chart"></i>Agent History</a>
                        </li>

                        <li>
                            <a href="visa_rate.php"><i class="fa fa-line-chart"></i>Visa Rate</a>
                        </li>
                        <li>
                            <a href="search_report.php"><i class="fas fa-sticky-note"></i>Search Report</a>
                        </li>

                        <li>
                            <a href="salary_sheet.php"><i class="fas fa-dollar-sign"></i>Salary Sheet</a>
                        </li>


                        
                    </ul>



                </nav>
            </div>
        </div>
<!-- ================Sidebar END=========== -->


        <div class="content-wrapper">
            <section class="dashboard-top-sex">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="bg-white top-chart-earn">
                                <div class="row">
                                    <div class="col-sm-4 my-2 pe-0">
                                        <div class="last-month">
                                            <h5>Dashboard</h5>
                                            <p>Overview of Latest Month</p>
                                            <div class="earn">
                                                <h2>$3367.98</h2>
                                                <p>CurrentMonth Sales</p>
                                            </div>
                                            <div class="sale mb-3">
                                                <h2>95</h2>
                                                <p>Current Month Sale</p>
                                            </div>
                                            <a href="" class="di-btn purple-gradient">Last Month Summary</a>
                                        </div>
                                    </div>


                                    <div class="col-sm-8 my-2 ps-0">
                                        <div class="classic-tabs">
                                            <!-- --------Nav Tabs======= -->
                                            <div class="tabs-wrapper">
                                                <ul class="nav nav-pills chart-header-tab mb-3" id="pills-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link chart-nav active" id="pills-week-tab" data-bs-toggle="pill" data-bs-target="#pills-week" type="button" role="tab" aria-controls="pills-week" aria-selected="true">Week</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link chart-nav" id="pills-month-tab" data-bs-toggle="pill" data-bs-target="#pills-month" type="button" role="tab" aria-controls="pills-month" aria-selected="false">Month</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a href="#" class="nav-link chart-nav" id="pills-year-tab" data-bs-toggle="pill" data-bs-target="#pills-year" type="button" role="tab" aria-controls="pills-year" aria-selected="false">Year</a>
                                                </li>
                                                </ul>
                                                <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade show active" id="pills-week" role="tabpanel" aria-labelledby="pills-week-tab">
                                                    <div class="widget-content">
                                                        <div id="weekly">

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="pills-month" role="tabpanel" aria-labelledby="pills-month-tab">Month</div>
                                                <div class="tab-pane fade" id="pills-year" role="tabpanel" aria-labelledby="pills-year-tab">Year</div>
                                                </div>

                                            </div>
                                        </div>


                                       
                                    </div>
                                </div>
                                <div class="wre-sec">
                                            <div class="row">
                                                <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                                    <div class="earn-view">
                                                        <span class="fas fa-crown earn-icon wallet"></span>

                                                        <div class="earn-view-text">
                                                            <p class="name-text">
                                                                Wallet Ballance
                                                            </p>
                                                            <h6 class="balance-text">
                                                                $1689.68
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                                    <div class="earn-view">
                                                        <span class="fas fa-heart earn-icon refferal"></span>

                                                        <div class="earn-view-text">
                                                            <p class="name-text">
                                                                Refferal Earning
                                                            </p>
                                                            <h6 class="balance-text">
                                                                $1267.68
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                                    <div class="earn-view">
                                                        <span class="fab fa-salesforce earn-icon sales"></span>

                                                        <div class="earn-view-text">
                                                            <p class="name-text">
                                                                Estimate Sales
                                                            </p>
                                                            <h6 class="balance-text">
                                                                $3679.68
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3 col-sm-3 col-6 my-1 bdr-cls">
                                                    <div class="earn-view">
                                                        <span class="fas fa-chart-line earn-icon earning"></span>

                                                        <div class="earn-view-text">
                                                            <p class="name-text">
                                                                Earning
                                                            </p>
                                                            <h6 class="balance-text">
                                                                $1689.68
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                            </div>
                            
                        </div>
                        <div class="col-lg-4">
                            <div class="bg-white top-chart-earn">
                                <div class="traffic-title">
                                    <p>Traffic</p>
                                </div>
                                <div class="traffic">
                                    <div id="chart-2">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section>
                <div class="sm-chart-sec my-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 my-2">
                                <div class="revinue revinue-one_hybrid">
                                <div class="revinue-hedding">
                                    <div class="w-title">
                                        <div class="w-icon">
                                            <span class="fas fa-users"></span>
                                        </div>
                                        <div class="sm-chart-text">
                                            <p class="w-value">31.9k</p>
                                            <h5>Followers</h5>
                                        </div>
                                    </div>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>





    </div>
    




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="assets/js/chart/apexcharts.min.js"></script>
    <script src="assets/js/chart/chart.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>