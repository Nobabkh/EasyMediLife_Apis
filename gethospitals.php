<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$dist = $_POST["district"];
$subdist = $_POST["subdist"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM location WHERE district = '$dist' AND sub_dist = '$subdist';");
    while($row = $res->fetch_assoc())
    {
        echo $row["hospital"];
        echo "\n";
    }
   
}
else
{
   
}
?>