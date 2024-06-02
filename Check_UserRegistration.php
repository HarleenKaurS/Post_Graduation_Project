<?php
include('Include/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>CHECK USER REGISTRATION</title>
    <style>
      *
        {
          font-family: system-ui;
        }
        h1{
          color:green;
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
       
        display:flex;
        justify-content:space-evenly;
        align-items:center;
        flex-direction:column;
      }
 
      
      button a{
        text-decoration:none;
        color:white;
      }
     
      .table>:not(caption)>> {
    color: var(--bs-table-color-state,var(--bs-table-color-type,var(--bs-table-color)));
    background-color: var(--bs-table-bg);
    border-bottom-width: var(--bs-border-width);
    box-shadow: inset 0 0 0 9999px var(--bs-table-bg-state,var(--bs-table-bg-type,var(--bs-table-accent-bg)));
    padding: 1.5rem 3.5rem;
}
 .up
{
  border:none;
  color:black;
  padding:.7rem;
  font-size:.9rem;
  border-radius:30px;
  position:relative;
  overflow:hidden;
  outline:1px solid green;
  background:transparent;
}
.up:hover
{
  outline:none;
}
.up a
{
  z-index: 100;
  position:relative;
  color:#004500;
}
.up:hover a{
  z-index: 99;
  color:white;
  
}


.up::before
{
 position:absolute;
 content:'';
 top:100%;
 left:0;
 width: 100%;
 height: 100%;
 background-color:green;
 border-radius:30px;
 transition: .3s ease-in;
}
.up:hover::before
{
  top:0%;
  transition:.2s ease-out;
}

.del
{
  border:none;
  color:black;
  padding:.7rem;
  font-size:.9rem;
  border-radius:30px;
  position:relative;
  overflow:hidden;
  outline:1px solid #770101;;
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
  color:#770101;
}
.del:hover a{
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
 background-color:red;
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
<h1>CHECK USER REGISTRATION</h1>
  
    <table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">USER NAME</th>
      <th scope="col">PASSWORD</th>
      <th scope="col">MOBILE NUMBER</th>
      <th scope="col">EMAIL</th>
    </tr>
  </thead>
  <tbody>

    <?php
    $sql="Select * from userregistrationtable";
    $result=mysqli_query($con,$sql);
    if($result)
    {
   while( $row=mysqli_fetch_assoc($result))
   {
    
    $id=$row['ID'];
    $name=$row['Name'];
    $password=$row['Password'];
    $mobile=$row['Mobile_Number'];
    $mail=$row['Email'];
    echo'<tr>
    <th scope="row">'.$id.'</th>
    <td>'.$name.'</td>
    <td>'.$password.'</td>
    <td>'.$mobile.'</td>
    <td>'.$mail.'</td>
    <td>
    <button class="del"><a href="Delete_Category.php?deleteid='.$id.'" >Delete</a></button>
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