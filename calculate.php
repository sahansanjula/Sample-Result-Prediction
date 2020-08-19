<?php
  include('connect.php');

  session_start();
    if(!isset($_SESSION['uname'])){
      echo "<script>location.href='signin_form.html'</script>";
    }
    else{
      $uname=$_SESSION['uname'];   
    }



//Take  input

//Term Test Marks
//maths
$mathsMarks = array();

$mathsMarks[1] =$_GET['maths_M_G8_T1'];
$mathsMarks[2] =$_GET['maths_M_G8_T2'];
$mathsMarks[3] =$_GET['maths_M_G8_T3'];
$mathsMarks[4] =$_GET['maths_M_G9_T1'];
$mathsMarks[5] =$_GET['maths_M_G9_T2'];
$mathsMarks[6] =$_GET['maths_M_G9_T3'];
$mathsMarks[7] =$_GET['maths_M_G10_T1'];
$mathsMarks[8] =$_GET['maths_M_G10_T2'];
$mathsMarks[9] =$_GET['maths_M_G10_T3'];
$mathsMarks[10] =$_GET['maths_M_G11_T1'];
$mathsMarks[11] =$_GET['maths_M_G11_T2'];
$mathsMarks[12] =$_GET['maths_M_G11_T3'];

 
    
//Sinhala
$sinhalaMarks = array();
$sinhalaMarks[1] =$_GET['sinhala_M_G8_T1'];
$sinhalaMarks[2] =$_GET['sinhala_M_G8_T2'];
$sinhalaMarks[3] =$_GET['sinhala_M_G8_T3'];
$sinhalaMarks[4] =$_GET['sinhala_M_G9_T1'];
$sinhalaMarks[5] =$_GET['sinhala_M_G9_T2'];
$sinhalaMarks[6] =$_GET['sinhala_M_G9_T3'];
$sinhalaMarks[7] =$_GET['sinhala_M_G10_T1'];
$sinhalaMarks[8] =$_GET['sinhala_M_G10_T2'];
$sinhalaMarks[9] =$_GET['sinhala_M_G10_T3'];
$sinhalaMarks[10] =$_GET['sinhala_M_G11_T1'];
$sinhalaMarks[11] =$_GET['sinhala_M_G11_T2'];
$sinhalaMarks[12] =$_GET['sinhala_M_G11_T3'];


   
    
//English
$englishMarks = array();
$englishMarks[1] =$_GET['english_M_G8_T1'];
$englishMarks[2] =$_GET['english_M_G8_T3'];
$englishMarks[3] =$_GET['english_M_G8_T3'];
$englishMarks[4] =$_GET['english_M_G9_T1'];
$englishMarks[5] =$_GET['english_M_G9_T3'];
$englishMarks[6] =$_GET['english_M_G9_T3'];
$englishMarks[7] =$_GET['english_M_G10_T1'];
$englishMarks[8] =$_GET['english_M_G10_T3'];
$englishMarks[9] =$_GET['english_M_G10_T3'];
$englishMarks[10] =$_GET['english_M_G11_T1'];
$englishMarks[11] =$_GET['english_M_G11_T3'];
$englishMarks[12] =$_GET['english_M_G11_T3'];
    

//Science
$scienceMarks = array();
$scienceMarks[1] =$_GET['science_M_G8_T1'];
$scienceMarks[2] =$_GET['science_M_G8_T2'];
$scienceMarks[3] =$_GET['science_M_G8_T3'];
$scienceMarks[4] =$_GET['science_M_G9_T1'];
$scienceMarks[5] =$_GET['science_M_G9_T2'];
$scienceMarks[6] =$_GET['science_M_G9_T3'];
$scienceMarks[7] =$_GET['science_M_G10_T1'];
$scienceMarks[8] =$_GET['science_M_G10_T2'];
$scienceMarks[9] =$_GET['science_M_G10_T3'];
$scienceMarks[10] =$_GET['science_M_G11_T1'];
$scienceMarks[11] =$_GET['science_M_G11_T2'];
$scienceMarks[12] =$_GET['science_M_G11_T3'];
    
    



//history
$historyMarks = array();
$historyMarks[1] =$_GET['history_M_G8_T1'];
$historyMarks[2] =$_GET['history_M_G8_T2'];
$historyMarks[3] =$_GET['history_M_G8_T3'];
$historyMarks[4] =$_GET['history_M_G9_T1'];
$historyMarks[5] =$_GET['history_M_G9_T2'];
$historyMarks[6] =$_GET['history_M_G9_T3'];
$historyMarks[7] =$_GET['history_M_G10_T1'];
$historyMarks[8] =$_GET['history_M_G10_T2'];
$historyMarks[9] =$_GET['history_M_G10_T3'];
$historyMarks[10] =$_GET['history_M_G11_T1'];
$historyMarks[11] =$_GET['history_M_G11_T2'];
$historyMarks[12] =$_GET['history_M_G11_T3'];





