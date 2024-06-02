<?php
include('../Include/connect.php');
$id=$_GET['updateid'];
$select= "SELECT * FROM brandtable where Brand_id=$id";
$data=mysqli_query($con,$select);
$row=mysqli_fetch_array($data);
if(isset($_POST['click']))
{
  $id = $_POST['t1'];
  $name = $_POST['t2'];
  $sql = "update brandtable set Brandname='$name' where Brand_id=$id";
  $result=mysqli_query($con,$sql);
  if($result) 
  {
    echo "<script>alert ('data update successfully');
    window.open('Edit_Brand','_self');
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
    <title>UPDATE BRAND</title>
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
    <h1>UPDATE BRAND</h1>
    <section class="container my-2  w-50 text-dark p-2 border border-danger rounded-3">
      <!-- bg-dark -->
      <form action="" method="post" class="row g-3 p-3" enctype="multipart/form-data">
        <div>  
          <label for="validationDefault02" class="form-label">Brand id</label>
          <input type="text" class="form-control" name="t1" id="validationDefault02" placeholder="id"  value="<?php echo  $row['Brand_id']?>"  aria-label="First_name" aria-describedby="basic-addon1">
        </div>
        <div class="col-md-4 ">
          <label for="validationDefaultUsername" class="form-label">name</label>
          <!-- <span class="input-group-text bg-info" id="basic-addon1"><i class="fa-solid fa-receipt"></span>-->
          <input type="text" class="form-control" name="t2" placeholder="name	"  value="<?php echo  $row['Brandname']?>" aria-label="First_name" aria-describedby="basic-addon1" required>
        </div>
        <div class="col-md-12 text-center">
          <input type="submit" class="btn btn-outline-secondary p-2 my-3" name="click" value="save">
        </div>
      </div>
      </form>
</section>
</body>
</html>