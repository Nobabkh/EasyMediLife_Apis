<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$dist = $_POST["district"];
$subdist = $_POST["subdist"];
$hospital = $_POST["hospital"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM location WHERE district = '$dist' AND sub_dist = '$subdist';");
    if(mysqli_num_rows($res) > 0)
    {
        $res1 = $con->query("INSERT INTO location SET hospital = '$hospital' WHERE ");
    }
    else
    {

    }
   
}
else
{
    echo "failed";
}
?>