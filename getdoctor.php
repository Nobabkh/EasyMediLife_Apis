<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$hospital = $_POST["hospital"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT name FROM specialist WHERE hospital = '$hospital';");
    while($row1 = $res1->fetch_assoc())
    {            
        echo $row1["name"];
        echo "\n";
    }
}
else
{
    echo "false";
}
?>