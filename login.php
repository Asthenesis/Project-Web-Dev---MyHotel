<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
        <link rel="stylesheet" href="fonts/stylesheet.css">
        <link rel="stylesheet" href="styles/submenu.css">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>MyHotel | Login</title>
        <link rel="shortcut icon" type="image/png" href="gambar/icon.png"/>
    </head>

<?php 

include_once 'conn.php';

?>
<body>
    <section class="vh-100">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-6 text-black">
      
              <div class="text-start ms-xl-4">
                <a href="home.php">
                    <img src="gambar/logo.svg" width="300">
                </a>
              </div>
      
              <div class="d-flex align-items-center h-custom-2 px-5 ms-xl-4 mt-5 pt-5 pt-xl-0 mt-xl-n5">
      
                <form style="width: 23rem;" action="login_proses.php" method="post">
      
                  <h3 class="fw-normal text-dark fw-bold">Login</h3>
                  <p class="fw-light mb-3 pb-3">Please fill the login field below.</p>
                    
                  <div class="form-outline mb-4">
                    <input type="email" id="form2Example18" class="form-control form-control-lg" name="email" />
                    <label class="form-label" for="form2Example18">Email address</label>
                  </div>
      
                  <div class="form-outline mb-4">
                    <input type="password" id="form2Example28" class="form-control form-control-lg" name="password" />
                    <label class="form-label" for="form2Example28">Password</label>
                  </div>
      
                  <div class="pt-1 mb-4 d-grid col-6">
                    <button class="btn btn-primary btn-lg" type="submit">Login</button>
                  </div>
      
                  
                  <p>Don't have an account? <a href="register.php" class="link-info">Register here</a></p>
      
                </form>

              </div>
              
      
            </div>
            <div class="col-sm-6 px-0 d-none d-sm-block">
              <img src="gambar/login-image.jpg"
                alt="Login image" class="w-100 vh-100" style="object-fit: cover; object-position: center;">
            </div>
          </div>
        </div>
        
      </section>
</body>
</html>