//buddhism
$buddhismMarks = array();
$buddhismMarks[1] =$_GET['buddhism_M_G8_T1'];
$buddhismMarks[2] =$_GET['buddhism_M_G8_T2'];
$buddhismMarks[3] =$_GET['buddhism_M_G8_T3'];
$buddhismMarks[4] =$_GET['buddhism_M_G9_T1'];
$buddhismMarks[5] =$_GET['buddhism_M_G9_T2'];
$buddhismMarks[6] =$_GET['buddhism_M_G9_T3'];
$buddhismMarks[7] =$_GET['buddhism_M_G10_T1'];
$buddhismMarks[8] =$_GET['buddhism_M_G10_T2'];
$buddhismMarks[9] =$_GET['buddhism_M_G10_T3'];
$buddhismMarks[10] =$_GET['buddhism_M_G11_T1'];
$buddhismMarks[11] =$_GET['buddhism_M_G11_T2'];
$buddhismMarks[12] =$_GET['buddhism_M_G11_T3'];






//Assignments
//maths
$mathsAssign=array();
$mathsAssign[1] =$_GET['maths_A_G8_T1'];
$mathsAssign[2] =$_GET['maths_A_G8_T2'];
$mathsAssign[3] =$_GET['maths_A_G8_T3'];
$mathsAssign[4] =$_GET['maths_A_G9_T1'];
$mathsAssign[5] =$_GET['maths_A_G9_T2'];
$mathsAssign[6] =$_GET['maths_A_G9_T3'];
$mathsAssign[7] =$_GET['maths_A_G10_T1'];
$mathsAssign[8] =$_GET['maths_A_G10_T2'];
$mathsAssign[9] =$_GET['maths_A_G10_T3'];
$mathsAssign[10] =$_GET['maths_A_G11_T1'];
$mathsAssign[11] =$_GET['maths_A_G11_T2'];
$mathsAssign[12] =$_GET['maths_A_G11_T3'];

//Sinhla
$sinhalaAssign = array();
$sinhalaAssign[1] =$_GET['sinhala_A_G8_T1'];
$sinhalaAssign[2] =$_GET['sinhala_A_G8_T2'];
$sinhalaAssign[3] =$_GET['sinhala_A_G8_T3'];
$sinhalaAssign[4] =$_GET['sinhala_A_G9_T1'];
$sinhalaAssign[5] =$_GET['sinhala_A_G9_T2'];
$sinhalaAssign[6] =$_GET['sinhala_A_G9_T3'];
$sinhalaAssign[7] =$_GET['sinhala_A_G10_T1'];
$sinhalaAssign[8] =$_GET['sinhala_A_G10_T2'];
$sinhalaAssign[9] =$_GET['sinhala_A_G10_T3'];
$sinhalaAssign[10] =$_GET['sinhala_A_G11_T1'];
$sinhalaAssign[11] =$_GET['sinhala_A_G11_T2'];
$sinhalaAssign[12] =$_GET['sinhala_A_G11_T3'];


//English
//English
$englishAssign = array();
$englishAssign[1] =$_GET['english_A_G8_T1'];
$englishAssign[2] =$_GET['english_A_G8_T3'];
$englishAssign[3] =$_GET['english_A_G8_T3'];
$englishAssign[4] =$_GET['english_A_G9_T1'];
$englishAssign[5] =$_GET['english_A_G9_T3'];
$englishAssign[6] =$_GET['english_A_G9_T3'];
$englishAssign[7] =$_GET['english_A_G10_T1'];
$englishAssign[8] =$_GET['english_A_G10_T3'];
$englishAssign[9] =$_GET['english_A_G10_T3'];
$englishAssign[10] =$_GET['english_A_G11_T1'];
$englishAssign[11] =$_GET['english_A_G11_T3'];
$englishAssign[12] =$_GET['english_A_G11_T3'];
    

//Science
$scienceAssign = array();
$scienceAssign[1] =$_GET['science_A_G8_T1'];
$scienceAssign[2] =$_GET['science_A_G8_T2'];
$scienceAssign[3] =$_GET['science_A_G8_T3'];
$scienceAssign[4] =$_GET['science_A_G9_T1'];
$scienceAssign[5] =$_GET['science_A_G9_T2'];
$scienceAssign[6] =$_GET['science_A_G9_T3'];
$scienceAssign[7] =$_GET['science_A_G10_T1'];
$scienceAssign[8] =$_GET['science_A_G10_T2'];
$scienceAssign[9] =$_GET['science_A_G10_T3'];
$scienceAssign[10] =$_GET['science_A_G11_T1'];
$scienceAssign[11] =$_GET['science_A_G11_T2'];
$scienceAssign[12] =$_GET['science_A_G11_T3'];
    
    



