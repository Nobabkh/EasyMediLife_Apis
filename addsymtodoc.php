<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$doctor = $_POST["doctor"];
$name = $_POST["symptom"];
$description = $_POST["description"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM specialist WHERE name = '$doctor' AND symptoms IS NULL;");
    if($res->num_rows < 1)
    {
        $res1 = $con->query("UPDATE specialist SET symptoms = '$name' WHERE name = '$doctor';");
        $res2 = $con->query("INSERT INTO symptoms (name, description) VALUES ('$name', '$description');");
    }
    else{
        $res1 = $con->query("INSERT INTO specialist (name, symptoms) VALUES ('$doctor', '$name');");
        $res2 = $con->query("INSERT INTO symptoms (name, description) VALUES ('$name', '$description');");
    }
}
else
{
    echo "false";
}
?>