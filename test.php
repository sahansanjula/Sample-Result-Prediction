<?php
  include('connect.php');

  session_start();
  if(!isset($_SESSION['uname'])){
    echo "<script>location.href='signin_form.html'</script>";
  }
  else{
    $uname=$_SESSION['uname'];   

  }
  for ($x = 1; $x <= 5; $x++) {
    echo($_SESSION['sinhalaResponse'][$x] );

  }
?>