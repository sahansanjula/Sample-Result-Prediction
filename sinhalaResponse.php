<?php
  include('connect.php');

  session_start();
  if(!isset($_SESSION['uname'])){
    echo "<script>location.href='signin_form.html'</script>";
  }
  else{
    $uname=$_SESSION['uname'];   

  }
    
    
 $sinhalaImpr = array();
    $sinhalaImpr[0] = $_GET['sinhala11'];
    $sinhalaImpr[1] = $_GET['sinhala12'];
    $sinhalaImpr[2] = $_GET['sinhala13'];
    $sinhalaImpr[3] = $_GET['sinhala21'];
    $sinhalaImpr[4] = $_GET['sinhala22'];
    $sinhalaImpr[5] = $_GET['sinhala23'];
    $sinhalaImpr[6] = $_GET['sinhala31'];
    $sinhalaImpr[7] = $_GET['sinhala32'];
    $sinhalaImpr[8] = $_GET['sinhala33'];
    $sinhalaImpr[9] = $_GET['sinhala41'];
    $sinhalaImpr[10] = $_GET['sinhala42'];
    $sinhalaImpr[11] = $_GET['sinhala43'];

    // Grammar
    $sinhalaImpr1 = 0;
    for($a = 0;$a<3;$a++){
      $sinhalaImpr1 = $sinhalaImpr[$a] + (int)$sinhalaImpr1;
    }

    //Creativity
    $sinhalaImpr2 = 0;
    for($a = 3;$a<6;$a++){
      $sinhalaImpr2 = $sinhalaImpr[$a] + (int)$sinhalaImpr2;
    }
    // Vocabulary
    $sinhalaImpr3 = 0;
    for($a = 6;$a<9;$a++){
      $sinhalaImpr3 = $sinhalaImpr[$a] + (int)$sinhalaImpr3;
    }
    // Literature knowledge
    $sinhalaImpr4 = 0;
    for($a = 9;$a<12;$a++){
      $sinhalaImpr4 = $sinhalaImpr[$a] + (int)$sinhalaImpr4;
    }
    //findingMinValue
    $finalSinhalaImpr = min($sinhalaImpr1,$sinhalaImpr2,$sinhalaImpr3,$sinhalaImpr4);
    if($finalSinhalaImpr == $sinhalaImpr1){
    $_SESSION['sinhalaResponse'] = 'You should improve the side of Grammar the subject of Sinhala';
    }elseif ($finalSinhalaImpr == $sinhalaImpr2) {
      $_SESSION['sinhalaResponse'] = 'You should improve the side of creativity the subject of Sinhala';
    }elseif($finalSinhalaImpr == $sinhalaImpr3){
      $_SESSION['sinhalaResponse'] = 'You should improve the side of vocabulary the subject of Sinhala';
    }elseif($finalSinhalaImpr == $sinhalaImpr4){
      $_SESSION['sinhalaResponse'] = 'You should improve the side of literature knowledg the subject of Sinhala';
    }else{
      $_SESSION['sinhalaResponse'] = null;
    }

  header('location: predict.php');
    
?>