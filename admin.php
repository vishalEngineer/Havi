<?php
require('config.php');
if (mysqli_connect_errno()) {
    die('Not Connected' . mysqli_connect_errno());
} else {
    $query = "select * from textbox";
    if ($result = mysqli_query($con, $query)) {
        $data =  mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        echo "Not inserted";
    }
}


//<?php
//require('config.php');

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Page</title>
</head>
<body>
    <form action="add.php" method="post">
        <input type="text" name="sample">
        <button type="submit" >Enter</button>
    </form>
    <table border="5">
        
        <thead>
        <tr><td><b>S.no</b></td></tr>
            <tr><td><b>User</b></td></tr>
        </thead>
        <tbody>
            
            <?php if (count($data) > 0) : ?>
                        <?php for ($i = 0; $i < count($data); $i++) : ?>
                        <tr>
                            <td><?php echo $i+1;?></td>
                        </tr>
                        <tr>

                            <td>
                            <p><strong><?php echo $data[$i]['sample']; ?></strong></p>
                            </td>
                        </tr>
                        <?php endfor; ?>
                    <?php else : ?>
                        <p>No Data Found!</p>
                    <?php endif; ?>
        </tbody>
    </table>
</body>
</html>