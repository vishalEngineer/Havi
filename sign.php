<?php
    require('config.php');
    if(mysqli_connect_errno())
    {
        die ('Not Connected'.mysqli_connect_errno());
    }
    else{
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $city = $_POST['city'];
        $date = $_POST['date'];
        $query = "insert into havi.signupdata(username,email,password,city,date) "."values('$username','$email','$password','$city','$date')";
      echo $query;
      if(mysqli_query($con,$query))
      {
          header('Location:login.html');
      }  
      else{
          echo "Not inserted";
      }
    }
?>