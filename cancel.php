<?php
include('Include/connect.php');
if(isset($_GET['deleteid']))
{
    $id=$_GET['deleteid'];
    $sql="Update ordertable  set status='cancelled' where Order_id=$id";
    $result=mysqli_query($con,$sql);
    if($result)
    {
        echo"<script> alert('Your Order cancelled Successfully')
        window.location.href='Check_Order_Status.php';
      </script>";
    
    }
    else{
        die(mysqli_error($con));
    }
}
?>