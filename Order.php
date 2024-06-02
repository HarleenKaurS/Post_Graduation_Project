<?php
include('Include/connect.php');
if(isset($_POST['click']))
{
  $personname= $_POST['text1'];
  $address= $_POST['text2'];
  $mobile= $_POST['text3'];
  $amount= $_POST['text4'];
  $insert_query = "insert into ordertable(Person_name, Address, Mobile_no, Total_amount,Status)
  values ('$personname','$address','$mobile','$amount','Confirmed')";
  if($insert_query)
  {
    echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo"<script>alert ('order already added successfully')
    </script>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ORDER</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
    .container
    {
        border:2px solid silver;
        height:80vh;
        width:100vw;
        margin-top:3%;
    }
    .mb-2
    {
        height:80vh;
        width:100%;
        text-align: center;
        font-size:large;
    }
    h2
    {
        font-weight: 600;
        text-align:center;
    }
    .fs-5
    {
        border:2px solid silver;
        height:5vh;
        width:30%;
    }
    .m-4
    {
        border:2px solid black;
        height:1vh;
    }
    .input-group
    {
        display: flex;
        margin-top:4%;
        justify-content:center;
    }
    .input-button
    {
        display: flex;
        justify-content: center;
        margin:2%;
    }
</style>
</head>
<form action="" method="post" class="mb-2">
<body>
<div class="container">
        <h2>ORDER</h2>
        <div class="input-group w-90">
            <label for="text" type="textbox" class="fs-4">Person Name</label>
            <span class="m-4"></span>
            <input type="text" class="text w-25" name='text1'>
        </div>
        <div class="input-group w-90">
            <label for="text" type="textbox" class="fs-4">Address</label>
            <span class="m-4"></span>
            <input type="text" class="text w-25" name='text2'>
        </div>
        <div class="input-group w-90">
            <label for="text" type="textbox" class="fs-4">Mobile Number</label>
            <span class="m-4"></span>
            <input type="tel" maxlength="10" class="text w-25" name='text2'>
        </div>
        <div class="input-group w-90">
            <label for="text" type="textbox" class="fs-4">Amount</label>
            <span class="m-4"></span>
            <input type="text" class="text w-25" name='text3'>
        </div>
        <div class="input-button">
            <button type="submit" name="click" class="btn btn-outline-secondary">ORDER</button>
        </div>
    </div>
</div>
</div>
</form>
</body>
</html>