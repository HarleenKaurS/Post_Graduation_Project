<?php
    include('../Include/connect.php');
    if(isset($_POST['click']))
    {
        $Categoryname=$_POST['text1'];
        $insert_query="insert into categorytable (Categoryname)values ('$Categoryname')";
        if($insert_query)
        {
            echo"<script>alert ('found')</script>";
        }
        $result=mysqli_query($con,$insert_query);
        if($result) 
        {  
            echo"<script>alert ('Category added successfully')</script>";
        }
    }
?>
<form action="" method="post" class="mb-2">
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>ADD CATEGORY</title>
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
        </style>
        <body>
            <div class="container">
                <h1>ADD CATEGORY</h1>
                <table>
                    <tr>
                        <td>
                            <h5>Category Name</h5>
                        </td>
                        <td>
                            <input type="text" name="text1">
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <button name="click" class="btn btn-outline-dark">ADD CATEGORY</button>
                        </td>
                    </tr>
                </table>
            </div>         
        </body>
    </html>
</form>