<?php
session_start();

echo "hi".$_SESSION['st_username'];
if (isset($_SESSION['st_username']))
{
    header("location:login.php");
}

 

echo "<a href='logout.php'>logout</a> |";
echo "<a href ='changepassword.php'>change password</a> |";
echo "<a href='forgotpassword.php'>forgot password</a>";



?>

