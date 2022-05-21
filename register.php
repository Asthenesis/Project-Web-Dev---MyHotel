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
        <title>MyHotel | Register</title>
        <link rel="shortcut icon" type="image/png" href="gambar/icon.png"/>
    </head>
<body>
    <!-- Section: Design Block -->
  <section id="wrapper" >

  <?php 

  include_once 'conn.php';

  ?>

    <div class="p-5 mx-5">
      <a href="home.php" class="text-decoration-none text-dark"><h2><i class="fas fa-arrow-left"></i> Back To Home</h2></a>
    </div>
    <!-- Jumbotron -->
    <div class="px-4 px-md-5 text-center text-lg-start" >
      <div class="container">
        <div class="row gx-lg-5 align-items-center">
          <div class="col-lg-6 pb-5 mb-5 mb-lg-0">
            <h1 class="my-2 display-3 fw-bolder">
              <img src="gambar/logo.svg" width="300">
            </h1>
            <h1 class="px-4">
              Book your stay and enjoy Luxury 
               <span class="text-primary">redefined at the most.</span> 
            </h1>
          </div>
  
          <div class="col-lg-6 pb-5 mb-5 mb-lg-0">
            <div class="card"> 
              <div class="card-body py-5 px-md-5">
                <form action="register_proses.php" method="post">
                  <!-- Name -->
                  <div class="row">
                    <div class="col-md mb-4">
                      <div class="form-outline">
                        <input type="text" id="form3Example1" class="form-control" name="nama" />
                        <label class="form-label" for="form3Example1">Name</label>
                      </div>
                    </div>
                  </div>

                  <!-- Address -->
                  <div class="col-md mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="address" />
                      <label class="form-label" for="form3Example2">Address</label>
                    </div>
                  </div>

                  <!-- Phone Number -->
                  <div class="col-md mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example22" class="form-control" name="phone" />
                      <label class="form-label" for="form3Example22">Phone Number</label>
                    </div>
                  </div>
                  
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control" name="email" />
                    <label class="form-label" for="form3Example3">Email address</label>
                  </div>
  
                  <!-- Password input -->
                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4" class="form-control" name="password" />
                    <label class="form-label" for="form3Example4">Password</label>
                  </div>
  
                  
  
                  <!-- Submit button -->
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button type="submit" class="btn btn-primary">
                        Sign up
                    </button>
                  </div>
                  
  
                  <!-- Login buttons -->
                  <div class="text-center my-3">
                    <p>already have an account ? click link below</p>
                    <div class="d-grid gap-2 my-2 col-6 mx-auto">
                      <a href="login.php" class="text-decoration-none text-primary">
                        Login
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Jumbotron -->
  </section>

  <section id="footers">
    <div class="footer row py-2" >
        
        <div class="align-items-center">
            <p class="fw-bold text-dark text-center mt-5">© Copyright 2022. MyHotel (Kelompok 2)</p>
        </div>
        
    </div>
  </section>
  <!-- Section: Design Block -->
</body>
</html>