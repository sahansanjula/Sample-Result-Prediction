<?php
  include('connect.php');

  session_start();
  if(!isset($_SESSION['uname'])){
    echo "<script>location.href='signin_form.html'</script>";
  }
  else{
    $uname=$_SESSION['uname'];   

  }

  $scienceImpr = array();
    $scienceImpr[0] = $_GET['science11'];
    $scienceImpr[1] = $_GET['science12'];
    $scienceImpr[2] = $_GET['science13'];
    $scienceImpr[3] = $_GET['science21'];
    $scienceImpr[4] = $_GET['science22'];
    $scienceImpr[5] = $_GET['science23'];
    $scienceImpr[6] = $_GET['science31'];
    $scienceImpr[7] = $_GET['science32'];
    $scienceImpr[8] = $_GET['science33'];
    $scienceImpr[9] = $_GET['science41'];
    $scienceImpr[10] = $_GET['science42'];
    $scienceImpr[11] = $_GET['science43'];

    // Logical thinking
    $scienceImpr1 = 0;
    for($a = 0;$a<3;$a++){
      $scienceImpr1 = $scienceImpr[$a] + (int)$scienceImpr1;
    }

    //Problem solving
    $scienceImpr2 = 0;
    for($a = 3;$a<6;$a++){
      $scienceImpr2 = $scienceImpr[$a] + (int)$scienceImpr2;
    }
    //  Calculate ability
    $scienceImpr3 = 0;
    for($a = 6;$a<9;$a++){
      $scienceImpr3 = $scienceImpr[$a] + (int)$scienceImpr3;
    }
    // Scientific knowledge
    $scienceImpr4 = 0;
    for($a = 9;$a<12;$a++){
      $scienceImpr4 = $scienceImpr[$a] + (int)$scienceImpr4;
    }
    //findingMinValue
    $finalScienceImpr = min($scienceImpr1,$scienceImpr2,$scienceImpr3,$scienceImpr4);
    if($finalScienceImpr == $scienceImpr1){
    $_SESSION['scienceResponse'] = 'You should improve the side of logical thinking the subject of Science';
    }elseif ($finalScienceImpr == $scienceImpr2) {
      $_SESSION['scienceResponse'] = 'You should improve the side of problem solving the subject of Science';
    }elseif($finalScienceImpr == $scienceImpr3){
      $_SESSION['scienceResponse'] = 'You should improve the side of calculate ability the subject of Science';
    }elseif($finalScienceImpr == $scienceImpr4){
      $_SESSION['scienceResponse'] = 'You should improve the side of scientific knowledge the subject of Science';
    }else{
      $_SESSION['scienceResponse'] = null;
    }

  header('location: predict.php');
 
?>