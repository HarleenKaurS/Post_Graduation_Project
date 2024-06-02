

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <style>
    body
    {
      overflow:hidden;
    }
                      
                     .navbar-brand span
                     {
                       font-size: 1rem;
                       font-family: sans-serif;
                       font-weight: 700;
                     }
                     
                     .navbar-brand p
                     {
                      color: gray;
                      font-size: .8rem;
                      text-align: center;
                     }
                     .nav-item a
                     {
                      /* cursor:none; */
                      position:relative;
                     }

                     .nav-item a:after
                     {
                      content:"";
                      position:absolute;
                      background-color:#009432;
                      width: 0%;
                      height:2px;
                      top:100%;
                      left:50%;
                      transition:.3s ease-in;
                     }
                     .nav-item a:hover:after
                     {
                      width: 100%;
                      left:0%;
                      transition:.3s ease-in;
                     }

                     .nav-item a:before
                     {
                      content:"";
                      position:absolute;
                      background-color:#009432;
                      width: 0%;
                      height:2px;
                      top:0%;
                      left:50%;
                      transition:.3s ease-in;
                     }
                     .nav-item a:hover:before
                     {
                      width: 100%;
                      left:0%;
                      transition:.3s ease-in;
                     }
                     .nav-item
                     {
                      cursor:none;
                     }
                
                   
                    
                 
  </style>
  <body>

  <!-- NAV-START -->

  <nav class="navbar navbar-expand-lg shadow-sm">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"> <span class="text-success">ECOMMEX</span><br><p>E-sommerce Store</p></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2  mb-lg-0">
        <li class="nav-item me-3">
          <a class="nav-link" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="About.php">About</a>
        </li>
        <li class="nav-item me-3">
          <a class="nav-link" href="Fashion_&_Beauty.php">Products</a>
        </li>
        

        <li class="nav-item me-3">
          <a class="nav-link" href="Feedback.php">Feedback</a>
        </li>

        
      
        <li class="nav-item me-3">
          <a class="nav-link" href="User_login.php">Logout</a>
        </li>
      
        <li class="nav-item me-3">
          <a class="nav-link" href="login.php">Admin</a>
        </li>
         
        <li class="nav-item me-3">
          <a class="nav-link" href="Check_Order_Status.php">Check Order</a>
        </li>
        
    </div>
  </div>
</nav>

  <!-- NAV-END -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>