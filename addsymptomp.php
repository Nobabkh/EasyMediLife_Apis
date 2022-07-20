<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$name = ["symptom"];
$description = ["description"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("INSERT INTO symptoms (name, description) VALUES ('$name', '$description');");
}
else
{
    echo "false";
}
?>