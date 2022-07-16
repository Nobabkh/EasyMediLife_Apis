<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$mail = $_POST["email"];
$password = $_POST["password"];
$dist = $_POST["dist"];
$subdist = $_POST["sub_dist"];
$addres = $_POST["address"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM user_info WHERE email = '$mail' AND pass = '$password';");
    if(mysqli_num_rows($res) > 0)
    {
        $res = $con->query("UPDATE user_info SET district = '$dist', sub_dis = '$subdist', address = '$addres' WHERE email = '$mail' AND pass = '$password';");
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