//history
$historyAssign = array();
$historyAssign[1] =$_GET['history_A_G8_T1'];
$historyAssign[2] =$_GET['history_A_G8_T2'];
$historyAssign[3] =$_GET['history_A_G8_T3'];
$historyAssign[4] =$_GET['history_A_G9_T1'];
$historyAssign[5] =$_GET['history_A_G9_T2'];
$historyAssign[6] =$_GET['history_A_G9_T3'];
$historyAssign[7] =$_GET['history_A_G10_T1'];
$historyAssign[8] =$_GET['history_A_G10_T2'];
$historyAssign[9] =$_GET['history_A_G10_T3'];
$historyAssign[10] =$_GET['history_A_G11_T1'];
$historyAssign[11] =$_GET['history_A_G11_T2'];
$historyAssign[12] =$_GET['history_A_G11_T3'];





//buddhism
$buddhismAssign = array();
$buddhismAssign[1] =$_GET['buddhism_A_G8_T1'];
$buddhismAssign[2] =$_GET['buddhism_A_G8_T2'];
$buddhismAssign[3] =$_GET['buddhism_A_G8_T3'];
$buddhismAssign[4] =$_GET['buddhism_A_G9_T1'];
$buddhismAssign[5] =$_GET['buddhism_A_G9_T2'];
$buddhismAssign[6] =$_GET['buddhism_A_G9_T3'];
$buddhismAssign[7] =$_GET['buddhism_A_G10_T1'];
$buddhismAssign[8] =$_GET['buddhism_A_G10_T2'];
$buddhismAssign[9] =$_GET['buddhism_A_G10_T3'];
$buddhismAssign[10] =$_GET['buddhism_A_G11_T1'];
$buddhismAssign[11] =$_GET['buddhism_A_G11_T2'];
$buddhismAssign[12] =$_GET['buddhism_A_G11_T3'];








//Average Attendance
$attendance = array();
$attendance[1]=$_GET['attendance_G8'];
$attendance[2]=$_GET['attendance_G9'];
$attendance[3]=$_GET['attendance_G10'];
$attendance[4]=$_GET['attendance_G11'];

//No of tution classes
$tution = array();
$tution[1]=$_GET['mathsTution'];
$tution[2]=$_GET['sinhalaTution'];
$tution[3]=$_GET['englishTution'];
$tution[4]=$_GET['scienceTution'];
$tution[5]=$_GET['historyTution'];
$tution[6]=$_GET['buddhismTution'];

//additional info
$additional = array();
$additional[1]=$_GET['parentContri'];
$additional[2]=$_GET['behaviour'];
$additional[3]=$_GET['extra'];

//maths exam results
$mathsResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $mathsResultSumGrd8 = $mathsResultSumGrd8 + (int)$mathsMarks[$a]; 
}
$finalMathsResultGrd8 = $mathsResultSumGrd8/3;

$mathsResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $mathsResultSumGrd9 = $mathsResultSumGrd9 + (int)$mathsMarks[$a]; 
}
$finalMathsResultGrd9 = $mathsResultSumGrd9/3;

$mathsResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $mathsResultSumGrd10 = $mathsResultSumGrd10 + (int)$mathsMarks[$a]; 
}
$finalMathsResultGrd10 = $mathsResultSumGrd10/3;

$mathsResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $mathsResultSumGrd11 = $mathsResultSumGrd11 + (int)$mathsMarks[$a]; 
}
$finalMathsResultGrd11 = $mathsResultSumGrd11/3;

// $mathsAssign[]
$mathsAsgResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $mathsAsgResultSumGrd8 = $mathsAsgResultSumGrd8 + (int)$mathsAssign[$a]; 
}
$finalMathsAsgResultGrd8 = $mathsAsgResultSumGrd8/3;

$mathsAsgResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $mathsAsgResultSumGrd9 = $mathsAsgResultSumGrd9 + (int)$mathsAssign[$a]; 
}
$finalMathsAsgResultGrd9 = $mathsAsgResultSumGrd9/3;

$mathsAsgResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $mathsAsgResultSumGrd10 = $mathsAsgResultSumGrd10 + (int)$mathsAssign[$a]; 
}
$finalMathsAsgResultGrd10 = $mathsAsgResultSumGrd10/3;

$mathsAsgResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $mathsAsgResultSumGrd11 = $mathsAsgResultSumGrd11 + (int)$mathsAssign[$a]; 
}
$finalMathsAsgResultGrd11 = $mathsAsgResultSumGrd11/3;

$subMathsTotal = $finalMathsResultGrd8+$finalMathsResultGrd9+$finalMathsResultGrd10+$finalMathsResultGrd11+$finalMathsAsgResultGrd8+$finalMathsAsgResultGrd9+$finalMathsAsgResultGrd10+$finalMathsAsgResultGrd11;

