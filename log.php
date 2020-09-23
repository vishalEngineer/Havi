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
                $querytwo = "select username,password from signupdata where username='$username' and password!='$password'";
                //echo $querytwo;
                $selq = mysqli_query($con,$querytwo);
                if(mysqli_num_rows($selq)!=0)
                {
                    //echo "Password Mismatch";
                    echo "<script>alert('invalid credentials')</script>";  

                }
                else{
                    echo "not registered";
                    header('Location:signup.html');
                }
                
            }
        }  
      else{
          echo "query not done";
      }
    }
?>