<?php
require('config.php');
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT username FROM signupdata");


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

mysqli_close($con);
?>