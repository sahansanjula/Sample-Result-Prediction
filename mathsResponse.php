<?php
  include('connect.php');

  session_start();
    if(!isset($_SESSION['uname'])){
      echo "<script>location.href='signin_form.html'</script>";
    }
    else{
      $uname=$_SESSION['uname'];   

    }

  $mathsImpr = array();
    $mathsImpr[0] = $_GET['maths11'];
    $mathsImpr[1] = $_GET['maths12'];
    $mathsImpr[2] = $_GET['maths13'];
    $mathsImpr[3] = $_GET['maths21'];
    $mathsImpr[4] = $_GET['maths22'];
    $mathsImpr[5] = $_GET['maths23'];
    $mathsImpr[6] = $_GET['maths31'];
    $mathsImpr[7] = $_GET['maths32'];
    $mathsImpr[8] = $_GET['maths33'];
    $mathsImpr[9] = $_GET['maths41'];
    $mathsImpr[10] = $_GET['maths42'];
    $mathsImpr[11] = $_GET['maths43'];

    // Logical thinking
    $mathsImpr1 = 0;
    for($a = 0;$a<3;$a++){
      $mathsImpr1 = $mathsImpr[$a] + (int)$mathsImpr1;
    }

    //Problem solving
    $mathsImpr2 = 0;
    for($a = 3;$a<6;$a++){
      $mathsImpr2 = $mathsImpr[$a] + (int)$mathsImpr2;
    }
    //  Simplification ability
    $mathsImpr3 = 0;
    for($a = 6;$a<9;$a++){
      $mathsImpr3 = $mathsImpr[$a] + (int)$mathsImpr3;
    }
    // Using short methods
    $mathsImpr4 = 0;
    for($a = 9;$a<12;$a++){
      $mathsImpr4 = $mathsImpr[$a] + (int)$mathsImpr4;
    }
    //findingMinValue
    $finalMathsImpr = min($mathsImpr1,$mathsImpr2,$mathsImpr3,$mathsImpr4);
    if($finalMathsImpr == $mathsImpr1){
    $_SESSION['mathsResponse'] = 'You should improve the side of logical thinking the subject of Maths';
    }elseif ($finalMathsImpr == $mathsImpr2) {
      $_SESSION['mathsResponse'] = 'You should improve the side of problem solving the subject of Maths';
    }elseif($finalMathsImpr == $mathsImpr3){
      $_SESSION['mathsResponse'] = 'You should improve the side of simplification ability the subject of Maths';
    }elseif($finalMathsImpr == $mathsImpr4){
      $_SESSION['mathsResponse'] = 'You should improve the side of using short methods the subject of Maths';
    }else{
      $_SESSION['mathsResponse'] = null;
    }

  header('location: predict.php');

?>