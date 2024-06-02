<?php
session_start();
?>
<?php

include('Include/connect.php');
if(isset($_POST['click']))
{

  $name= $_POST['text1'];
  $Cardnumber= $_POST['text2'];
  $Card_type = $_POST['Card_type'];
  $Expdate = $_POST['text3'];
  $CVV = $_POST['text4'];
  $amount = $_POST['text5'];
  $insert_query = "insert into paymenttable(Name,Card_Number,Card_type,Exp_date,CVV,Total_Amount)values ('$name','$Cardnumber','$Card_type','$Expdate','$CVV','$amount')";
  if($insert_query)

  {
    // echo"<script> alert('found')</script>";
  }
  $result = mysqli_query($con,$insert_query);
  if($result) 
  {  
    echo "<script>alert ('Thanks for the Payment!!!!.Your Order Process is Completed');
    window.open('bill.php','_self');
    </script>";
  }

}
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PAYMENT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
        *
        {
            font-family: system-ui;
        }
        body
        {
            background-image:url("Images/bg3.jpg");
            background-size:100% 100%;
            height:100vh;
        }
        table,tr,td
        {
            border:2px solid whitesmoke;
            /* border-collapse: collapse; */
            padding:15px;
            color:whitesmoke;
            background-color:rgba(0,0,0,.99);
            margin-top:50px;
            opacity:.8;
        }
        h1
        {
            text-align:center;
            color:whitesmoke;
            margin-top:50px;
        }
        .container
        {
            width: 100%;
            height: 75vh;
            display:flex;
            justify-content:center;
            align-items:center;
            flex-direction:column;
        }
        td
        {
            text-align:center;
            font-weight:600;
            color:whitesmoke;
        }
        input, select
        {
            width: 80%;
            height: 4vh;
        }
        button
        {
            padding: 5px;
            font-size: 15px;
            /* background-color:transparent; */
            /* color: black; */
            border: none;
            outline: 2px solid black;
            cursor: pointer;
        }
        .btn:hover
        {
            background-color:transparent;
            color:whitesmoke;
        }
    </style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <div class="container">
    <h1>PAYMENT</h1>
    <table>
       
        <tr>
            <td>Name</td>
            <td><input type="text" name="text1" value="<?php echo  $_SESSION['name']?>"></td>
        </tr>
        <tr>
            <td>Card Number</td>
            <td><input type="tel" maxlength="16" name="text2" required></td>
        </tr>
        <tr>
            <td>Card Type</td>
            <td><select name="Card_type" id="inputState" class="form-select">
                <option selected> Choose...</option>
              <option>Credit Card</option>
              <option>Debit Card</option>
              <option>Master Card</option>
            
            </select></td>
        </tr>
        <tr>
            <td>Expire Date</td>
            <td>
              <input type="date" name="text3" id="">
        </tr>
        <tr>
            <td>CVV</td>
            <td><input type="password" maxlength="3" name="text4"></td>
        </tr>
        <tr>
            <td>Total Amount</td>
            <td><input type="text" name="text5" value="<?php echo   $_SESSION["amount"]?>"></td>
        </tr>
        <tr>
            <td></td>
            <td><button name="click" class="btn btn-outline-light">MAKE PAYMENT</button>
            </td>
        </tr>

    </table>
    </div>
    </form>
</body>
</html>