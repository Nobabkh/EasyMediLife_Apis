<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$name = $_POST["symptom"];
$doctor = $_POST["doctor"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM specialist WHERE name = '$doctor' AND symptoms = '$name'");
    if($res->num_rows < 1)
    {
        $res1 = $con->query("UPDATE specialist SET symptoms = '$name' WHERE name = '$doctor'");
    }
    else{
        $res2 = $con->query("INSERT INTO specialist (name, symptoms) VALUES ('$doctor', '$name')");
    }
}
else
{
    echo "false";
}
?>