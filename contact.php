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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MyHotel | Contact</title>
    <link rel="shortcut icon" type="image/png" href="gambar/icon.png"/>
</head>


<?php 

include_once 'conn.php';
session_start();

if(!isset($_SESSION['id']) == FALSE){
    $sql = "SELECT id, name, address, phone, email, password FROM users WHERE id = '$_SESSION[id]'";
} else{
    $sql = "SELECT id, name, address, phone, email, password FROM users";
}

$result = $conn->query($sql);
$row = $result -> fetch_assoc();

?>

<body>
    <section id="wrapper"> 
        <nav class="navbar navbar-expand-md navbar-light px-6 bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home.php">
                  <img src="gambar/logo.svg" width="150">
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse px-5 justify-content-end" id="navbarNav">
                <ul class="navbar-nav navbar-dark">
                  <li class="nav-item mx-5">
                    <a class="nav-link hover-custom" href="home.php">Home</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link hover-custom" href="facilities.php">Facilities</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link hover-custom" href="reservations.php">Reservations</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link active hover-custom" href="contact.php">Contact</a>
                  </li>
                  <div class="btn-group nav-item mx-4 hover-custom">
                    <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false">
                        <i class="fas fa-user-circle"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-lg-end ">
                        
                        <?php if(isset($_SESSION['role']) && $_SESSION['role'] == "user") {

                          ?> 
                        <?php 

                            echo "<li><a class='dropdown-item' href='profile.php?id=$row[id]'>Profile</a></li>
                            <li><a class='dropdown-item' href='logout.php'>Logout</a></li>";
                         
                        
                            
                        ?>
                        <?php }else { ?>
                            <li><a class="dropdown-item" href="login.php">Login</a></li>
                            <li><a class="dropdown-item" href="register.php">Register</a></li>
                        <?php }  ?>

                        <!-- <li><a class="dropdown-item" href="login.php">Login</a></li>
                        <li><a class="dropdown-item" href="register.php">Register</a></li> -->
                    </ul>
                  </div>
                </ul>
              </div>
            </div>
          </nav>
        <!--End-->

        <!--Contact-->
        <section id="contact-page">
          <div class="container mx-5 mt-5" style="margin-top: 120px !important;">
            <div class="row">
              <div class="col">
                <div class="col-6 mx-5">
                    <h2 class="mb-5">We Are Here For You</h2>
                    <p>At <span class="fw-bold">MyHotel</span>, we take our customers seriously. Do you have any enquiries, compaints or requests, 
                      please forward it to our support desk and we will get back to you as soon as possible.
                    </p>
                    <p class="mt-5">
                      Jl. Wana Segara No.33, Bali, 
                      <br> Bali 80361
                    </p>
                    <div class="social-media">
                        <div style="border-top: 1px solid black;" class="my-5">
                        </div>
                        <a class="text-decoration-none text-dark text-start" href=""><p><i class="fab fa-instagram"></i> Instagram</p> </a>
                        <a class="text-decoration-none text-dark text-start" href=""><p><i class="fab fa-twitter-square"></i> Twitter</p> </a>
                        <p> <span class="fw-bold">Email: </span> admin@myhotel.com</p>
                    </div>
                </div>
              </div>
              <div class="col-6 mt-5">
                <img src="gambar/contact-us.svg" width="100%">
            </div>
            </div>
          </div>
        </section>
        <!--End-->


        <!--Contact Map-->
        <section id="contact-map">
            <div class="container my-5 py-5 mt-5">
              <div class="row text-center">
                  <div class="row my-4">
                    <h2>Get To Know Us! <i class="far fa-address-book"></i></h2>
                  </div>
              </div>
              <div class="row row-cols-auto">
                  <div class="col-sm-auto">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1010292.4350599373!2d114.51109146563003!3d-8.455072683254548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd141d3e8100fa1%3A0x24910fb14b24e690!2sBali!5e0!3m2!1sen!2sid!4v1652885875878!5m2!1sen!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>                  </div>
                  <div class="col-6">
                    <form action="feedback_proses.php" method="post">
                      <div class="form-group">
                          <label for="formNama">Name</label>
                          <input type="text" class="form-control" id="formNama" name="nama"/>
                      </div>
                      <div class="form-group my-4">
                          <label for="formNama">Phone Number</label>
                          <input type="text" class="form-control" id="formNama" name="phone"/>
                      </div>
                      <div class="form-group my-4">
                          <label for="formEmail">E-Mail</label>
                          <input type="email" class="form-control" id="formEmail" name="email">
                          <label for="formEmail" class="small">We'll never share your email with anyone else.</label>
                      </div>
                      <div class="form-group my-4">
                          <label for="formPesan">Message</label>
                          <textarea class="form-control" id="formPesan" rows="4" name="pesan"></textarea>
                      </div>
                      <div id="button" class="my-5">
                          <div class="row">
                              <div class="col text-start">
                                  <button type="submit" id="tombol" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">Send Message</button>
                              </div>
                          </div>
                      </div>
                  </form>
                  </div>
              </div>
            </div>

        </section>
        <!--End-->

        <!--Footer-->
        <section id="footers">
          <div class="footer row py-2 bg-light" >
              <div class="col-4">
                  <a class="navbar-brand" href="#">
                      <img src="gambar/logo.svg" width="150" href="#" alt="">
                  </a>
              </div>
              <div class="col-4">
                  <p class="fw-bold text-dark text-center mt-5">© Copyright 2022. MyHotel (Kelompok 2)</p>
              </div>
              <div class="col-4 px-4 py-2">
                  <a class="text-decoration-none text-dark text-center" href=""><p><i class="fab fa-instagram"></i> Instagram</p> </a>
                  <a class="text-decoration-none text-dark text-center" href=""><p><i class="fab fa-twitter-square"></i> Twitter</p> </a>
                  
              </div>
          </div>
      </section>
      <!--end-->

      <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="far fa-arrow-alt-circle-up"></i>Top</button>
        
  </section>

</body>
<script src="script.js"></script>
</html>