$finalMathsResult = 0;
if($subMathsTotal == 0){$_SESSION["finalMathsResult"] = "NO";}else{
  if($finalMathsResultGrd11 <= 53.75){
  if($finalMathsResultGrd11 <= 24.5){
    if($finalMathsResultGrd8 <= 46.833){
      if($finalMathsResultGrd9 <= 47.25){
        $_SESSION["finalMathsResult"] = "F";
      }else{
        if($finalMathsAsgResultGrd10 <= 11.0){
        $_SESSION["finalMathsResult"] = "S";
      }else{
        $_SESSION["finalMathsResult"] = "F";
      }
    }
    }else{
      if($attendance[1] <= 80.61){
      $_SESSION["finalMathsResult"] = "F";
    }else{$_SESSION["finalMathsResult"] = "S";}
  }
  }else{
    if($finalMathsResultGrd11 <= 30.75){
    if($finalMathsAsgResultGrd9 <= 10.5){
      $_SESSION["finalMathsResult"] = "S";
    }else{
      if($finalMathsAsgResultGrd11 <= 10.75){
      if($attendance[1] <= 90.3){
      $_SESSION["finalMathsResult"] = "S";
    }else{ $_SESSION["finalMathsResult"] = "F";}
    }else{
       $_SESSION["finalMathsResult"] = "F";
    }
  }
  }else{
    $_SESSION["finalMathsResult"] = "S";
  }
  }
}else{
  if ($finalMathsResultGrd11 <= 64.5) {
    if($attendance[3] <= 92.85){
      if($finalMathsAsgResultGrd11 <= 10.0){
        if($attendance[4] <= 85.2){
       $_SESSION["finalMathsResult"] = "C";
        }else{
          $_SESSION["finalMathsResult"] = "S";
        }
      }else{
        $_SESSION["finalMathsResult"] = "C";
      }
    }else{
      $_SESSION["finalMathsResult"] = "B";
    }
}else{
  if($finalMathsResultGrd11 <= 72.5){
    if($finalMathsAsgResultGrd11 <10.5){
      $_SESSION["finalMathsResult"] = "S";
    }
      else{$_SESSION["finalMathsResult"] = "B";}
  }
    else{$_SESSION["finalMathsResult"] = "A";}
}
}
}
//sinhala exam results
$sinResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $sinResultSumGrd8 = $sinResultSumGrd8 + (int)$sinhalaMarks[$a]; 
}
$finalSinResultGrd8 = $sinResultSumGrd8/3;

$sinResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $sinResultSumGrd9 = $sinResultSumGrd9 + (int)$sinhalaMarks[$a]; 
}
$finalSinResultGrd9 = $sinResultSumGrd9/3;

$sinResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $sinResultSumGrd10 = $sinResultSumGrd10 + (int)$sinhalaMarks[$a]; 
}
$finalSinResultGrd10 = $sinResultSumGrd10/3;

$sinResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $sinResultSumGrd11 = $sinResultSumGrd11 + (int)$sinhalaMarks[$a]; 
}
$finalSinResultGrd11 = $sinResultSumGrd11/3;

// $sinhala Assignment resulsts
$sinAsgResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $sinAsgResultSumGrd8 = $sinAsgResultSumGrd8 + (int)$sinhalaAssign[$a]; 
}
$finalSinAsgResultGrd8 = $sinAsgResultSumGrd8/3;

$sinAsgResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $sinAsgResultSumGrd9 = $sinAsgResultSumGrd9 + (int)$sinhalaAssign[$a]; 
}
$finalSinAsgResultGrd9 = $sinAsgResultSumGrd9/3;

$sinAsgResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $sinAsgResultSumGrd10 = $sinAsgResultSumGrd10 + (int)$sinhalaAssign[$a]; 
}
$finalSinAsgResultGrd10 = $sinAsgResultSumGrd10/3;

$sinAsgResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $sinAsgResultSumGrd11 = $sinAsgResultSumGrd11 + (int)$sinhalaAssign[$a]; 
}
$finalSinAsgResultGrd11 = $sinAsgResultSumGrd11/3;

