<?php include("Header.php");  

?>
<?php

include('Include/connect.php');


if(isset($_POST['click']))
{
  $Person_name = $_POST['text1'];
  $Mobile= $_POST['text2'];
  $Address = $_POST['text3'];
  $amount=$_POST['text4'];
  $_SESSION['mob']=$_POST['text2'];
  $_SESSION['address']=$_POST['text3'];
  $_SESSION['name']=$_POST['text1'];
  $_SESSION['amount']=$_POST['text4'];
  $insert_query = "insert into ordertable(Person_name, Address, Mobile_no, Total_amount,Status)values('$Person_name','$Address','$Mobile','$amount','Confirmed')";

$show = mysqli_query($con,$insert_query);
if($show)
{
    echo "<script>alert ('Order Saved Successfully')
    window.open('Payment.php','_self');
    </script>";
  
}
}


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MY CART</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>  
</head>
<style>
  *
        {
            font-family: system-ui;
        }
</style>
  <body>
<div class="container">
    <div class="row">
    <div class="col-lg-12 text-center border rounded bg-light my-5">
<h1>Cart </h1>

    </div>
    <div class="col-lg-8">
    <table class="table">
  <thead class="text-center">
    <tr>
      <th scope="col">Serial Number</th>
      <th scope="col">Item Name</th>
      <th scope="col">Price</th>
      <th scope="col">Quantity</th>
      <th scope="col">Total</th>
      <th scope="col"></th>

    </tr>
  </thead>
  <tbody class="text-center">
    <?php
    $total=0;
    if(isset($_SESSION['cart']))
    {
foreach ($_SESSION['cart'] as $key => $value) 
{
   $sr= $key+1;
    
   // print_r($value);
   echo"
    <tr>
      <td>$sr</td>
      <td>$value[Item_Name]</td>
      <td>$value[Price]<input type='hidden' class='iprice' value='$value[Price]'></td>
    <td>
   
      <input type='number' class='iquantity' onchange='subtotal()'  value='$value[Quantity]' min='1' max='10'>
    </td>
    <td class='itotal'>0</td>
    <td>
    <form action='Manage_Card.php' method='POST'>
    <button name='Remove_Item' class='btn btn-sm btn-outline-danger'>Remove </button>
    <input type='hidden' name='Item_Name' value='$value[Item_Name]'>
    </form>
    </tr>
    ";
}
}
 ?>  
  
  </tbody>
</table>
    </div>
    <div class="col-lg-3">
        <div class="border bg-light rounded p-4">

    <h5>Grand Total:</h5>
    <h5 class="text-right" id="gtotal"></h5>
    <br>
     <?php
    if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
    {

    
    ?>

    <form action="" method="POST">
    <div class="mb-3">
       <label>Full Name</label>
       <input type="text" name="text1" class="form-control" required>
</div>
<div class="mb-3">
       <label>Phone Number</label>
       <input type="tel" maxlength="10" name="text2" class="form-control" required>
</div>
<div class="mb-3">
       <label>Address</label>
       <input type="text" name="text3" class="form-control" required>
</div>
<div class="mb-3">
       <label>Amount</label>
       <input type="text"  name="text4" id="amount" class="form-control" required readonly>
</div>
<!-- <div class="form-check">
  <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
  <label class="form-check-label" for="flexRadioDefault2">
     Cash On Delivery 
  </label>
</div> -->
<br>
        <button class="btn btn-dark btn-block" name="click">Make Purchase</button> 
</form>
  <?php
    }
    ?>
</div>
    </div>
</div>   
    <script>
      var gt=0;

      var  iprice=document.getElementsByClassName('iprice');
      var iquantity=document.getElementsByClassName('iquantity');
      var itotal=document.getElementsByClassName('itotal');
      var gtotal=document.getElementById('gtotal');
    
    
      function subtotal()
      {
        gt=0; 
        

        for(i=0;i<iprice.length;i++)
        {

        
         itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
          gt=gt+(iprice[i].value)*(iquantity[i].value);
          
        }
        
        gtotal.innerText=gt;
        document.getElementById("amount").value=gt;
      
        
      }
      subtotal();
    
      </script>
      
  </body>
</html>