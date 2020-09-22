<?php
    require('config.php');
    if(mysqli_connect_errno())
    {
        die ('Not Connected'.mysqli_connect_errno());
    }
    else{
        $sample = $_POST['sample'];
        $query = "insert into textbox(sample) "."values('$sample')";
   //   echo $query;
      if(mysqli_query($con,$query))
      {
          header('Location:admin.php');
      }  
      else{
          echo "Not inserted";
      }
    }
?>