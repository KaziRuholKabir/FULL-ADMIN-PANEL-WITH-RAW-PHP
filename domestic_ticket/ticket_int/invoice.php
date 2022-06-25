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
$issue_date=$_GET['isd'];

  

require('fpdf184/fpdf.php');

$pdf = new FPDF();

$pdf->AddPage('P','A4');

$pdf->SetFont('Arial', 'B', 16);

$file='header.jpg';
$paid_seal='../../assets/img/paid_seal.jpg';
$premium_seal='../../assets/img/premium_seal.jpg';


if($due==0||$due== NULL){
    $pdf-> Image($paid_seal, 150, 100, 40, 17); 
    $pdf-> Image($premium_seal, 150, 200, 40, 17);   
       
}

$pdf-> Image($file, 150, 10, 40, 17);
$pdf->Ln(18);



$pdf->Cell(55, 5, 'INVOICE', 0, 0);
$pdf->Cell(58, 5, '', 0, 0);
$pdf->Cell(15, 5, '', 0, 0);
$pdf->Cell(63, 5, '', 0, 0);
$pdf->Ln(10);


$pdf->SetFont('Arial', '', 8);
$pdf->Cell(55, 5, $customer_name, 0, 0);
$pdf->Cell(58, 5, '', 0, 0);
$pdf->Cell(15, 5, '', 0, 0);
$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(63, 5, 'M/S OSESH OVERSEAS', 0, 0,'R');
$pdf->Ln(5);


$pdf->SetFont('Arial', '', 8);
$pdf->Cell(55, 5, $customer_address, 0, 0);
$pdf->Cell(58, 5, '', 0, 0);
$pdf->Cell(78, 5, 'M.H Building(2nd Floor), 15/Stand Road Mijhirghat, Chattagram.', 0, 0,'R');
$pdf->Ln(5);



$pdf->SetFont('Arial', '', 8);
$pdf->Cell(10, 5, 'Email:', 0, 0);
$pdf->Cell(158, 5, $customer_email, 0, 0,);
$pdf->Cell(22, 5, 'Mobile: 031-726500', 0, 0,'R');
$pdf->Ln(5);




$pdf->SetFont('Arial', '', 8);
$pdf->Cell(10, 5, 'Phone:', 0, 0);
$pdf->Cell(113, 5, $customer_phone, 0, 0);
$pdf->Cell(20, 5, '', 0, 0);
$pdf->Ln(5);


$pdf->SetFont('Arial', '', 8);
$pdf->Cell(18, 5, 'Passport No:', 0, 0);
$pdf->Cell(113, 5, $customer_passport, 0, 0);
$pdf->Cell(20, 5, '', 0, 0);
$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(47, 5, 'Sector', 1, 0,'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(47, 5, $sector, 1, 0);
$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(48, 5, 'Segment', 1, 0,'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(48, 5, $segment, 1, 1);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(47, 5, 'Travel Date', 1, 0,'C');
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(143, 5, $travel_date, 1, 0);
$pdf->Ln(10);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(47, 5, 'Date', 1, 0,'C');
$pdf->Cell(47, 5, 'Ticket No', 1, 0,'C');
$pdf->Cell(48, 5, 'Amount', 1, 0,'C');
$pdf->Cell(48, 5, 'Subtotal', 1, 1,'C');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(47, 5, $issue_date, 1, 0);
$pdf->Cell(47, 5, $ticket_no, 1, 0);
$pdf->Cell(48, 5, $client_bill, 1, 0);
$pdf->Cell(48, 5, $client_bill, 1, 1);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(142, 5, 'Total', 1, 0,'R');
$pdf->Cell(48, 5, $client_bill, 1, 1);

$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(190, 5, 'Payment History', 1, 1);



$pdf->SetFont('Arial', 'B', 9);
$pdf->Cell(47, 5, 'Date', 1, 0,'C');
$pdf->Cell(47, 5, 'Payment Type', 1, 0,'C');
$pdf->Cell(48, 5, 'Author', 1, 0,'C');
$pdf->Cell(48, 5, 'Amount', 1, 1,'C');

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(142, 5, 'Total Pay', 1, 0,'R');
$pdf->Cell(48, 5, $paid, 1, 1);

$pdf->Cell(142, 5, 'Total Due', 1, 0,'R');
$pdf->Cell(48, 5, $due, 1, 1);



$pdf->Ln(100);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(55, 5, 'Mohammed Himu', 0, 0,'C');
$pdf->Cell(113, 5, '', 0, 0);
$pdf->Cell(20, 5, '', 0, 0);
$pdf->Ln(5);

$pdf->SetFont('Arial', '', 8);
$pdf->Cell(55, 5, '_______________________', 0, 0,'C');
$pdf->Cell(80, 5, '', 0, 0);
$pdf->Cell(55, 5, '_______________________', 0, 0,'C');
$pdf->Ln(5);
$pdf->SetFont('Arial', '', 8);
$pdf->Cell(55, 5, 'Prepared By', 0, 0,'C');
$pdf->Cell(80, 5, '', 0, 0);
$pdf->Cell(55, 5, 'Signature', 0, 0,'C');
$pdf->Ln(30);

$pdf->Cell(190, 5, 'M/S OSESH OVERSEAS', 0, 0,'C');
$pdf->Ln(5);
$pdf->Cell(190, 5, 'M.H Building(2nd Floor), 15/Stand Road Mijhirghat, Chattagram.', 0, 0,'C');
$pdf->Ln(5);
$pdf->Cell(190, 5, 'Mobile: 031-726500', 0, 0,'C');






$pdf->Output();



?>