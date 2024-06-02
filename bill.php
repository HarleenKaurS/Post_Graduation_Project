<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thanks Page</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- fafa icon cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    body
    {
        background-image:url("Images/bg1.jpg");
        background-size:100% 100%;
    }
    table tr td
    {
        height:5vh;
        width:50%;
        text-align: center;
    }
    input
    {
        background-color:transparent;
        border:none;
        text-align: center;
    }
    .button a
    {
        margin-left:30px;
    }
</style>
<body style="overflow: hidden;">
    <div class="container" style="height: 100vh;">
        <form action="home.php" method="post">
            <div class="row d-flex align-items-center justify-content-center " style="height: 50vh; margin-top:12vw;">
                <div class="col-md-12  d-flex bg-light align-items-center flex-column shadow-lg" style="height: 60vh; width:50%; background-color:transparent;">
                    <h1 class="d-1 mt-2">Thanks for Your Order.<br>Your Order is Shipped.<br>Order Details are</h1>
                    <i class="fa fa-arrow-down" style="font-size:40px; margin-bottom:10px;"></i>
                    <table>
                        <tr>
                            <td>Person Name:</td>
                            <td><input type="text" value="<?php echo  $_SESSION['name']?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Mobile Number:</td>
                            <td><input type="text" value="<?php echo  $_SESSION['mob']?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Address:</td>
                            <td><input type="text" value="<?php echo  $_SESSION['address']?>" readonly></td>
                        </tr>
                        <tr>
                            <td>Total Amount:</td>
                            <td><input type="text" value="<?php echo $_SESSION['amount']?>" readonly></td>
                        </tr>
                    </table>
                    <div class="button">
                        <a class="btn btn-outline-dark mt-2" href="home.php">Home</a>
                        <a class="btn btn-outline-dark mt-2" href="Check_Order_Status.php">Check Order Status</a>
                   </div>
                </div>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>