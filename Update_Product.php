<?php
include('../Include/connect.php');
$id=$_GET['updateid'];
$select= "SELECT * FROM producttable where Product_id=$id";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
if(isset($_POST['click']))
{
  $id = $_POST['t1'];
  $name = $_POST['t2'];
  $id1 = $_POST['t3'];
  $id2 = $_POST['t4'];
  $price = $_POST['t5'];
  $description = $_POST['t6'];
  if(isset($_FILES['img']))
  {
      $file_name=$_FILES['img']['name'];
      $file_size=$_FILES['img']['size'];
      $file_tmp=$_FILES['img']['tmp_name'];
      $file_type=$_FILES['img']['type'];
      move_uploaded_file($file_tmp,"../Images/". $file_name);
  }
  $sql = "update producttable set Product_id='$id', Productname='$name', category_id='$id1', Subcategory_id='$id2', Price='$price', Image='$file_name', Description='$description' where Product_id=$id";
  $result=mysqli_query($con,$sql);
  if($result) 
  {
    echo "<script>alert ('data update successfully');
    window.open('Edit_Product.php','_self');
    </script>";
    }
    else{
      die(mysqli_error($con));
    }
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PRODUCT</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <style>
      h1
      {
        text-align: center;
      }  
    </style>
</head>
<body>
  <div class="container-fluid  text-dark py-3 ">
    <!-- bg-dark -->      
    <h1>UPDATE PRODUCT</h1>
    <section class="container my-2  w-50 text-dark p-2 border border-danger rounded-3">
      <!-- bg-dark -->
      <form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div>  
          <label for="validationDefault02" class="form-label">Product id</label>
          <input type="text" class="form-control" name="t1" id="validationDefault02" placeholder="id"  value="<?php echo  $row['Product_id']?>"  aria-label="First_name" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-4 ">
          <label for="validationDefaultUsername" class="form-label">Product Name</label>
          <input type="text" class="form-control" name="t2" placeholder="name	"  value="<?php echo  $row['Productname']?>" aria-label="First_name" aria-describedby="basic-addon1" required>
        </div>
        <div>  
          <label for="validationDefault02" class="form-label">Category id</label>
          <input type="text" class="form-control" name="t3" id="validationDefault02" placeholder="id"  value="<?php echo  $row['Category_id']?>"  aria-label="First_name" aria-describedby="basic-addon1">
        </div>
        <div>  
          <label for="validationDefault02" class="form-label">Sub Category id</label>
          <input type="text" class="form-control" name="t4" id="validationDefault02" placeholder="id"  value="<?php echo  $row['Subcategory_id']?>"  aria-label="First_name" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-4 ">
          <label for="validationDefaultUsername" class="form-label">Price</label>
          <input type="text" class="form-control" name="t5" placeholder="name	"  value="<?php echo  $row['Price']?>" aria-label="First_name" aria-describedby="basic-addon1" required>
        </div>
        <div class="col-md-4 ">
          <label for="validationDefaultUsername" class="form-label">Image</label>
          <input type="file" class="form-control" name="img" placeholder="name"  value="<?php echo  $row['Image']?>" aria-label="First_name" aria-describedby="basic-addon1" required>
        </div>
        <div class="col-md-4 ">
          <label for="validationDefaultUsername" class="form-label">Description</label>
          <input type="text" class="form-control" name="t6" placeholder="name	"  value="<?php echo  $row['Description']?>" aria-label="First_name" aria-describedby="basic-addon1" required>
        </div>
        <div class="col-md-12 text-center">
          <input type="submit" class="btn btn-outline-secondary p-2 my-3" name="click" value="save">
        </div>
      </div>
      </form>
</section>
</body>
</html>