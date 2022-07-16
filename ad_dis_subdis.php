<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$dist = $_POST["dist"];
$subdis = $_POST["sub_dis"];
$host = "localhost";

$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM location WHERE district = '$dist' AND sub_dist = '$subdis';");
    if(mysqli_num_rows($res) > 0)
    {
        echo "Failed";
    }
    else
    {
        try{
            $res = $con->query("INSERT INTO location (district, sub_dist) VALUES ('$dist', '$subdis');");
            echo "Successfull";
        }
        catch(mysqli_sql_exception $e)
        {
            echo $e;
        }
    }
   
}
else
{
    echo "failed";
}
?>