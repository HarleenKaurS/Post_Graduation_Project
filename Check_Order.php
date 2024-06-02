<?php
include('../Include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CHECK ORDER</title>
    <style>
      *
        {
          font-family: system-ui;
        }
        h1{
          color:black;
          margin:50px;
        }
       
      .container
      {
        
        display: flex;
        justify-content:center;
        align-items:center;
        flex-direction:column;
      }
      table
      {
        border:2px solid black;
        height:100vh;
        width:100%;
        text-align:center;
      }
      table thead tr th, tr th, td
      {
        border:2px solid black;
      }
      button a
      {
        text-decoration:none;
        color:white;
      }
      .del
      {
        border:none;
        padding:.7rem;
        color:black;
        font-size:.9rem;
        border-radius:30px;
        position:relative;
        overflow:hidden;
        outline:1px solid black;
        background:transparent;
      }
      .del:hover
      {
        outline:none;
      }
      .del a
      {
        z-index: 100;
        position:relative;
        color:black;
      }
      .del:hover a
      {
        z-index: 99;
        color:white; 
      }
      .del::before
      {
        position:absolute;
        content:'';
        top:100%;
        left:0;
        width: 100%;
        height: 100%;
        background-color:black;
        border-radius:30px;
        transition: .3s ease-in;
      }
      .del:hover::before
      {
        top:0%;
        transition:.2s ease-out;
      }
    </style>
</head>
<body>
    
<div class="container">
<h1>CHECK ORDER</h1>
  
    <table>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">NAME</th>
      <th scope="col">ADDRESS</th>
      <th scope="col">MOBILE NUMBER</th>
      <th scope="col">AMOUNT</th>
      <th scope="col">STATUS</th>
      <th scope="col">OPERATIONS</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="Select * from ordertable";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['Order_id'];
    $name=$row['Person_name'];
    $address=$row['Address'];
    $mobile=$row['Mobile_no'];
    $Price=$row['Total_amount'];
    $status=$row['Status'];
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$address.'</td>
    <td>'.$mobile.'</td>
    <td>'.$Price.'</td>
    <td>'.$status.'</td>
    <td>
    <button class="del"><a href="Delete_Order.php?deleteid='.$id.'">Delete</a></button>
</td>
  </tr>';
    
   }
}
  ?>


  </tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>