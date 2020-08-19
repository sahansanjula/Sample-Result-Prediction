<?php
  include('connect.php');

  session_start();
  if(!isset($_SESSION['uname'])){
    echo "<script>location.href='signin_form.html'</script>";
  }
  else{
    $uname=$_SESSION['uname'];   
  }

    $englishImpr = array();
    $englishImpr[0] = $_GET['english11'];
    $englishImpr[1] = $_GET['english12'];
    $englishImpr[2] = $_GET['english13'];
    $englishImpr[3] = $_GET['english21'];
    $englishImpr[4] = $_GET['english22'];
    $englishImpr[5] = $_GET['english23'];
    $englishImpr[6] = $_GET['english31'];
    $englishImpr[7] = $_GET['english32'];
    $englishImpr[8] = $_GET['english33'];
    $englishImpr[9] = $_GET['english41'];
    $englishImpr[10] = $_GET['english42'];
    $englishImpr[11] = $_GET['english43'];

    // Grammar
    $englishImpr1 = 0;
    for($a = 0;$a<3;$a++){
      $englishImpr1 = $englishImpr[$a] + (int)$englishImpr1;
    }

    //Creativity
    $englishImpr2 = 0;
    for($a = 3;$a<6;$a++){
      $englishImpr2 = $englishImpr[$a] + (int)$englishImpr2;
    }
    // Vocabulary
    $englishImpr3 = 0;
    for($a = 6;$a<9;$a++){
      $englishImpr3 = $englishImpr[$a] + (int)$englishImpr3;
    }
    // Literature knowledge
    $englishImpr4 = 0;
    for($a = 9;$a<12;$a++){
      $englishImpr4 = $englishImpr[$a] + (int)$englishImpr4;
    }
    //findingMinValue
    $finalEnglishImpr = min($englishImpr1,$englishImpr2,$englishImpr3,$englishImpr4);
    if($finalEnglishImpr == $englishImpr1){
    $_SESSION['englishResponse'] = 'You should improve the side of Grammar the subject of English';
    }elseif ($finalEnglishImpr == $englishImpr2) {
      $_SESSION['englishResponse'] = 'You should improve the side of creativity the subject of English';
    }elseif($finalEnglishImpr == $englishImpr3){
      $_SESSION['englishResponse'] = 'You should improve the side of vocabulary the subject of English';
    }elseif($finalEnglishImpr == $englishImpr4){
      $_SESSION['englishResponse'] = 'You should improve the side of literature knowledg the subject of English';
    }else{
      $_SESSION['englishResponse'] = null;
    }
  header('location: predict.php');
   
?>