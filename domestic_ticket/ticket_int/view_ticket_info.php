<?php
include("../../db_conn.php");
error_reporting(0);
$ticket_id=$_GET['ti'];
$customer_phone=$_GET['cph'];
$customer_name=$_GET['cnm'];
$customer_email=$_GET['cem'];
$customer_passport=$_GET['pn'];
$customer_address=$_GET['cad'];
$passport_copy=$_GET['pcp'];
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
                                <li><a href="ticket_int.php"><i class="far fa-file-alt"></i>Domestic Ticket</a></li>
                                <li><a href="../cancel_list/cancel_list.php"><i class="far fa-file-excel"></i>Cancel List</a></li>
                                <li><a href="../refund_list/refund_list.php"><i class="fas fa-file-export"></i>Refund List</a></li>
                                <li><a href="../reissue_list/reissue_list.php"><i class="fas fa-sync"></i>Re-issue List</a></li>
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
                            <h4>Ticket Details</h4>
                        </div>
                        <div class="col-lg-4 col-sm-12">

                        </div>
                        <div class="col-lg-4 col-sm-12">

                        </div>
                    </div>
                   
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                     
                        </div>
                        <div class="col-lg-4 col-sm-12">   

                        <div class="alb">
                                <img src = "../../assets/uploads/<?=$passport_copy?>">
                            </div>
  

                           
                        </div>

                        <div class="col-lg-4 col-sm-12">                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3 col-sm-12">
                        <input type="hidden" name="ticket_id" class="form-control" value="<?php echo "$ticket_id" ?>"><br>
                        <label for="customerphone">Phone: </label>
                        <h6><?php echo "$customer_phone" ?></h6><br>
                        

                        <label for="customername">Customer Name: </label>
                        <h6><?php echo "$customer_name" ?></h6><br>
                    
                        <label for="customeremail">Email: </label>
                        <h6><?php echo "$customer_email" ?></h6><br>
                     
                        <label for="passportno">Passport No: </label>
                        <h6><?php echo "$customer_passport" ?></h6><br>
                      
                        <label for="customeraddress">Address: </label>
                        <h6><?php echo "$customer_address" ?></h6><br>
                       
                        <label for="netpay">Net Pay/ Agent Bill: </label><br>
                        <h6><?php echo "$net_payment" ?></h6><br>
                       
                        
                        <br>
                        <br>
                        <br>
                        <br>

                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <br>
                    
                        <label for="ticketagent">Select Agent:</label>
                        <h6><?php echo "$ticket_agent" ?></h6><br>
                       



                        <label for="ticketno">Ticket No: </label>
                        <h6><?php echo "$ticket_no" ?></h6><br>
                        
                        
                        <label for="sector">Sector: </label>
                        <h6><?php echo "$sector" ?></h6><br>
                      
                        <label for="segment">Segment: </label>
                        <h6><?php echo "$segment" ?></h6><br>
                      
                        <label for="exprofit">Extra Profit: </label>
                        <h6><?php echo "$ex_profit" ?></h6><br>
        
                        <?php
                        
                        echo '<a class="btn btn-danger" href="update_ticket_info.php?ti=' . $ticket_id . '&cph='. $customer_phone .'&cnm='. $customer_name .'&cem='. $customer_email .'&pn='. $customer_passport .'&cad='. $customer_address .'&tag='. $ticket_agent .'&tn='. $ticket_no .'&sc='. $sector .'&sg='. $segment .'&td='. $travel_date .'&gf='. $gross_fare .'&bf='. $base_fare .'&com='. $commission .'&ait='. $ait .'&cb='. $client_bill .'&paid='. $paid .'&due='. $due .'&svc='. $service_charge .'&dis='. $discount .'&pft='. $ex_profit .'&np='. $net_payment .'&isd='. $issue_date .'">Cancel Ticket</a>';
                        ?>
                        
                        
                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <br>
                        <label for="traveldate">Travel Date: </label>
                        <h6><?php echo "$travel_date" ?></h6><br>
                       
                        <label for="grossfare">Gross Fare: </label>
                        <h6><?php echo "$gross_fare" ?></h6><br>
                     
                        <label for="basefare">Base Fare: </label>
                        <h6><?php echo "$base_fare" ?></h6><br>
                   


                        <label for="commission">Commission: </label><br>
                        <h6><?php echo "$commission" ?></h6><br>
                        

                        <label for="ait">Ait: </label><br>
                        <h6><?php echo "$ait" ?></h6><br>


                        
                        
                        <?php
                        
                        echo '<a class="btn btn-success" href="update_ticket_info.php?ti=' . $ticket_id . '&cph='. $customer_phone .'&cnm='. $customer_name .'&cem='. $customer_email .'&pn='. $customer_passport .'&cad='. $customer_address .'&tag='. $ticket_agent .'&tn='. $ticket_no .'&sc='. $sector .'&sg='. $segment .'&td='. $travel_date .'&gf='. $gross_fare .'&bf='. $base_fare .'&com='. $commission .'&ait='. $ait .'&cb='. $client_bill .'&paid='. $paid .'&due='. $due .'&svc='. $service_charge .'&dis='. $discount .'&pft='. $ex_profit .'&np='. $net_payment .'&isd='. $issue_date .'">Refund Ticket</a>';
                        ?>

                        </div>
                        <div class="col-lg-3 col-sm-12">
                            <br>
                           
                        <label for="clientbill">Client Bill: </label>
                        <h6><?php echo "$client_bill" ?></h6><br>
                      
                        <label for="due">Due: </label><br>
                        <h6><?php echo "$due" ?></h6><br>
                        
                       

                        <label for="paid">Paid: </label><br>
                        <h6><?php echo "$paid" ?></h6><br>
                        
                        
                        <label for="servicecharge">Service Charge: </label><br>
                        <h6><?php echo "$service_charge" ?></h6><br>
                        
                        <label for="discount">Discount: </label><br>
                        <h6><?php echo "$discount" ?></h6><br>
                        <?php
                        
                        echo '<a class="btn btn-primary" href="update_ticket_info.php?ti=' . $ticket_id . '&cph='. $customer_phone .'&cnm='. $customer_name .'&cem='. $customer_email .'&pn='. $customer_passport .'&cad='. $customer_address .'&tag='. $ticket_agent .'&tn='. $ticket_no .'&sc='. $sector .'&sg='. $segment .'&td='. $travel_date .'&gf='. $gross_fare .'&bf='. $base_fare .'&com='. $commission .'&ait='. $ait .'&cb='. $client_bill .'&paid='. $paid .'&due='. $due .'&svc='. $service_charge .'&dis='. $discount .'&pft='. $ex_profit .'&np='. $net_payment .'&isd='. $issue_date .'">Re-issue Ticket</a>';
                        ?>
                     
                      

                        </div>
                    </div>
                    
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