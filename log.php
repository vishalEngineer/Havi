<?php 
require('config.php');
if(mysqli_connect_errno())
    {
        die ('Not Connected'.mysqli_connect_errno());
    }
    else{
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = "select username,password from signupdata where username='$username' and password='$password'";
        if($result = mysqli_query($con,$query))
        {
            if(mysqli_num_rows($result) > 0)
            {
                header('Location:admin.php');
            }
            else
            {
                echo "not registered";
            header('Location:signup.html');
            }
        }  
      else{
          echo "query not done";
      }
    }
?>