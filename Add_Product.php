<?php
    include('../Include/connect.php');
    if(isset($_POST['click']))
    {
        $Productname=$_POST['text1'];
        $Subcategory_id=$_POST['subcategory'];
        $category_id=$_POST['category'];
        $Price=$_POST['text2'];
        $Description=$_POST['text3'];
        if(isset($_FILES['image']))
        {
            $file_name=$_FILES['image']['name'];
            $file_size=$_FILES['image']['size'];
            $file_tmp=$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            move_uploaded_file($file_tmp,"../Images/". $file_name);
        }
        $insert_query="insert into producttable (Productname, Subcategory_id, Category_id, Price, Image, Description)values ('$Productname','$Subcategory_id','$category_id','$Price','$file_name','$Description')";
        if($insert_query)
        {
            echo"<script>alert ('found')</script>";
        }
        $result=mysqli_query($con,$insert_query);
        if($result) 
        {  
            echo"<script>alert ('product added successfully')</script>";
        }
    }
?>
<form action="" method="post" class="mb-2" enctype="multipart/form-data">
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ADD PRODUCT</title>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        </head>
        <style>
            *
            {
                margin: 0;
                padding: 0;
                box-sizing:border-box;
                font-family: system-ui;
            }
            .container
            {
                width: 100%;
                height: 80vh;
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:column;
            }
            h1
            {
                font-size: 40px;
                font-weight: 600;
                margin-bottom:10px;
            }
            h5
            {
                font-size:20px;
                margin-bottom:7px;
                text-align:center;
            }
            table tr td
            {
                border:3px solid black;
                height:10vh;
                width:50%;
                text-align:center;
            }
            input
            {
                width: 70%;
                height: 5vh;
            }
            button
            {
                padding: 5px;
                font-size: 15px;
                border: none;
                outline: 2px solid whitesmoke;
            }
            button:hover
            {
                outline:2px solid black;
            }
            .btn
            {
                background-color:black;
                color:white;
            }
        </style>
        <body>
            <div class="container">
                <h1>ADD PRODUCT</h1>
                <table>
                    <tr>
                        <td>
                            <h5>Product Name</h5>
                        </td>
                        <td>
                            <input type="text" name="text1">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Sub Category Name</h5>
                        </td>
                        <td>
                            <?php
                            $query=("SELECT * FROM subcategorytable");
                            $run=mysqli_query($con,$query);
                            $rowcount=mysqli_num_rows($run);
                            ?>
                            <select name="subcategory">
                            <option selected>SELECT FROM SUB CATEGORY</option>
                            <?php
                            for($i=1;$i<=$rowcount;$i++)
                            {
                                $row=mysqli_fetch_array($run);
                            ?>
                            <option value="<?php echo $row["Subcategory_id"]?>"><?php echo $row["Subcategoryname"]?></option>
                            <?php
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Category Name</h5>
                        </td>
                        <td>
                        <?php
                        $query=("SELECT * FROM categorytable");
                        $run=mysqli_query($con,$query);
                        $rowcount=mysqli_num_rows($run);
                        ?>
                        <select name="category">
                        <option selected>SELECT FROM CATEGORY</option>
                        <?php
                        for($i=1;$i<=$rowcount;$i++)
                        {
                            $row=mysqli_fetch_array($run);
                        ?>
                        <option value="<?php echo $row["Category_id"]?>"><?php echo $row["Categoryname"]?></option>
                        <?php
                        }
                        ?>
                        </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Price</h5>
                        </td>
                        <td>
                            <input type="text" name="text2">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Image</h5>
                        </td>
                        <td>
                            <input type="file" name="image">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h5>Description</h5>
                        </td>
                        <td>
                            <input type="text" name="text3">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name="click" class="btn btn-outline-dark">ADD PRODUCTS</button>
                        </td>
                    </tr>
                </table>
            </div>         
        </body>
    </html>
</form>