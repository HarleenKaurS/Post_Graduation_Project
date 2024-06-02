<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

</head>
<style>
  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
}
body
{
  font-family: 'Oswald', sans-serif;
  background-image:url("../Images/bg2.jpg");
  background-size:cover;
}
html::-webkit-scrollbar{
width:10px;

}
header{
  display: flex;
  justify-content: space-between;
  align-items: center;
  width: 100%;
  padding: 0 249px;
  background-color:#004d74;
  /* border-bottom: 1px solid #dbdbdb; */
}
header ul li{
  display: inline-block;
  list-style: none;
  margin: 0 30px;
}
header ul li:last-child{
  margin-right:0;
}
header ul li a{
  text-decoration: none;
  color: white;
  padding: 22px 0;
  display: inline-block;
  transition: all ease 0.3s;
  font-size: 18px;
}
header ul li a:hover{
  color:white;
}
/* submenu style */
header ul .submenu{
  position: absolute;
  width: 200px;
  background-color: black;
  box-shadow: 0 20px 45px black;
  margin-top: -50px;
  opacity: 0;
  z-index: -999;
  transition: all ease 0.9s;
}
header ul li:hover .submenu{
  z-index: 99;
  opacity: 1;
  margin-top: 0;
}
header ul .submenu li{
  margin: 0;
  width: 100%;
}
header ul .submenu li a{
  padding: 15px 20px;
  display: inline-block;
width: 100%;
}


</style>
<body>
    
   <header>
    <div class="logo">
      <a href=""></a>
    </div>
    <nav>
      <ul>
        <li><a href="admin.php">Admin</a></li>
        <li><a href="">Add Detail</a>
          <ul class="submenu">
          <li><a href="admin.php?insert_Brand">Add Brand</a></li>
            <li><a href="admin.php?insert_Category">Add Category</a></li>
            <li><a href="admin.php?insert_Subcategory">Add Subcategory</a></li>
            <li><a href="admin.php?insert_Product">Add Product</a></li>
          </ul>
        </li>
        <li><a href="">Edit Detail</a>
          <ul class="submenu">
          <li><a href="admin.php?insert_Edit_Brand">Edit Brand</a></li>
            <li><a href="admin.php?insert_Edit_Category">Edit Category</a></li>
            <li><a href="admin.php?insert_Edit_Subcategory">Edit Subcategory</a></li>
            <li><a href="admin.php?insert_Edit_Product">Edit Product</a></li>
            
          </ul>
        </li>
        <li><a href="">Check Request</a>
          <ul class="submenu">
          <li><a href="admin.php?insert_Check_Order">Check Order</a></li>
           <li><a href="admin.php?insert_Check_Feedback">Check Feedback</a></li>
            </ul>
        </li>
        <li><a href="">Setting</a>
          <ul class="submenu">
            <li><a href="../home.php">Logout</a></li> </ul> 
          </ul>
        </li>
      </ul>
    </nav>
   </header>
<?php 
            if(isset($_GET['insert_Brand']))
            {
              include('Add_Brand.php');
            }
            if(isset($_GET['insert_Category']))
            {
              include('Add_Category.php');
            }
            if(isset($_GET['insert_Subcategory']))
            {
                include('Add_Subcategory.php');
            }
            
            if(isset($_GET['insert_Product']))
            {
                include('Add_Product.php');
            }
            if(isset($_GET['insert_Edit_Brand']))
            {
                include('Edit_Brand.php');
            }
            if(isset($_GET['insert_Edit_Category']))
            {
                include('Edit_Category.php');
            }
            if(isset($_GET['insert_Edit_Subcategory']))
            {
                include('Edit_Subcategory.php');
            }
            
            if(isset($_GET['insert_Edit_Product']))
            {
                include('Edit_Product.php');
            }
            if(isset($_GET['insert_Check_Order']))
            {
              include('Check_Order.php');
            }
            if(isset($_GET['insert_Check_Feedback']))
            {
              include('Check_Feedback.php');
            }
            ?>




</body>
</html>