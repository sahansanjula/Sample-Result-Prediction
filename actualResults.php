<?php
  include('connect.php');

  session_start();
    if(!isset($_SESSION['uname'])){
      echo "<script>location.href='signin_form.html'</script>";
    }
    else{
      $uname=$_SESSION['uname'];

      $name_val = $_POST['studentName'];
      $school_val = $_POST['studentSchool'];
      $_SESSION['studentName'] = $name_val ;
      $_SESSION['school'] = $school_val ;
    }
?>

<html>
  <head>
    <title>Results Prediction System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="actualResults.css">
  <head>
  <body style="width:auto;overflow-x: hidden">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #355486;" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="homepage.html"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log Out</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="privacypolicy.html">Privacy Policy</a>
        </li>
        <li>
          <a class="nav-link" href="#"><pre>                                                                                                                </pre></a>
        </li>
      </ul>
    </nav>
    <div class="text-center">
      <div class="jumbotron">
        <div class=row>
          <h1>WELCOME 
            <?php
              echo($_SESSION['uname']);
              //echo($_SESSION['school']);
            ?>
          
          ...!!! </h1>
        </div>
        <h2>Students Details</h2>
      </div>
    </div>


    <form action ="calculate.php" method="GET" >
      <div class="row justify-content-around">
        <div class="card" style="width: 90rem;">
          <div class="card-body">
            <div class="text-center">
      
              <table class="table">                <!--Term Test Marks Table   -->
                <h3>Term Test Marks</h3>
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Grade</th>
                      <th scope="col"> </th>
                      <th scope="col">8</th>
                      <th scope="col"> </th>
                      <th scope="col"> </th>
                      <th scope="col">9</th>
                      <th scope="col"> </th>
                      <th scope="col"> </th>
                      <th scope="col">10</th>
                      <th scope="col"> </th>
                      <th scope="col"> </th>
                      <th scope="col">11</th>
                      <th scope="col"> </th>
                    </tr>
                  </thead>
                  
                  <thead class="thead-dark">
                  <tr>
                      <th scope="col">Term</th>
                      <th scope="col">I</th>
                      <th scope="col">II</th>
                      <th scope="col">III</th>
                      <th scope="col">I</th>
                      <th scope="col">II</th>
                      <th scope="col">III</th>
                      <th scope="col">I</th>
                      <th scope="col">II</th>
                      <th scope="col">III</th>
                      <th scope="col">I</th>
                      <th scope="col">II</th>
                      <th scope="col">III</th>
                  </tr>

                  <tr>
                      <th scope="col">Mathematics</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G8_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G8_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G8_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G9_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G9_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G9_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G10_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G10_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G11_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G11_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_M_G11_T3" value="00"></td>
                  </tr>

                  <tr>
                      <th scope="col">Sinhala</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G8_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G8_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G9_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G9_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G10_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G10_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G10_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G11_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G11_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_M_G11_T3"value="00" ></td>
                  </tr>

                  <tr>
                      <th scope="col">English</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G8_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G8_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G9_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G9_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G9_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G10_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G10_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G11_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G11_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_M_G11_T3"value="00" ></td>
                  </tr>

                  <tr>
                      <th scope="col">Science</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G8_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G8_T2"value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G8_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G9_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G9_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G10_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G10_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G11_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G11_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_M_G11_T3" value="00"></td>
                  </tr>

                  <tr>
                      <th scope="col">History</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G8_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G8_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G9_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G9_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G10_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G10_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G11_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G11_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_M_G11_T3" value="00"></td>
                  </tr>

                  <tr>
                      <th scope="col">Buddhism</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G8_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G8_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G9_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G9_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G10_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G10_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G11_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G11_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_M_G11_T3"value="00" ></td>
                  </tr>    
              </table>            
            </div>
          </div>
        </div>	   
      </div>
      <br>


      <div class="row justify-content-around">
        <div class="card" style="width: 90rem;">
          <div class="card-body">
            <div class="text-center">
      
              <table class="table">                    <!--Assignment Marks Table   -->
                <h3>Best 3 Assignment Marks</h3>
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">Grade</th>
                      <th scope="col"> </th>
                      <th scope="col">8</th>
                      <th scope="col"> </th>
                      <th scope="col"> </th>
                      <th scope="col">9</th>
                      <th scope="col"> </th>
                      <th scope="col"> </th>
                      <th scope="col">10</th>
                      <th scope="col"> </th>
                      <th scope="col"> </th>
                      <th scope="col">11</th>
                      <th scope="col"> </th>
                    </tr>
                  </thead>
                  
                  <thead class="thead-dark">
                  <tr>
                      <th scope="col">Mark</th>
                      <th scope="col">1</th>
                      <th scope="col">2</th>
                      <th scope="col">3</th>
                      <th scope="col">1</th>
                      <th scope="col">2</th>
                      <th scope="col">3</th>
                      <th scope="col">1</th>
                      <th scope="col">2</th>
                      <th scope="col">3</th>
                      <th scope="col">1</th>
                      <th scope="col">2</th>
                      <th scope="col">3</th>
                  </tr>

                  <tr>
                      <th scope="col">Mathematics</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G8_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G8_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G8_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G9_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G9_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G9_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G10_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G10_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G10_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G11_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G11_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="maths_A_G11_T3"value="00" ></td>
                  </tr>

                  <tr>
                      <th scope="col">Sinhala</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G8_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G8_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G9_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G9_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G10_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G10_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G10_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G11_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G11_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="sinhala_A_G11_T3" value="00"></td>
                  </tr>

                  <tr>
                      <th scope="col">English</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G8_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G8_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G9_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G9_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G10_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G10_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G11_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G11_T2"value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="english_A_G11_T3"value="00" ></td>
                  </tr>

                  <tr>
                      <th scope="col">Science</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G8_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G8_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G9_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G9_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G9_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G10_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G10_T3"value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G11_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G11_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="science_A_G11_T3"value="00" ></td>
                  </tr>

                  <tr>
                      <th scope="col">History</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G8_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G8_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G9_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G9_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G10_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G10_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G11_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G11_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="history_A_G11_T3"value="00" ></td>
                  </tr>

                  <tr>
                      <th scope="col">Buddhism</th>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G8_T1" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G8_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G8_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G9_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G9_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G9_T3" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G10_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G10_T2"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G10_T3"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G11_T1"value="00" ></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G11_T2" value="00"></td>
                      <td scope="col"><input  class="form-control input-lg" type="number" name ="buddhism_A_G11_T3" value="00"></td>
                  </tr>    
              </table>            
            </div>
          </div>
        </div>	   
      </div>
      <br>


  
      <div class="row justify-content-around">
        <div class="card" style="width: 50rem;">
          <div class="card-body">
            <div class="text-center">
            
              <table class="table">
                <h3>Average Attendance</h3>         <!--Attendance Table   -->
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">Grade 8</th>
                    <th scope="col">Grade 9</th>
                    <th scope="col">Grade 10</th>
                    <th scope="col">Grade 11</th>
                  </tr>
                </thead>
                <tr>
                    <td scope="col"><input  class="form-control input-lg" type="number" name ="attendance_G8" value="00"></td>
                    <td scope="col"><input  class="form-control input-lg" type="number" name ="attendance_G9"value="00" ></td>
                    <td scope="col"><input  class="form-control input-lg" type="number" name ="attendance_G10" value="00"></td>
                    <td scope="col"><input  class="form-control input-lg" type="number" name ="attendance_G11"value="00" ></td>
                </tr>
              </table>
            </div> 
          </div>
        </div>
      </div>
      <br>


      <div class="row justify-content-around">
        <div class="card" style="width: 50rem;">
          <div class="card-body">
            <div class="text-center">
              <h3>No of Tution Classes</h3>                  <!--No of Tution Class   -->
              <div class="row justify-content-around">
                <div class="form-group">
                  <label for="maths">Mathematics</label>
                  <select class="form-control" id="mathsTution" name="mathsTution">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="sinhala">Sinhala</label>
                  <select class="form-control" id="sinhalaTution" name="sinhalaTution">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                        
                <div class="form-group">
                  <label for="english">English</label>
                  <select class="form-control" id="englishTution" name="englishTution">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
              </div>
                      
              <div class="row justify-content-around">
                <div class="form-group">
                  <label for="science">Science</label>
                  <select class="form-control" id="scienceTution" name="scienceTution">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
                      
                    
                <div class="form-group">
                  <label for="history">History</label>
                  <select class="form-control" id="historyTution" name="historyTution">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="buddhism">Buddhism</label>
                  <select class="form-control" id="buddhismTution" name="buddhismTution">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
        </div>	
      </div>
      <br>
      
      
      <div class="row justify-content-around">
        <div class="card" style="width: 50rem;">
          <div class="card-body">
            <div class="text-center">
              <div class="row justify-content-around">
                <div class="form-group">
                  <label for="parent">Parents' Contribution</label>
                  <select class="form-control" id="parentContri" name="parentContri">
                    <option>Poor</option>
                    <option>Good</option>
                    <option>Excelent</option>
                  </select>
                </div>
                
                <div class="form-group">
                  <label for="behaviour">Student's Behaviour</label>
                  <select class="form-control" id="behaviour" name="behaviour">
                    <option>Poor</option>
                    <option>Good</option>
                    <option>Excelent</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="extra">Extra Curricular Activities</label>
                  <select class="form-control" id="extra" name="extra">
                    <option>Yes</option>
                    <option>No</option>
                  </select>
                </div>
              </div>
            </div>
          </div> 
        </div>	   
      </div>
      <br>
      
      
      <div class="row justify-content-around">
        <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Predict Results" />
      </div>
    </form>
    <br>
  </body>
</html>







