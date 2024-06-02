

<?php
include("menubar.php");

include('Include/connect.php');

if(isset($_POST['click']))
{
  $category_title = $_POST['text1'];
  $category_title1 = $_POST['text2'];
  $category_title2 = $_POST['text3'];
  $category_title3 = $_POST['text4'];
  $insert_query = "insert into feedbacktable(Name, Mobile_No, Email, Feedback)values ('$category_title','$category_title1','$category_title2','$category_title3')";
$show =mysqli_query($con,$insert_query);
if($show)
{
    echo "<script>alert('Thanks for Your Feedback')</script>";
}
}

?>
<form action="" method="post" class="mb-2">
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
      crossorigin="anonymous"></script>
    <style>
     
      .row
      {
      
        display: flex;
        justify-content: space-around;
        align-items: center;
      }
      
      .login-box {
     
       
        width: 550px;
        padding: 40px;
       
        background: white;
        
      
        border-radius: 10px;
      }

      .login-box .user-box {
        position: relative;
        
      }

      .login-box .user-box input {
        width: 100%;
        padding: 6px 0;
        font-size: 16px;
        color: black;
        margin-bottom: 30px;
        border: none;
        border-bottom: 1px solid black;
        outline: none;
        background: transparent;
      }

      .login-box .user-box label {
        position: absolute;
        top: 0;
        left: 0;
        padding: 10px 0;
        font-size: 16px;
        color: black;
        pointer-events: none;
        transition: .5s;
      }

      .login-box .user-box input:focus~label,
      .login-box .user-box input:valid~label {
        top: -20px;
        left: 0;
        color: #bdb8b8;
        font-size: 12px;
      }

      .login-box form a {
        position: relative;
        display: inline-block;
        padding: 10px 20px;
        color: black;
        font-size: 16px;
        text-decoration: none;
        text-transform: uppercase;
        overflow: hidden;
        transition: .5s;
        margin-top: 40px;
        letter-spacing: 4px
      }

      .login-box a:hover {
        background: #e74c3c;
        color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 5px #e74c3c,
          0 0 25px #e74c3c,
          0 0 50px #e74c3c,
          0 0 100px #e74c3c;

      }

      .login-box a span {
        position: absolute;
        display: block;
      }

      .submit{
        color: rgba(var(--bs-link-color-rgb), var(--bs-link-opacity, 1));
        text-decoration: none;
        padding: 7px;
        transition: .3s ease all;      
        color:#e74c3c;
 

      }

form h3
{
  color:#e74c3c;
  margin-bottom:30px;
}
    img
    {
      width: 45vw;
      height: auto;

    }
    .btn
    {
      border:2px solid #e74c3c;
    }
    </style>

  </head>

  <body>

    <div class="container-fluid">
      <div class="row ">
        <div class="col-md-5">
         <img src="images/feedback-.jpg">
        </div>
        <div class="col-md-6">
          <div class="login-box">

            <form>
              <h3 class="text-center">Your Feedback, Our Inspiration</h3>
       
              <div class="user-box">
                <input type="text" name="text1" required="">
                <label>Name</label>
              </div>
              
              <div class="user-box">
                <input type="text" name="text2" required="">
                <label>Mobile Number</label>
              </div>
              <div class="user-box">
                <input type="text" name="text3" required="">
                <label>E-mail</label>
              </div>
              <div class="user-box">
                <input type="Email Address" name="text4" required="">
                <label>Feedback</label>
              </div>
              <tr>
           
        
       </tr>
      
              <center>
                <a class="submit">
              <button name="click" class="btn btn-outline">Submit</button>
              </a>
              
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>

    


   
  </body>

  </html>