$subSinhalaTotal = $finalSinResultGrd8+$finalSinResultGrd9+$finalSinResultGrd10+$finalSinResultGrd11+$finalSinAsgResultGrd8+$finalSinAsgResultGrd9+$finalSinAsgResultGrd10+$finalSinAsgResultGrd11;
$finalSinhalaResult = 0;
if($subSinhalaTotal == 0){$_SESSION["finalSinhalaResult"] = "NO";}else{
  if($finalSinResultGrd11 <= 53.75){
  if($finalSinResultGrd11 <= 24.5){
    if($finalSinResultGrd8 <= 46.833){
      if($finalSinResultGrd9 <= 47.25){
        $_SESSION["finalSinhalaResult"] = "F";
      }else{
        if($finalSinAsgResultGrd10 <= 11.0){
        $_SESSION["finalSinhalaResult"] = "S";
      }else{
        $_SESSION["finalSinhalaResult"] = "F";
      }
    }
    }else{
      if($attendance[1] <= 80.61){
      $_SESSION["finalSinhalaResult"] = "F";
    }else{$_SESSION["finalSinhalaResult"] = "S";}
  }
  }else{
    if($finalSinResultGrd11 <= 30.75){
    if($finalSinAsgResultGrd9 <= 10.5){
      $_SESSION["finalSinhalaResult"] = "S";
    }else{
      if($finalSinAsgResultGrd11 <= 10.75){
      if($attendance[1] <= 90.3){
      $_SESSION["finalSinhalaResult"] = "S";
    }else{ $_SESSION["finalSinhalaResult"] = "F";}
    }else{
       $_SESSION["finalSinhalaResult"] = "F";
    }
  }
  }else{
    $_SESSION["finalSinhalaResult"] = "S";
  }
  }
}else{
  if ($finalSinResultGrd11 <= 64.5) {
    if($attendance[3] <= 92.85){
      if($finalSinAsgResultGrd11 <= 10.0){
        if($attendance[4] <= 85.2){
       $_SESSION["finalSinhalaResult"] = "C";
        }else{
          $_SESSION["finalSinhalaResult"] = "S";
        }
      }else{
        $_SESSION["finalSinhalaResult"] = "C";
      }
    }else{
      $_SESSION["finalSinhalaResult"] = "B";
    }
}else{
  if($finalSinResultGrd11 <= 72.5){
    if($finalSinAsgResultGrd11 <10.5){
      $_SESSION["finalSinhalaResult"] = "S";
    }
      else{$_SESSION["finalSinhalaResult"] = "B";}
  }
    else{$_SESSION["finalSinhalaResult"] = "A";}
}
}
}

//english exam results
$engResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $engResultSumGrd8 = $engResultSumGrd8 + (int)$englishMarks[$a]; 
}
$finalEngResultGrd8 = $engResultSumGrd8/3;

$engResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $engResultSumGrd9 = $engResultSumGrd9 + (int)$englishMarks[$a]; 
}
$finalEngResultGrd9 = $engResultSumGrd9/3;

$engResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $engResultSumGrd10 = $engResultSumGrd10 + (int)$englishMarks[$a]; 
}
$finalEngResultGrd10 = $engResultSumGrd10/3;

$engResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $engResultSumGrd11 = $engResultSumGrd11 + (int)$englishMarks[$a]; 
}
$finalEngResultGrd11 = $engResultSumGrd11/3;

// English Assignment resulsts
$engAsgResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $engAsgResultSumGrd8 = $engAsgResultSumGrd8 + (int)$englishAssign[$a]; 
}
$finalEngAsgResultGrd8 = $engAsgResultSumGrd8/3;

$engAsgResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $engAsgResultSumGrd9 = $engAsgResultSumGrd9 + (int)$englishAssign[$a]; 
}
$finalEngAsgResultGrd9 = $engAsgResultSumGrd9/3;

$engAsgResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $engAsgResultSumGrd10 = $engAsgResultSumGrd10 + (int)$englishAssign[$a]; 
}
$finalEngAsgResultGrd10 = $engAsgResultSumGrd10/3;

$engAsgResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $engAsgResultSumGrd11 = $engAsgResultSumGrd11 + (int)$englishAssign[$a]; 
}
$finalEngAsgResultGrd11 = $engAsgResultSumGrd11/3;

$subEngTotal = $finalEngResultGrd8+$finalEngResultGrd9+$finalEngResultGrd10+$finalEngResultGrd11+$finalEngAsgResultGrd8+$finalEngAsgResultGrd9+$finalEngAsgResultGrd10+$finalEngAsgResultGrd11;
$finalEnglishResult = 0;
if($subEngTotal == 0 ){$_SESSION["finalEnglishResult"] = "NO";}else{
  if($finalEngResultGrd11 <= 53.75){
  if($finalEngResultGrd11 <= 24.5){
    if($finalEngResultGrd8 <= 46.833){
      if($finalEngResultGrd9 <= 47.25){
        $_SESSION["finalEnglishResult"] = "F";
      }else{
        if($finalEngAsgResultGrd10 <= 11.0){
        $_SESSION["finalEnglishResult"] = "S";
      }else{
        $_SESSION["finalEnglishResult"] = "F";
      }
    }
    }else{
      if($attendance[1] <= 80.61){
      $_SESSION["finalEnglishResult"] = "F";
    }else{$_SESSION["finalEnglishResult"] = "S";}
  }
  }else{
    if($finalEngResultGrd11 <= 30.75){
    if($finalEngAsgResultGrd9 <= 10.5){
      $_SESSION["finalEnglishResult"] = "S";
    }else{
      if($finalEngAsgResultGrd11 <= 10.75){
      if($attendance[1] <= 90.3){
      $_SESSION["finalEnglishResult"] = "S";
    }else{ $_SESSION["finalEnglishResult"] = "F";}
    }else{
       $_SESSION["finalEnglishResult"] = "F";
    }
  }
  }else{
    $_SESSION["finalEnglishResult"] = "S";
  }
  }
}else{
  if ($finalEngResultGrd11 <= 64.5) {
    if($attendance[3] <= 92.85){
      if($finalEngAsgResultGrd11 <= 10.0){
        if($attendance[4] <= 85.2){
       $_SESSION["finalEnglishResult"] = "C";
        }else{
          $_SESSION["finalEnglishResult"] = "S";
        }
      }else{
        $_SESSION["finalEnglishResult"] = "C";
      }
    }else{
      $_SESSION["finalEnglishResult"] = "B";
    }
}else{
  if($finalEngResultGrd11 <= 72.5){
    if($finalEngAsgResultGrd11 <10.5){
      $_SESSION["finalEnglishResult"] = "S";
    }
      else{$_SESSION["finalEnglishResult"] = "B";}
  }
    else{$_SESSION["finalEnglishResult"] = "A";}
}
}
}


