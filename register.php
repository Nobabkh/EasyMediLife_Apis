<?php
$dp = "firstsal_EasyMediLife";
$user = $_POST["user"];
$pass = $_POST["pass"];
$mail = $_POST["email"];
$name = $_POST["name"];
$phone = $_POST["phone"];
$password = $_POST["password"];
$host = "localhost";
$con = mysqli_connect($host, $user, $pass, $dp);
if($con)
{
    $res = $con->query("SELECT * FROM user_info WHERE email = '$mail' AND pass = '$password';");
    if(mysqli_num_rows($res) > 1)
    {
        echo "false";
    }
    else
    {
        $res = $con->query("INSERT INTO user_info (name, phone, email, pass) VALUES ('$name', '$phone', '$mail', '$password');");
        echo "true";
    }
}
else
{
    echo "false";
}
?>