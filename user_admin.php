<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$mail = $_POST["email"];
$password = $_POST["password"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM user_info WHERE email = '$mail' AND pass = '$password' AND type = 1050;");
    if(mysqli_num_rows($res) > 0)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}
else
{
    echo "false";
}
?>