//science exam results
$scienceResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $scienceResultSumGrd8 = $scienceResultSumGrd8 + (int)$scienceMarks[$a]; 
}
$finalScienceResultGrd8 = $scienceResultSumGrd8/3;

$scienceResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $scienceResultSumGrd9 = $scienceResultSumGrd9 + (int)$scienceMarks[$a]; 
}
$finalScienceResultGrd9 = $scienceResultSumGrd9/3;

$scienceResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $scienceResultSumGrd10 = $scienceResultSumGrd10 + (int)$scienceMarks[$a]; 
}
$finalScienceResultGrd10 = $scienceResultSumGrd10/3;

$scienceResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $scienceResultSumGrd11 = $scienceResultSumGrd11 + (int)$scienceMarks[$a]; 
}
$finalScienceResultGrd11 = $scienceResultSumGrd11/3;

// Science Assignment resulsts
$scienceAsgResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $scienceAsgResultSumGrd8 = $scienceAsgResultSumGrd8 + (int)$scienceAssign[$a]; 
}
$finalScienceAsgResultGrd8 = $scienceAsgResultSumGrd8/3;

$scienceAsgResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $scienceAsgResultSumGrd9 = $scienceAsgResultSumGrd9 + (int)$scienceAssign[$a]; 
}
$finalScienceAsgResultGrd9 = $scienceAsgResultSumGrd9/3;

$scienceAsgResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $scienceAsgResultSumGrd10 = $scienceAsgResultSumGrd10 + (int)$scienceAssign[$a]; 
}
$finalScienceAsgResultGrd10 = $scienceAsgResultSumGrd10/3;

$scienceAsgResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $scienceAsgResultSumGrd11 = $scienceAsgResultSumGrd11 + (int)$scienceAssign[$a]; 
}
$finalScienceAsgResultGrd11 = $scienceAsgResultSumGrd11/3;

$subScienceTotal = $finalScienceResultGrd8+$finalScienceResultGrd9+$finalScienceResultGrd10+$finalScienceResultGrd11+$finalScienceAsgResultGrd8+$finalScienceAsgResultGrd9+$finalScienceAsgResultGrd10+$finalScienceAsgResultGrd11;

$finalScienceResult = 0;
if($subScienceTotal == 0 ){$_SESSION["finalScienceResult"] = "NO";}else{
  if($finalScienceResultGrd11 <= 53.75){
  if($finalScienceResultGrd11 <= 24.5){
    if($finalScienceResultGrd8 <= 46.833){
      if($finalScienceResultGrd9 <= 47.25){
        $_SESSION["finalScienceResult"] = "F";
      }else{
        if($finalScienceAsgResultGrd10 <= 11.0){
        $_SESSION["finalScienceResult"] = "S";
      }else{
        $_SESSION["finalScienceResult"] = "F";
      }
    }
    }else{
      if($attendance[1] <= 80.61){
      $_SESSION["finalScienceResult"] = "F";
    }else{$_SESSION["finalScienceResult"] = "S";}
  }
  }else{
    if($finalScienceResultGrd11 <= 30.75){
    if($finalScienceAsgResultGrd9 <= 10.5){
      $_SESSION["finalScienceResult"] = "S";
    }else{
      if($finalScienceAsgResultGrd11 <= 10.75){
      if($attendance[1] <= 90.3){
      $_SESSION["finalScienceResult"] = "S";
    }else{ $_SESSION["finalScienceResult"] = "F";}
    }else{
       $_SESSION["finalScienceResult"] = "F";
    }
  }
  }else{
    $_SESSION["finalScienceResult"] = "S";
  }
  }
}else{
  if ($finalScienceResultGrd11 <= 64.5) {
    if($attendance[3] <= 92.85){
      if($finalScienceAsgResultGrd11 <= 10.0){
        if($attendance[4] <= 85.2){
       $_SESSION["finalScienceResult"] = "C";
        }else{
          $_SESSION["finalScienceResult"] = "S";
        }
      }else{
        $_SESSION["finalScienceResult"] = "C";
      }
    }else{
      $_SESSION["finalScienceResult"] = "B";
    }
}else{
  if($finalScienceResultGrd11 <= 72.5){
    if($finalScienceAsgResultGrd11 <10.5){
      $_SESSION["finalScienceResult"] = "S";
    }
      else{$_SESSION["finalScienceResult"] = "B";}
  }
    else{$_SESSION["finalScienceResult"] = "A";}
}
}
}


