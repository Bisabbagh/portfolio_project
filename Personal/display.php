//just for trait
 

<?php
include "connection.php";
$sql="SELECT * FROM 'users' WHERE 'users'. 'id'=1";
$result= mysqli_query($conn, $sql);
$data= mysqli_fetch_assoc($result);
if($result){


}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> <?php 
    echo $data['name'];
    ?></h1>
    
</body>
</html>