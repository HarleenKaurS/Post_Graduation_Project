<?php
include('../Include/connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>EDIT BRAND</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </head>
  <style>
    .table
    {
      border:2px solid black;
      height:100vh;
      width:100%;
    }
    table thead tr th, tr th, td
    {
      border:2px solid black;
    }
  </style>
  <body>
    <h1 style="display:flex;justify-content: center;align-item:center;line-height:15vh;">EDIT BRAND</h1>
    <div class="container">
      <button class="btn btn-secondary my-5">
        <a href="admin.php?insert_Brand" class="text-light">ADD USER</a>
      </button>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">BRAND ID</th>
            <th scope="col">BRAND NAME</th>
            <th scope="col">OPERATIONS</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $sql="Select * from brandtable";
          $result=mysqli_query($con,$sql);
          if($result)
          {
            while( $row=mysqli_fetch_assoc($result))
            {
              $id=$row['Brand_id'];
              $name=$row['Brandname'];
              echo'<tr>
              <th scope="row">'.$id.'</th>
              <td>'.$name.'</td>
              <td>
              <button class="btn btn-secondary"><a href="Update_brand.php?updateid='.$id.'" class="text-light">Update</a></button>
              <button class="btn btn-secondary"><a href="Delete_Brand.php?deleteid='.$id.'" class="text-light">Delete</a></button>
              </td>
              </tr>';
            }
          }
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>