//history exam results
$hisResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $hisResultSumGrd8 = $hisResultSumGrd8 + (int)$historyMarks[$a]; 
}
$finalHisResultGrd8 = $hisResultSumGrd8/3;

$hisResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $hisResultSumGrd9 = $hisResultSumGrd9 + (int)$historyMarks[$a]; 
}
$finalHisResultGrd9 = $hisResultSumGrd9/3;

$hisResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $hisResultSumGrd10 = $hisResultSumGrd10 + (int)$historyMarks[$a]; 
}
$finalHisResultGrd10 = $hisResultSumGrd10/3;

$hisResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $hisResultSumGrd11 = $hisResultSumGrd11 + (int)$historyMarks[$a]; 
}
$finalHisResultGrd11 = $hisResultSumGrd11/3;

// History Assignment resulsts
$hisAsgResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $hisAsgResultSumGrd8 = $hisAsgResultSumGrd8 + (int)$historyAssign[$a]; 
}
$finalHisAsgResultGrd8 = $hisAsgResultSumGrd8/3;

$hisAsgResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $hisAsgResultSumGrd9 = $hisAsgResultSumGrd9 + (int)$historyAssign[$a]; 
}
$finalHisAsgResultGrd9 = $hisAsgResultSumGrd9/3;

$hisAsgResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $hisAsgResultSumGrd10 = $hisAsgResultSumGrd10 + (int)$historyAssign[$a]; 
}
$finalHisAsgResultGrd10 = $hisAsgResultSumGrd10/3;

$hisAsgResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $hisAsgResultSumGrd11 = $hisAsgResultSumGrd11 + (int)$historyAssign[$a]; 
}
$finalHisAsgResultGrd11 = $hisAsgResultSumGrd11/3;

$subHisTotal = $finalHisResultGrd8+$finalHisResultGrd9+$finalHisResultGrd10+$finalHisResultGrd11+$finalHisAsgResultGrd8+$finalHisAsgResultGrd9+$finalHisAsgResultGrd10+$finalHisAsgResultGrd11;

$finalHistoryResult = 0;
if($subHisTotal == 0){$_SESSION["finalHistoryResult"] = "NO";}else{if($finalHisResultGrd11 <= 53.75){
  if($finalHisResultGrd11 <= 24.5){
    if($finalHisResultGrd8 <= 46.833){
      if($finalHisResultGrd9 <= 47.25){
        $_SESSION["finalHistoryResult"] = "F";
      }else{
        if($finalHisAsgResultGrd10 <= 11.0){
        $_SESSION["finalHistoryResult"] = "S";
      }else{
        $_SESSION["finalHistoryResult"] = "F";
      }
    }
    }else{
      if($attendance[1] <= 80.61){
      $_SESSION["finalHistoryResult"] = "F";
    }else{$_SESSION["finalHistoryResult"] = "S";}
  }
  }else{
    if($finalHisResultGrd11 <= 30.75){
    if($finalHisAsgResultGrd9 <= 10.5){
      $_SESSION["finalHistoryResult"] = "S";
    }else{
      if($finalHisAsgResultGrd11 <= 10.75){
      if($attendance[1] <= 90.3){
      $_SESSION["finalHistoryResult"] = "S";
    }else{ $_SESSION["finalHistoryResult"] = "F";}
    }else{
       $_SESSION["finalHistoryResult"] = "F";
    }
  }
  }else{
    $_SESSION["finalHistoryResult"] = "S";
  }
  }
}else{
  if ($finalHisResultGrd11 <= 64.5) {
    if($attendance[3] <= 92.85){
      if($finalHisAsgResultGrd11 <= 10.0){
        if($attendance[4] <= 85.2){
       $_SESSION["finalHistoryResult"] = "C";
        }else{
          $_SESSION["finalHistoryResult"] = "S";
        }
      }else{
        $_SESSION["finalHistoryResult"] = "C";
      }
    }else{
      $_SESSION["finalHistoryResult"] = "B";
    }
}else{
  if($finalHisResultGrd11 <= 72.5){
    if($finalHisAsgResultGrd11 <10.5){
      $_SESSION["finalHistoryResult"] = "S";
    }
      else{$_SESSION["finalHistoryResult"] = "B";}
  }
    else{$_SESSION["finalHistoryResult"] = "A";}
}
}}



