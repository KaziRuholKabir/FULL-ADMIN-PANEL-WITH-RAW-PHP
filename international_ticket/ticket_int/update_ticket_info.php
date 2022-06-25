<?php
include("../../db_conn.php");
error_reporting(0);
$ticket_id=$_GET['ti'];
$customer_phone=$_GET['cph'];
$customer_name=$_GET['cnm'];
$customer_email=$_GET['cem'];
$customer_passport=$_GET['pn'];
$customer_address=$_GET['cad'];
$ticket_agent=$_GET['tag'];
$ticket_no=$_GET['tn'];
$sector=$_GET['sc'];
$segment=$_GET['sg'];
$travel_date=$_GET['td'];
$gross_fare=$_GET['gf'];
$base_fare=$_GET['bf'];
$commission=$_GET['com'];
$ait=$_GET['ait'];
$client_bill=$_GET['cb'];
$paid=$_GET['paid'];
$due=$_GET['due'];
$service_charge=$_GET['svc'];
$discount=$_GET['dis'];
$net_payment=$_GET['np'];
$ex_profit=$_GET['pft'];
$issue_date=$_GET['isd'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HIMU ADMIN PANEL</title>
    <link rel="stylesheet" href="" class=""><script src=""></script><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../../assets/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="../../assets/css/chart/apexcharts.css" class="">
    <link rel="stylesheet" href="../../assets/css/sass.css">
    <link rel="stylesheet" href="../../assets/css/layets.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
    <link rel="stylesheet" href="../../assets/css/responsive.css">

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
                            <img src="../../assets/img/settings.png" alt="" class="icon">
                            
                        </a>
                        <div class="dropdown-menu">
                            <div class="dp-main-menu">
                                <a href="../../profile.php" class="dropdown-item"><span class="fas fa-user"></span>Profile</a>
                                <a href="../../change_password.php" class="dropdown-item"><span class="fas fa-lock"></span>Change Password</a>
                                <a href="../../logout.php" class="dropdown-item"><span class="fas fa-undo-alt"></span>Logout</a>
                                

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
                            <a href="../../index.php"><i class="fas fa-home"></i>Dashboard</a>
                        </li>

                        <li>
                            <a href="../../company_setting/company_setting.php"><i class="fas fa-building"></i>Company Setting</a>
                        </li>

                        <li >
                            <a href="../../users/users.php"><i class="fas fa-users"></i>Users</a>
                        </li>

                        <li class="sub-menu">
                            <a href="#"><i class="fas fa-plane"></i> International Ticket
                                <div class="fa fa-caret-down right"></div>
                        
                            </a>
                            <ul class="left-menu-dp">
                                <li><a href="../ticket_int/ticket_int.php"><i class="far fa-file-alt"></i>Ticket</a></li>
                                <li><a href="../cancel_list/cancel_list.php"><i class="far fa-file-excel"></i>Cancel List</a></li>
                                <li><a href="../refund_list/refund_list.php"><i class="fas fa-file-export"></i>Refund List</a></li>
                                <li><a href="reissue_list.php"><i class="fas fa-sync"></i>Re-issue List</a></li>
                            </ul>
                        </li>
                        <li class="sub-menu">
                            <a href="#"><i class="fas fa-map"></i> Domestic Ticket
                                <div class="fa fa-caret-down right"></div>
                        
                            </a>
                            <ul class="left-menu-dp">
                                <li><a href="../../domestic_ticket/ticket_int/ticket_int.php"><i class="far fa-file-alt"></i>Domestic Ticket</a></li>
                                <li><a href="../../domestic_ticket/cancel_list/cancel_list.php"><i class="far fa-file-excel"></i>Cancel List</a></li>
                                <li><a href="../../domestic_ticket/refund_list/refund_list.php"><i class="fas fa-file-export"></i>Refund List</a></li>
                                <li><a href="../../domestic_ticket/reissue_list/reissue_list.php"><i class="fas fa-sync"></i>Re-issue List</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="../../hotel/hotel.php"><i class="fas fa-hotel"></i>Hotel or Package</a>
                        </li>

                        <li>
                            <a href="../../visa/visa.php"><i class="fas fa-atlas"></i>VISA</a>
                        </li>

                        <li>
                            <a href="../../other_service/other_service.php"><i class="fas fa-spa"></i>Other Service</a>
                        </li>

                        <li>
                            <a href="../../advance_payment/advance_payment.php"><i class="fas fa-money-bill"></i>Advance Payment</a>
                        </li>

                        <li>
                            <a href="../../bank/bank.php"><i class="fas fa-money-check-alt"></i>Bank</a>
                        </li>

                        <li>
                            <a href="../../domestic/domestic.php"><i class="fas fa-landmark"></i>Domestic</a>
                        </li>

                        <li>
                            <a href="../../agent/agent.php"><i class="fas fa-user-tie"></i>Agent</a>
                        </li>

                        <li>
                            <a href="../../debit/debit.php"><i class="fas fa-credit-card"></i>Debit</a>
                        </li>

                        <li>
                            <a href="../../manual_deposit/manual_deposit.php"><i class="fa fa-dollar"></i>Manual Deposit</a>
                        </li>

                        <li>
                            <a href="../../agent_history/agent_history.php"><i class="fa fa-area-chart"></i>Agent History</a>
                        </li>

                        <li>
                            <a href="../../visa_rate/visa_rate.php"><i class="fa fa-line-chart"></i>Visa Rate</a>
                        </li>

                        <li>
                            <a href="../../search_report/search_report.php"><i class="fas fa-sticky-note"></i>Search Report</a>
                        </li>

                        <li>
                            <a href="../../salary_sheet/salary_sheet.php"><i class="fas fa-dollar-sign"></i>Salary Sheet</a>
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
                            <h4>Edit Ticket Info</h4>
                        </div>
                        <div class="col-lg-4 col-sm-12">

                        </div>
                        <div class="col-lg-4 col-sm-12">

                        </div>
                    </div>
                    <form action="update_ticket_submit.php" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-lg-3 col-sm-12">
                        <input type="hidden" name="ticket_id" class="form-control" value="<?php echo "$ticket_id" ?>"><br>
                        <label for="customerphone">Phone: </label>
                        <input type="int" name="customerphone" class="form-control" value="<?php echo "$customer_phone" ?>">

                        <label for="customername">Customer Name: </label>
                        <input type="text" name="customername" class="form-control" value="<?php echo "$customer_name" ?>">

                        <label for="customeremail">Email: </label>
                        <input type="email" name="customeremail" class="form-control" value="<?php echo "$customer_email" ?>">

                        <label for="passportno">Passport No: </label>
                        <input type="int" name="passportno" class="form-control" value="<?php echo "$customer_passport" ?>">

                        <label for="customeraddress">Address: </label>
                        <input type="text" name="customeraddress" class="form-control" value="<?php echo "$customer_address" ?>"><br>

                        
                        
                        <br>
                        <br>
                        <br>
                        <br>

                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <br>
                        <label for="passportcopy">Passport copy: </label>
                        <input type="file" name="passportcopy" class="form-control" >

                        <label for="ticketagent">Select Agent:</label>
                        <select id="ticketagent" name="ticketagent" class="form-control">
                            <option value="<?php echo "$ticket_agent" ?>"><?php echo "$ticket_agent" ?></option>
                            <option value="Domestic Agent">Domestic Agent</option>
                            <option value="Flight Expert">Flight Expert</option>
                            <option value="Sky Bird">Sky Bird</option>
                            <option value="Talon Corporation">Talon Corporation</option>
                            <option value="Zaman Tours & Travels">Zaman Tours & Travels</option>
                        </select>



                        <label for="ticketno">Ticket No: </label>
                        <input type="text" name="ticketno" class="form-control" value="<?php echo "$ticket_no" ?>">

                        
                        <label for="sector">Sector: </label>
                        <input type="text" name="sector" class="form-control" value="<?php echo "$sector" ?>">

                        <label for="segment">Segment: </label>
                        <input type="number" name="segment" class="form-control" value="<?php echo "$segment" ?>">

                        <label for="exprofit">Extra Profit: </label>
                        <input type="text" name="exprofit" class="form-control" value="<?php echo "$ex_profit" ?>"><br>
                        <input type="submit" name="submit" value="Update" class="btn btn-success">
                        
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <br>
                        <label for="traveldate">Travel Date: </label>
                        <input type="date" name="traveldate" class="form-control" value="<?php echo "$travel_date" ?>">

                        <label for="grossfare">Gross Fare: </label>
                        <input type="number" name="grossfare" class="form-control" value="<?php echo "$gross_fare" ?>">

                        <label for="basefare">Base Fare: </label>
                        <input type="number" name="basefare" class="form-control" value="<?php echo "$base_fare" ?>">



                        <label for="commission">Commission: </label><br>
                        <input type="text" name="commission" class="form-control" value="<?php echo "$commission" ?>">


                        <label for="ait">Ait: </label><br>
                        <input type="text" name="ait" class="form-control" value="<?php echo "$ait" ?>">
                        <label for="netpay">Net Pay/ Agent Bill: </label><br>
                        <input type="text" name="netpay" class="form-control" value="<?php echo "$net_payment" ?>"><br>
                        
                        <input type="submit" name="delete" value="Cancel/Refund Ticket" class="btn btn-danger">
                        


                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <br>
                            
                        <label for="clientbill">Client Bill: </label>
                        <input type="number" name="clientbill" class="form-control" value="<?php echo "$client_bill" ?>">
                        <label for="due">Due: </label><br>
                        <input type="number" name="due" class="form-control" value="<?php echo "$due" ?>">

                        <label for="paid">Paid: </label><br>
                        <input type="number" name="paid" class="form-control" value="<?php echo "$paid" ?>">



                        
                        <label for="servicecharge">Service Charge: </label><br>
                        <input type="text" name="servicecharge" class="form-control" value="<?php echo "$service_charge" ?>">

                        <label for="discount">Discount: </label><br>
                        <input type="text" name="discount" class="form-control" value="<?php echo "$discount" ?>"><br>

                        
                      

                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
                

            

      




    </div>
    




    <script src="../../assets/js/jquery.min.js"></script>
    <script src="../../assets/js/bootstrap/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/chart/apexcharts.min.js"></script>
    <script src="../../assets/js/chart/chart.js"></script>
    <script src="../../assets/js/main.js"></script>
    

</body>
</html>