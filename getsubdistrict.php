<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$dist = $_POST["dist"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT sub_dist FROM location WHERE district = '$dist';");
    while($row = $res->fetch_assoc())
    {
        echo $row["sub_dist"];
        echo "\n";
    }
}
else
{
    
}
?>