<?php
$db_host="localhost";
$db_name="portfolio";
$db_pass="3190&wise";
$db_user="Bik";

$conn=mysqli_connect($db_host,$db_user,$db_pass,$db_name);

if($conn){
    //echo"succesfully";

}else{
    echo "errroorr";
}

?>
