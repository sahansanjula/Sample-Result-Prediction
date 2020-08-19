<?php
  include('connect.php');


  session_start();
  if(!isset($_SESSION['uname'])){
    echo "<script>location.href='signin_form.html'</script>";
  }
  else{
    $uname=$_SESSION['uname'];   
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
  </head>
  <body style="width:100%; overflow-x: hidden">
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: #355486;" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="homepage.html"> Home </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">Log out</a>
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
            ?>
          
          ...!!! </h1>
        </div>
      </div>
      <h2>Predicted Results</h2>
      <br>
    </div>

    <div class="row justify-content-around">
      <div class="card" style="width: 30rem;">
        <div class="card-body">
          <div class="text-center">
      
            <table class="table">
              <tr>
                <td scope="col">Mathematics</td>
                <td scope="col">
                  <?php
                      echo ($_SESSION["finalMathsResult"]);
                  ?>
                </td>
                  <?php
                    if($_SESSION["finalMathsResult"]=='C' || $_SESSION["finalMathsResult"]=='S' || $_SESSION["finalMathsResult"]=='F'){
                      echo '<td scope="col"><a href="mathsImprove.html"> Improvements </a></t>';
                    }
                    else{
                        $_SESSION['mathsResponse']=null;                      
                    }
                  ?>
              </tr>
              <tr>
                <td scope="col">Sinhala</td>
                <td scope="col">
                  <?php
                      echo ($_SESSION["finalSinhalaResult"]);
                  ?>
                </td>
                <?php
                  if($_SESSION["finalSinhalaResult"]=='C' || $_SESSION["finalSinhalaResult"]=='S' || $_SESSION["finalSinhalaResult"]=='F'){
                    echo '<td scope="col"><a href="sinhalaImprove.html"> Improvements </a></td>';
                  }
                  else{                 
                      $_SESSION['sinhalaResponse']=null;                  
                  }
                ?>
                </tr>
                <tr>
                  <td scope="col">English</td>
                  <td scope="col">
                    <?php
                        echo ($_SESSION["finalEnglishResult"]);
                    ?>
                  </td>
                  <?php
                    if($_SESSION["finalEnglishResult"]=='C' || $_SESSION["finalEnglishResult"]=='S' || $_SESSION["finalEnglishResult"]=='F'){
                      echo '<td scope="col"><a href="englishImprove.html"> Improvements </a></td>';
                    }
                    else{                   
                        $_SESSION['englishResponse']=null;                    
                    }
                  ?>
                </tr>
                <tr>
                  <td scope="col">Science</td>
                  <td scope="col">
                    <?php
                        echo ($_SESSION["finalScienceResult"]);
                    ?>
                  </td>
                  <?php
                    if($_SESSION["finalScienceResult"]=='C' || $_SESSION["finalScienceResult"]=='S' || $_SESSION["finalScienceResult"]=='F'){
                      echo '<td scope="col"><a href="scienceImprove.html"> Improvements </a></td>';
                    }
                    else{                  
                        $_SESSION['scienceResponse']=null;                     
                    }
                  ?> 
                </tr>
                <tr>
                  <td scope="col">History</th>
                  <td scope="col">
                    <?php
                        echo ($_SESSION["finalHistoryResult"]);
                    ?>
                  </td>
                  <?php
                    if($_SESSION["finalHistoryResult"]=='C' || $_SESSION["finalHistoryResult"]=='S' || $_SESSION["finalHistoryResult"]=='F'){
                      echo '<td scope="col"><a href="historyImprove.html"> Improvements </a></td>';
                    }
                    else{                    
                        $_SESSION['historyResponse']=null;                    
                    }   
                  ?>
                      
                </tr>
                <tr>
                  <td scope="col">Buddhism</td>
                  <td scope="col">
                    <?php
                        echo ($_SESSION["finalBuddhismResult"]);
                    ?>
                  </td>
                  <?php
                    if($_SESSION["finalBuddhismResult"]=='C' || $_SESSION["finalBuddhismResult"]=='S' || $_SESSION["finalBuddhismResult"]=='F'){
                      echo '<td scope="col"><a href="buddhismImprove.html"> Improvements </a></td>';
                    }
                    else{                    
                        $_SESSION['buddhismResponse']=null;                     
                    }
                  ?>  
                </tr>
  
              </table>
              <a href="finalImprove.php" class="btn btn-info" role="button">Show All Improvements</a>
            </div>           
            <div class="row justify-content-around">
              <a href="pdf.php" class="btn btn-info" role="button">Create a PDF </a>
            </div>
          </div>
        </div>
      </div> 
      <br>
  </body>
</html>
