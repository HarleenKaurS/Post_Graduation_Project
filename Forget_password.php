<?php
 include('Include/connect.php');
 if(isset($_POST['click']))
 {
  $user_name = $_POST['text1'];
  $pass = $_POST['text2'];
  // $insert_query = "Select user_name from user_login_table where user_name='$user_name'";
  $sql = "update  userlogintable set Password ='$pass' where Username='$user_name'";
  $result=mysqli_query($con,$sql);
  if($result)

  {
    echo"<script> alert('password updated successfully')</script>";
  }

 }
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  .form_main {
    width: 300px;
    height: 450px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    /* background-color: rgb(255 255 255 / 8%); */
    background-color:transparent;
    padding: 30px 30px 30px 30px;
    backdrop-filter: blur(3px);
    box-shadow: 0px 0px 13px black;
    position: relative;
    overflow: hidden;
    margin-left: 300px;
    border-radius: 10px;
  }

  .form_main::before {
    position: absolute;
    content: "";
    width: 300px;
    height: 350px;
    /* background-color:#ff725cb6; */
       background-color:transparent;
    transform: rotate(45deg);
    left: -180px;
    bottom: 30px;
    z-index: 1;
    border-radius: 30px;
    box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.082);
    filter: blur(2px);
    opacity: .2;
  }
#password,#username
{
  color:black;
}
h6 a{
  color:black;
}
  .heading {
    font-size: 2em;
    color:black;
    font-weight: 700;
    margin: 5px 0 10px 0;
    z-index: 2;
  }

  .inputContainer {
    width: 100%;
    position: relative;
    display: flex;
    align-items: center;
    justify-content: center;
    z-index: 2;
  }

  .inputIcon {
    position: absolute;
    left: 3px;
    color:black;
  }

  .inputField {
    width: 100%;
    height: 30px;
    background-color: transparent;
    border: none;
    border-bottom: 2px solid rgb(173, 173, 173);
    margin: 10px 0;
    color: black;
    font-size: .8em;
    font-weight: 500;
    box-sizing: border-box;
    padding-left: 30px;
  }

  .inputField:focus {
    outline: none;
    border-bottom: 2px solid rgb(199, 114, 255);
  }

  .inputField::placeholder {
    /* color: white; */
    font-size: 1em;
    font-weight: 600;
  }

  #button {
    z-index: 2;
    position: relative;
    width: 30%;
    border: none;
    background-color: #385A64;
    height: 30px;
    color: white;
    font-size: .8em;
    font-weight: 500;
    letter-spacing: 1px;
    margin: 10px;
    cursor: pointer;
    border-radius:5px;
    transition:.2s ease all
  }

  #button:hover {
    background-color:black;
    transition:.2s ease all
    
  }
  .forgotLink {
    z-index: 2;
    font-size: .7em;
    font-weight: 500;
    color: rgb(44, 24, 128);
    text-decoration: none;
    padding: 8px 15px;
    border-radius: 20px;
  }
  .row
  {
    height: 80vh;
  }
.green{
  width: 100%;
  display:flex;
   flex-direction:row;
  background-color:red;
  background-color: transparent;
  z-index: 999;
  justify-content: space-between;
}
.form-body{
  width: 100%;
  height: 100vh;
  background-image: url("Images/logbg.jpg");
  background-size: 100% 100%;
  position: absolute;
}
.main{
  width:100%;
}
</style>

<body>
  <div class="container-fluid main">
    <div class="row form-body d-flex justify-content-end align-items-center">
      <div class="col-md-6">
        <form action="" class="form_main" method="post">
          <p class="heading">Ready, set, Login!</p>
          <div class="inputContainer">
            <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fffff"
              viewBox="0 0 16 16">
              <path
                d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z">
              </path>
            </svg>
            <input type="text" style="color:black;" class="inputField" id="username" placeholder="Username" name="text1">
          </div>

          <div class="inputContainer">
            <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fffff"
              viewBox="0 0 16 16">
              <path
                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
              </path>
            </svg>
            <input type= "password" class="inputField" id="password" name="text2" placeholder="New password">
            
          </div>
          <div class="inputContainer">
            <svg class="inputIcon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="#fffff"
              viewBox="0 0 16 16">
              <path
                d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z">
              </path>
            </svg>
            <input type="password" class="inputField" id="password" name="text3" placeholder="Confirm password">
            
          </div>

          <div class="green">
          <!-- <h6 ><a style="color:white;text-decoration:none;" href="#">Forget password</a></h6>  -->
           <h6><a href="User_login.php">Sign up?</a></h6>
           </div>
           <input id="button" type="submit"  name="click" value="Submit">
          <!-- <button >Submit</button> -->
        
        </form>

      </div>
    </div>
  </div>

  

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>
</body>

</html>