//buddhism exam results
$budResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $budResultSumGrd8 = $budResultSumGrd8 + (int)$buddhismMarks[$a]; 
}
$finalBudResultGrd8 = $budResultSumGrd8/3;

$budResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $budResultSumGrd9 = $budResultSumGrd9 + (int)$buddhismMarks[$a]; 
}
$finalBudResultGrd9 = $budResultSumGrd9/3;

$budResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $budResultSumGrd10 = $budResultSumGrd10 + (int)$buddhismMarks[$a]; 
}
$finalBudResultGrd10 = $budResultSumGrd10/3;

$budResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $budResultSumGrd11 = $budResultSumGrd11 + (int)$buddhismMarks[$a]; 
}
$finalBudResultGrd11 = $budResultSumGrd11/3;

// Buddhism Assignment resulsts
$budAsgResultSumGrd8 = 0;
for($a =1; $a <= 3; $a++){
  $budAsgResultSumGrd8 = $budAsgResultSumGrd8 + (int)$buddhismAssign[$a]; 
}
$finalBudAsgResultGrd8 = $budAsgResultSumGrd8/3;

$budAsgResultSumGrd9 = 0;
for($a =4; $a <= 6; $a++){
  $budAsgResultSumGrd9 = $budAsgResultSumGrd9 + (int)$buddhismAssign[$a]; 
}
$finalBudAsgResultGrd9 = $budAsgResultSumGrd9/3;

$budAsgResultSumGrd10 = 0;
for($a =7; $a <= 9; $a++){
  $budAsgResultSumGrd10 = $budAsgResultSumGrd10 + (int)$buddhismAssign[$a]; 
}
$finalBudAsgResultGrd10 = $budAsgResultSumGrd10/3;

$budAsgResultSumGrd11 = 0;
for($a =10; $a <= 12; $a++){
  $budAsgResultSumGrd11 = $budAsgResultSumGrd11 + (int)$buddhismAssign[$a]; 
}
$finalBudAsgResultGrd11 = $budAsgResultSumGrd11/3;

$subBudTotal = $finalBudResultGrd8+$finalBudResultGrd9+$finalBudResultGrd10+$finalBudResultGrd11+$finalBudAsgResultGrd8+$finalBudAsgResultGrd9+$finalBudAsgResultGrd10+$finalBudAsgResultGrd11;

$finalBuddhismResult = 0;
if($subBudTotal == 0){$_SESSION["finalBuddhismResult"] = "NO";}else{
  if($finalBudResultGrd11 <= 53.75){
  if($finalBudResultGrd11 <= 24.5){
    if($finalBudResultGrd8 <= 46.833){
      if($finalBudResultGrd9 <= 47.25){
        $_SESSION["finalBuddhismResult"] = "F";
      }else{
        if($finalBudAsgResultGrd10 <= 11.0){
        $_SESSION["finalBuddhismResult"] = "S";
      }else{
        $_SESSION["finalBuddhismResultfinalBuddhismResult"] = "F";
      }
    }
    }else{
      if($attendance[1] <= 80.61){
      $_SESSION["finalBuddhismResult"] = "F";
    }else{$_SESSION["finalBuddhismResult"] = "S";}
  }
  }else{
    if($finalBudResultGrd11 <= 30.75){
    if($finalBudAsgResultGrd9 <= 10.5){
      $_SESSION["finalBuddhismResult"] = "S";
    }else{
      if($finalBudAsgResultGrd11 <= 10.75){
      if($attendance[1] <= 90.3){
      $_SESSION["finalBuddhismResult"] = "S";
    }else{ $_SESSION["finalBuddhismResult"] = "F";}
    }else{
       $_SESSION["finalBuddhismResult"] = "F";
    }
  }
  }else{
    $_SESSION["finalBuddhismResult"] = "S";
  }
  }
}else{
  if ($finalBudResultGrd11 <= 64.5) {
    if($attendance[3] <= 92.85){
      if($finalBudAsgResultGrd11 <= 10.0){
        if($attendance[4] <= 85.2){
       $_SESSION["finalBuddhismResult"] = "C";
        }else{
          $_SESSION["finalBuddhismResult"] = "S";
        }
      }else{
        $_SESSION["finalBuddhismResult"] = "C";
      }
    }else{
      $_SESSION["finalBuddhismResult"] = "B";
    }
}else{
  if($finalBudResultGrd11 <= 72.5){
    if($finalBudAsgResultGrd11 <10.5){
      $_SESSION["finalBuddhismResult"] = "S";
    }
      else{$_SESSION["finalBuddhismResult"] = "B";}
  }
    else{$_SESSION["finalBuddhismResult"] = "A";}
}
}
}

header('location: predict.php');
 
?>


