<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$dist = $_POST["dist"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM district WHERE name = '$dist';");
    if(mysqli_num_rows($res) > 0)
    {
        echo "Failed";
    }
    else
    {
        try{
            $res = $con->query("INSERT INTO district (name) VALUES ('$dist')");
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