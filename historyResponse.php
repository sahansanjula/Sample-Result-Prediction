<?php
  include('connect.php');

  session_start();
    if(!isset($_SESSION['uname'])){
      echo "<script>location.href='signin_form.html'</script>";
    }
    else{
      $uname=$_SESSION['uname'];   
    
    }

  $historyImpr = array();
    $historyImpr[0] = $_GET['history11'];
    $historyImpr[1] = $_GET['history12'];
    $historyImpr[2] = $_GET['history13'];
    $historyImpr[3] = $_GET['history21'];
    $historyImpr[4] = $_GET['history22'];
    $historyImpr[5] = $_GET['history23'];
    $historyImpr[6] = $_GET['history31'];
    $historyImpr[7] = $_GET['history32'];
    $historyImpr[8] = $_GET['history33'];

    // Memorizing
    $historyImpr1 = 0;
    for($a = 0;$a<3;$a++){
      $historyImpr1 = $historyImpr[$a] + (int)$historyImpr1;
    }

    //General knowledge
    $historyImpr2 = 0;
    for($a = 3;$a<6;$a++){
      $historyImpr2 = $historyImpr[$a] + (int)$historyImpr2;
    }
    // Problem analysing
    $historyImpr3 = 0;
    for($a = 6;$a<9;$a++){
      $historyImpr3 = $historyImpr[$a] + (int)$historyImpr3;
    }
    $finalHisoryImpr = min($historyImpr1,$historyImpr2,$historyImpr3);
    if($finalHisoryImpr == $historyImpr1){
    $_SESSION['historyResponse'] = 'You should improve the side of memorizing the subject of History';
    }elseif ($finalHisoryImpr == $historyImpr2) {
      $_SESSION['historyResponse'] = 'You should improve the side of general knowledge the subject of History';
    }elseif($finalHisoryImpr == $historyImpr3){
      $_SESSION['historyResponse'] = 'You should improve the side of problem analysing the subject of History';
    }else{
      $_SESSION['historyResponse'] = null;
    }

  header('location: predict.php');
?>