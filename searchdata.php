<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<style>
    body
    {
        background-image:url("Images/bg1.jpg");
        background-size:100% 100%;
        height:100vh;
    }
    .container{
margin-top: 8vw;
    }
.red{
    font-style: italic;
}
</style>
<body>
<?php
include('Include/connect.php');
$data = $_GET['data'];
$sql = "SELECT * FROM ordertable WHERE Order_id = $data";
$result = mysqli_query($con, $sql);
if($result && mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);
    echo '<div class="container">
    <div class="jumbotron">
      <h1 class="display-4 text-center text-dark">Welcome '.$row['Person_name'].'</h1>
      <div style="display:flex;flex-direction:row;justify-content:space-between;align-item:center;">
      <p class="red text-danger">Your Order id is:  '.$row['Order_id'].'</p>
      <p class=" text-danger"style="margin-left:-5%;">Your Status is:'.$row['Status'].'</p>
      <button class="btn btn-dark"><a href="cancel.php?deleteid='.$data.'" class="text-light">Cancel Your Booking</a>
      </button>
      </div>
      
     
     
      <hr class="my-4">
      <p class="lead"></p>
      <a class="btn btn-dark btn-lg" href="Check_Order_Status.php" role="button"> Back</a>
    </div>
    </div>';
}
?>

</body>
</html>