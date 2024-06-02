<?php
session_start();
// if(isset($_SESSION["login"])&& $_SESSION["login"]==True){
//     header('location:\eventmangement\admin\admin.php');
// }


$error = "";
if(isset($_POST['username']) && isset($_POST['pwd'])){
    $username =$_POST['username'];
    $password = $_POST['pwd'];
    if($username == "admin" && $password == "123456.")
    {

      $_SESSION['name'] = 'admin';
        header('location:\\Ecommex\Admin\admin.php');
    }
    else{
        $error = "Invalid username or Password!";
    }
}
?>
<html>
<style>

  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@0300;400;500;600;700;800;900&display=swap');

  *{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family:'popins', sans-serif;
}
body{
  display: flex;
  justify-content: center;
  align-items: center;
width: auto;
 height: auto;
 background-image:url("Images/bg2.jpg");
 background-size:100% 100%;
}
.red{
  display: flex;
  justify-content: center;
  align-items: center;
  background-color: transparent;
  width: 50%;
  height: 100vh;
}
.box{
  position: relative;
  width: 380px;
  height: 450px;
  background: #1c1c1c;
  border-radius: 8px;
  overflow: hidden;
}
.box::before{
  content:'';
  position: absolute;
  top: -50%;
  left:-50%;
  width:380px; 
  height: 420px;
  background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
z-index: 1;
transform-origin:bottom right ;
animation: animate 6s linear infinite;
}
.box::after{
  content:'';
  position: absolute;
  top: -50%;
  left:-50%;
  width:380px; 
  height: 420px;
  background: linear-gradient(0deg,transparent,transparent,#45f3ff,#45f3ff,#45f3ff);
z-index: 1;
transform-origin:bottom right ;
animation: animate 6s linear infinite;
animation-delay:-3s ;
}
.borderline{
  position: absolute;
  top: 0;
  inset: 0;
}
.borderline::before{
  content:'';
  position: absolute;
  top: -50%;
  left:-50%;
  width:380px; 
  height: 420px;
  background: linear-gradient(0deg,transparent,transparent,#D8D8D8,#D8D8D8,#D8D8D8);
z-index: 1;
transform-origin:bottom right ;
animation: animate 6s linear infinite;
animation-delay: -1.5s;
}
.borderline::after{
  content:'';
  position: absolute;
  top: -50%;
  left:-50%;
  width:380px; 
  height: 420px;
  background: linear-gradient(0deg,transparent,transparent,#D8D8D8,#D8D8D8,#D8D8D8);
z-index: 1;
transform-origin:bottom right ;
animation: animate 6s linear infinite;
animation-delay: -4.5s;
}
@keyframes animate {
  0%{
transform: rotate(0deg);
  }
  100%{
    transform: rotate(360deg);
  }
}
   .box form{
    position: absolute;
    inset:4px;
    background: #D8D8D8;
    padding:50px 40px;
    border-radius: 8px;
    z-index: 2;
    display: flex;
    flex-direction: column;
   }

   .box form h2{
  color: black;
  font-weight: 500;
      text-align: center;
      letter-spacing: 0.1rem;
    }
.box form .inputbox{
  position: relative;
  width: 300px;
  margin-top: 35px;
}
.box form .inputbox input{
    position: relative;
    width: 100%;
    padding: 20px 10px 10px;
    background: transparent;
    outline: none;
    box-shadow: none;
    border: none;
    color:black;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;
    z-index: 10;

 
  }
   .box form .inputbox label{
    position: absolute;
    left: 0;
    padding: 20px 0px 10px;
    pointer-events: none;
    color: black;
    font-size: 1em;
    letter-spacing: 0.05em;
    transition: 0.5s;

  }
 
  .box form .inputbox input:valid ~label,
  .box form .inputbox input:focus ~label
  {
    color: black;
font-size: 0.75em;
transform: translateY(-34px);
  }
 
  .box form .inputbox i{
position: absolute;
left: 0;
bottom: 0;
width:20vw;
height: 2px;
background:#fff;
border-radius: 4px;
overflow: hidden;
transition: 0.5s;
pointer-events: none;
}

.box form .inputbox input:valid ~i,
  .box form  .inputbox input:focus ~i
{
    height: 44px;
  }

.box form  input[type="submit"]
{
 border:2px solid black;
 outline: none;
 padding: 9px 25px;
 background: #D8D8D8;
 cursor: pointer;
 border-radius: 4px;
  font-weight: 600;
  width: 100px;
  margin-top: 10px;

}
.box form  input[type="submit"]:active
{
  opacity:0.8 ;
}
h2
{
  text-align:center;
}

</style>
    <body>
    <div class="red">
  <div class="box">
    <span class="borderline"></span>
    <form action="" method="post" class="mb-2">
    <h2>ADMIN LOGIN</h2>
   <?php echo $error;?>
   
   <div class="inputbox">
  
   <input type="text"  name="username" >
  <label>Username</label>
  <i></i>
</div>
<div class="inputbox">
  
<input type="password"  name="pwd" />
 <label>Password</label>
  <i></i>
</div>


 
<input type="submit" name="click" value="Login" />
    




</form>
</div>
</body>
</html>






   
 