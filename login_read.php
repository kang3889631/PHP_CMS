<?php include "db.php";

$query = "SELECT * FROM users";
$result=mysqli_query($connect,$query);
if(!result){
    die('Query failed' . mysqli_error());
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="col-sm-6">
            <?php 
                while($row = mysqli_fetch_assoc($result)){
                    ?>
                    <pre>
                    <?php
                    print_r($row);
                    ?>
                    </pre>
                    <?php
                }
            ?>
        </div>
    </div>

</body>
</html>