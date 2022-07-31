<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$name = $_POST["doctor"];
$hospital = $_POST["hospital"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $ress = $con->query("SELECT * FROM specialist WHERE name = '$name' AND hospital = '$hospital'");
    if($ress->num_rows < 1)
    {
        $res = $con->query("INSERT INTO specialist (name, hospital) VALUES ('$name', '$hospital');");
        echo "successfull";
    }
    else
    {
        echo "failed";
    }

}
else
{
    echo "false";
}
?>