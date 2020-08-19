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
    <body style="width:auto; overflow-x: hidden">
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
        <h4>Please Enter Student's Details.</h4>
      </div>


      <div class="row justify-content-around">
			  <div class="card" style="width: 28rem;">
				  <div class="card-body">
					  <div class="text-center">

						  <form method="POST" action="actualResults.php">
							  <div class="form-group">
								  <label for="studentName">Name</label>
								  <input  class="form-control" id="studentName" name="studentName" >
							  </div>

                <div class="form-group">
                  <label for="studentSchool">School</label>
                  <input class="form-control" id="studentSchool" name="studentSchool" >
                </div>
                              
                <input class="btn btn-primary btn-lg" type="submit" name="submit" value="Register" /> 
              </form>					
						  <br>
						
					  </div>
				  </div>
			  </div>	
		  </div>
    </body>
</html>


