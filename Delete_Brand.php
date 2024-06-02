<?php
include('../Include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="delete from brandtable where Brand_id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"Delete Successfully";
    }
    else{
        die(mysqli_error($con));
    }
}
?>