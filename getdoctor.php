<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$name = $_POST["name"];
$dist = $_POST["district"];
$subdist = $_POST["subdist"];
$symptoms = $_POST["symptoms"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT hospital FROM location WHERE district = '$dist' AND sub_dist = '$subdist';");
    while($row = $res->fetch_assoc())
    {
        $hosp = $row["hospital"];
        $res1 = $con->query("SELECT name FROM specialist WHERE hospital = '$hosp'");
        while($row1 = $res1->fetch_assoc())
        {
            echo $row1["name"];
            echo "\n";
        }
    }
}
else
{
    echo "false";
}
?>