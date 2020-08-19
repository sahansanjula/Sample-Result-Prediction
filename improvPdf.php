<?php
require('fpdf/fpdf.php');
  session_start();
    if(!isset($_SESSION['uname'])){
      echo "<script>location.href='signin_form.html'</script>";
    }
    else{
      $uname=$_SESSION['uname'];   
    }
$mathsMarks =$_SESSION['finalMathsResult'];
$sinhalaMarks =$_SESSION['finalSinhalaResult'];
$englishMarks =$_SESSION['finalEnglishResult'];
$scienceMarks =$_SESSION['finalScienceResult'];
$historyMarks =$_SESSION['finalHistoryResult'];
$buddhismMarks =$_SESSION['finalBuddhismResult'];
$studentName = $_SESSION['studentName'];
$school = $_SESSION['school'];


$pdf = new FPDF();
$pdf -> AddPage('L','A4',0);
$pdf-> SetFont('Arial','B',14);

$pdf-> Cell(276,5,'Predicted Results',0,0,'C');
$pdf-> Ln();
$pdf-> Cell(276,5,"Student Name : {$studentName}.Teacher name : {$uname}. School Name : {$school}",0,0,'C');
$pdf-> Ln(20);

$pdf->SetFont('Times','B',12);
$pdf->Cell(50,10,"Maths Marks",1,0);
$pdf->Cell(50,10,$mathsMarks,1,1,'C');

$pdf->Cell(50,10,"Sinhala Marks",1,0);
$pdf->Cell(50,10,$sinhalaMarks,1,1,'C');

$pdf->Cell(50,10,"English Marks",1,0);
$pdf->Cell(50,10,$englishMarks,1,1,'C');

$pdf->Cell(50,10,"Science Marks",1,0);
$pdf->Cell(50,10,$scienceMarks,1,1,'C');

$pdf->Cell(50,10,"History Marks",1,0);
$pdf->Cell(50,10,$historyMarks,1,1,'C');

$pdf->Cell(50,10,"Buddhism Marks",1,0);
$pdf->Cell(50,10,$buddhismMarks,1,1,'C');

$pdf-> SetFont('Arial','B',13);
$pdf-> Ln();
$pdf-> Cell(100,10,"Student Should Improve",0,0,'C');
$pdf-> Ln();
$pdf->Cell(50,10,$_SESSION['mathsResponse'],0,0);
$pdf-> Ln();
$pdf->Cell(50,10,$_SESSION['sinhalaResponse'],0,0);
$pdf-> Ln();
$pdf->Cell(50,10,$_SESSION['englishResponse'],0,0);
$pdf-> Ln();
$pdf->Cell(50,10,$_SESSION['scienceResponse'],0,0);
$pdf-> Ln();
$pdf->Cell(50,10,$_SESSION['historyResponse'],0,0);
$pdf-> Ln();
$pdf->Cell(50,10,$_SESSION['buddhismResponse'],0,0);
$pdf->Output();
?> 