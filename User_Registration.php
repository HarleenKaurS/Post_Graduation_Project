<?php
 include('Include/connect.php');
?>
<?php
// include("menubar.php");
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>USER REGISTRATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }



.form .input-box {
  width: 100%;
  margin-top: 10px;
  
  
}

.input-box label {
  color: #000;
 
}

.form :where(.input-box input, .select-box) {
  position: relative;
  height: 35px;
  width: 100%;
  outline: none;
  font-size: 1rem;
  color: #000;
  margin-top: 5px;
  border: 1px solid  #015CEB;
  border-radius: 6px;
  padding: 0 15px;
  background: #fff;
}


.form .column {
  display: flex;
  column-gap: 15px;
}

.form .gender-box {
  margin-top: 10px;
}

.form :where(.gender-option, .gender) {
  display: flex;
  align-items: center;
  column-gap: 50px;
  flex-wrap: wrap;
}

.form .gender {
  column-gap: 5px;
}

.gender input {
  accent-color: #cd352d;
}

.form :where(.gender input, .gender label) {
  cursor: pointer;
}

.gender label {
  color: #000;
}

.address :where(input, .select-box) {
  margin-top: 10px;
}

.select-box select {
  height: 100%;
  width: 100%;
  outline: none;
  border: none;
  color: #000;
  font-size: 1rem;
  background: #fff;
}

.form  button {
  height: 40px;
  width: 15%;
  color: #fff;
  font-size: 1rem;
  font-weight: 400;
  margin-top: 15px;
  border: none;
  border-radius: 6px;
  cursor: pointer;
  transition: all 0.2s ease;
  background: #EE3E34;
  
}

.form button:hover {
  background: #cd352d;
 
}
.row
{
  display: flex;
  justify-content: space-evenly;
  align-items: center;
  
}
h2{
  color: #EE3E34;
}


    
  </style>
<?php

 if(isset($_POST['click']))
 {
  $user_name = $_POST['username'];
  $email_id = $_POST['email'];
  $mobile_no = $_POST['mobileno'];
  $password = $_POST['password'];
  
  $insert_query ="insert into userregistrationtable(name,Email,Mobile_Number,Password)values ('$user_name','$email_id','$mobile_no','$password')";
  $insert_query1 ="insert into userlogintable(Username,Password) values('$user_name','$password')";
 $result = mysqli_query($con,$insert_query);
  $result1 = mysqli_query($con,$insert_query1);
  if($insert_query)
  {
    echo"<script> alert('Data Inserted')</script>";
  }
}
?>

  <body>
  <div class="container-fluid" style="margin-top:5rem;">
    <div class="row">
        <div class="col-md-4">
            <img class="img-fluid" src="Images/register.jpg">
        </div>
        <div class="col-md-6">
         <form class="form" action="" method="post" >
          <h2 class="text-center">Registration Form</h2>
                <div class="input-box">
                    <label>Name</label>
                    <input placeholder="Enter full name" name="username" type="text" required>
                </div>
                <div class="column">
                    <div class="input-box">
                      <label>Email</label>
                      <input placeholder="Enter email" name="email" type="email" required>
                    </div>
                    <div class="input-box">
                      <label>Password</label>
                      <input placeholder="Enter Password" name="password" type="password" required>
                    </div>
                    <div class="input-box">
                      <label>Mobile_no</label>
                      <input placeholder="Enter Mobile number" name="mobileno" type="tel" maxlenth="10" required>
                    </div>

                
                </div>
               
                <div class="text-center text-center mt-4 d-flex flex-column align-item-center justify-content-center">
                  <div class="text-center">
                <input type="submit" class="w-25" name="click" value="Create Account">
                </div>
                <p class=" mt-2">If You have account Just <a href="User_login.php">Login!</a></p>

              </div>
                </div>
               
            </form>
          </section>
        </div>
    </div>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>