<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT name FROM district;");
    while($row = $res->fetch_assoc())
    {
        echo $row["name"];
        echo "\n";
    }
}
else
{
    
}
?>