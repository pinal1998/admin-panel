<?php

$connection=mysqli_connect("localhost","root","","visitoradmin");


    $id=$_GET['id'];
    $selectquery=mysqli_query($connection,"select is_active from tbl_user where st_id='{$id}'") or die (mysqli_error($connection));
    $row =mysqli_fetch_array($selectquery);
    
    if ($row['is_active'] ==1){
       mysqli_query($connection,"update tbl_user set is_active='0' where st_id='{$id}") or die (mysqli_error($connection)); 
       header("location:display1.php");
    }else{
       mysqli_query($connection,"update tbl_user set is_active='1' where st_id='{$id}") or die (mysqli_error($connection)); 
       header("location:display1.php");

    }          



$query=mysqli_query($connection,"select * from tbl_user") or die (mysqli_error($connection));


?>

