<?php
    include('connect.php');

    $fname_val = $_POST['firstname'];
    $lname_val = $_POST['lastname'];
    $school_val = $_POST['school'];
    $username_val = $_POST['username'];
    $password_val = $_POST['password'];

    $checkUsernameQuery="SELECT Username FROM teacher_table WHERE username='".$username_val."'"; 
    $checkUsernameResult = mysqli_query($link, $checkUsernameQuery); 
    if(!mysqli_query($link,$checkUsernameQuery)){
        die('Error:'.mysqli_error($link));
    }

    if (mysqli_num_rows($checkUsernameResult) > 0) {  //check username existence
        echo "<script>alert('This username already exists.')</script>";
        echo "<script>location.href='signup_form.html'</script>";
    }
    
    else{
        //check all fields are filled
        if(($fname_val ==null)||($lname_val==null)||($school_val==null)||($username_val==null)||($password_val ==null)){
            echo "<script>alert('All fields are required')</script>";
            echo "<script>location.href='signup_form.html'</script>";
        }

        //successfully added
        $addQuery = "INSERT INTO teacher_table (First_Name, Last_Name, School, Username, Password) VALUES ('$fname_val','$lname_val','$school_val','$username_val','$password_val')";
        if(!mysqli_query($link,$addQuery)){
            die('Error:'.mysqli_error($link));
        }
        echo "<script>alert('Sign up successfull.Please sign in using your username and password')</script>";
        include ('signin_form.html');
    }

?>
