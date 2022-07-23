<?php

require_once('procedural_db_connection.php');
$sql = "SELECT * FROM boda_bodas WHERE boda_ID = " . $_GET["boda_id"];
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);
ob_end_clean();
require('fpdf184/fpdf.php');
  
// Instantiate and use the FPDF class 
$pdf = new FPDF();
  
//Add a new page 
$pdf->AddPage(); 
  
// Set the font for the text
$pdf->SetFont('Arial', 'B', 18);
  
// Prints a cell with given text 
$pdf->Image('gok.png',85,8,33,);
$pdf->Ln(20);
$pdf->Cell(65);
$pdf->Cell(60,20,'CERTIFICATE OF REGISTRATION',0,0,'C');
$pdf->Ln(15);
$pdf->SetFont('Times','I',15);
$pdf->Cell(60,20,'This is issued to certify that the rider with ID No. ',0,0);
$pdf->SetFont('Arial','BU',15);
$pdf->Cell(48);
$pdf->Cell(60,20,$row["rider_ID"],0,0);
$pdf->SetFont('Times','I',15);
$pdf->Cell(-53);
$pdf->Cell(60,20,'is allowed to operate a motorcycle',0,0);
$pdf->Ln(8);
$pdf->Cell(60,20,'with the number plate ',0,0);
$pdf->SetFont('Arial','BU',15);
$pdf->Cell(-10);
$pdf->Cell(60,20,$row["number_plate"],0,0);
$pdf->SetFont('Times','I',15);
$pdf->Cell(-28);
$pdf->Cell(60,20,'as from ',0,0);
$pdf->SetFont('Arial','BU',15);
$pdf->Cell(-41);
$pdf->Cell(60,20,$row["registration_date"] . ' .',0,0);
$pdf->Ln(12);
$pdf->SetFont('Times','I',15);
$pdf->Cell(60,20,'The following are the specifications of the motorcycle: ',0,0);
$pdf->Ln(8);
$pdf->Cell(60,20,'Make: ',0,0);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(-45);
$pdf->Cell(60,20,$row["make"],0,0);
$pdf->Ln(8);
$pdf->SetFont('Times','I',15);
$pdf->Cell(60,20,'Model: ',0,0);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(-44);
$pdf->Cell(60,20,$row["model"],0,0);
$pdf->Ln(8);
$pdf->SetFont('Times','I',15);
$pdf->Cell(60,20,'Weight: ',0,0);
$pdf->SetFont('Arial','B',15);
$pdf->Cell(-42);
$pdf->Cell(60,20,$row["weight"],0,0);


// return the generated output
$pdf->Output();


?>