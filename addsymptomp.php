<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$name = $_POST["symptom"];
$description = $_POST["description"];
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