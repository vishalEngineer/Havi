<?php
require('config.php');
//require('sign.php');


if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

else
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    // $query = "select username,password from havi.signupdata where username like 'admin' and password like 'admin' ";
    // echo $query;
    $result = mysqli_query($con,"SELECT username FROM signupdata");
    if($username == 'admin' && $password == 'admin' )
    {
        if(mysqli_num_rows($result) > 0)
        {
            echo "<table border='5'>
            <p><b>List of users</b></p>
            <tr>
            <th>List of all the users</th>
            </tr>";

            while($row = mysqli_fetch_array($result))
            {
             echo "<tr>";
            echo "<td>" . $row['username'] . "</td>";
            echo "</tr>";
             }
            echo "</table>";
            
        }
        else
        {
            echo "No users to display";
    
        }
    } 
    else
    {
        echo "You don't have permissions to access admin page";
    } 
  
}


mysqli_close($con);
?>