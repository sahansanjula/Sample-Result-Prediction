<?php
  include('connect.php');

  session_start();
    if(!isset($_SESSION['uname'])){
      echo "<script>location.href='signin_form.html'</script>";
    }
    else{
      $uname=$_SESSION['uname'];   
    }

    $buddhismImpr = array();
    $buddhismImpr[0] = $_GET['buddhism11'];
    $buddhismImpr[1] = $_GET['buddhism12'];
    $buddhismImpr[2] = $_GET['buddhism13'];
    $buddhismImpr[3] = $_GET['buddhism21'];
    $buddhismImpr[4] = $_GET['buddhism22'];
    $buddhismImpr[5] = $_GET['buddhism23'];
    $buddhismImpr[6] = $_GET['buddhism31'];
    $buddhismImpr[7] = $_GET['buddhism32'];
    $buddhismImpr[8] = $_GET['buddhism33'];

    // Memorizing
    $buddhismImpr1 = 0;
    for($a = 0;$a<3;$a++){
      $buddhismImpr1 = $buddhismImpr[$a] + (int)$buddhismImpr1;
    }

    // General knowledge
    $buddhismImpr2 = 0;
    for($a = 3;$a<6;$a++){
      $buddhismImpr2 = $buddhismImpr[$a] + (int)$buddhismImpr2;
    }
    // Problem analysing
    $buddhismImpr3 = 0;
    for($a = 6;$a<9;$a++){
      $buddhismImpr3 = $buddhismImpr[$a] + (int)$buddhismImpr3;
    }
    $finalBuddhismImpr = min($buddhismImpr1,$buddhismImpr2,$buddhismImpr3);
    if($finalBuddhismImpr == $buddhismImpr1){
    $_SESSION['buddhismResponse'] = 'You should improve the side of memorizing the subject of Buddhism';
      
    }elseif ($finalBuddhismImpr == $buddhismImpr2) {
      $_SESSION['buddhismResponse'] = 'You should improve the side of general knowledge the subject of Buddhism';
    }elseif($finalBuddhismImpr == $buddhismImpr3){
      $_SESSION['buddhismResponse'] = 'You should improve the side of problem analysing the subject of Buddhism';
    }else{
      $_SESSION['buddhismResponse'] = null;
    }
    header('location: predict.php');
     
?>