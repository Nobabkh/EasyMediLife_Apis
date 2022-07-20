<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$symptoms = $_POST["symptoms"];
$hospital = $_POST["hospital"];
$title = $_POST["title"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("INSERT INTO specialist (name, symptoms, hospital, title) VALUES ('$name', '$symptoms', '$hospital', '$title');");
}
else
{
    echo "false";
}
?>