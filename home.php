<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="styles/menu.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MyHotel | Home</title>
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

        <!-- Navigation bar-->
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
                    <a class="nav-link active hover-custom" href="home.php">Home</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link hover-custom" href="facilities.php">Facilities</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link hover-custom" href="reservations.php">Reservations</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link hover-custom" href="contact.php">Contact</a>
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

        <!--landing-->
        <section id="landing">
            <div class="container my-5" style="margin-bottom: 120px !important;">
                <div class="row" data-aos="fade-zoom-in">
                    <div class="col">
                        <div class="welcome mt-4">
                            <h2>
                                Welcome to <span class="fw-bold">MyHotel!</span> <i class="fas fa-hotel fs-2"></i> <br> Book your stay and enjoy Luxury <br> 
                                redefined at the most <span class="fst-italic">affordable rates</span>. 
                            </h2>
                            <div class="landing-button mt-5">
                                <a href="reservations.php">
                                    <button type="button" class="btn btn-primary px-5 rounded-3" id="book-now-button">Book Now</button></a>
                                </a>
                                <a href="contact.php">
                                    <button type="button" class="btn px-4 m-lg-2 bg-secondary rounded-3 text-light" id="check-reservation">Contact Us</button></a>
                                </a>
                            </div>
                        </div>
                        <a href="#about-us" class="text-decoration-none text-dark" ><i class="fas fa-arrow-down mt-5 fs-1"></i></a>
                    </div>
                    <div class="col px-4">
                        <div class="txt-img">
                            <img src="gambar/landing.jpg" width="100%" class="rounded-start">
                            <div class="container">
                                <div>
                                    <a href="facilities.php">
                                        <button class="btn px-4 m-lg-2 bg-light text-black rounded-3 text-light">Check Facilities</button>
                                    </a>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End-->

        <!--  -->
        <section id="about-us">
            <div class="container my-5 py-5 mt-5">
                <div class="row text-center">
                    <div class="col" data-aos="fade-up">
                        <h2>About Us</h2>
                        <h3><span class="fw-bold"> <u>MyHotel</u> </span></h3>
                    </div>
                </div>
                <div class="row mt-5 mx-5">
                    <div class="col-6" data-aos="fade-up-right">
                        <img src="gambar/about.png" class="rounded-1" width="90%">
                    </div>
                    <div class="col-6" data-aos="fade-right">
                        <p class="fs-5 py-2 my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis risus nec diam egestas placerat. Nunc cursus mauris in turpis iaculis pretium. Sed ut lorem interdum ante egestas consectetur. Donec at sapien ipsum. Nulla facilisi. Vivamus sed feugiat neque, vel vulputate ante. Aliquam ut blandit ipsum. Nunc at elit nisl. Donec id tellus sagittis, dignissim odio sit amet, tristique lectus. Maecenas fringilla ut tellus id tincidunt. Donec ultrices efficitur aliquam.</p>
                    </div>
                </div>
                <div class="row mt-5 mx-5">
                    <div class="col-6" data-aos="fade-left">
                        <p class="fs-5 py-2 my-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur mollis risus nec diam egestas placerat. Nunc cursus mauris in turpis iaculis pretium. Sed ut lorem interdum ante egestas consectetur. Donec at sapien ipsum. Nulla facilisi. Vivamus sed feugiat neque, vel vulputate ante. Aliquam ut blandit ipsum. Nunc at elit nisl. Donec id tellus sagittis, dignissim odio sit amet, tristique lectus. Maecenas fringilla ut tellus id tincidunt. Donec ultrices efficitur aliquam.</p>
                        <p></p>
                    </div>
                    <div class="col-6" data-aos="fade-out-left">
                        <img src="gambar/about2.jpg" class="rounded-1" alt="" width="100%">
                    </div>
                </div>
            </div>
        </section>

        <!-- End -->

        <!-- Recommended -->
        <section id="recommended"> 
            <div class="container my-5 py-5 mt-5">
                <div class="row text-center">
                    <div class="col" data-aos="fade-up">
                        <h2 class="fw-bold">Our Best Service <i class="far fa-thumbs-up"></i></h2>
                    </div>
                </div>
                <div class="row mt-5 mx-5">
                    <div class="col-6" data-aos="fade-up-left">
                        <div id="service">
                            <h2>Luxury Redefined</h2>
                            <br>
                            <p>Our rooms are designed to transport 
                            you into an environment made for leisure. 
                            Take your mind off the day-to-day of home 
                            life and find a private paradise for yourself.
                            </p>
                            <button type="button" class="btn btn-primary px-5 rounded-3" id="book-now-button"><a href="reservations.php" class="text-light"> Explore</a></button></a>
                        </div>
                    </div>
                    <div class="col-6" data-aos="fade-zoom-left">
                        <img src="gambar/kamar.jpg" class="rounded-1" width="600px">
                    </div>
                </div>
                <div class="row mt-5 mx-5 ">
                    <div class="col-6" data-aos="fade-up-left">
                        <div id="service">
                            <h2>Leave your worries in the sand</h2>
                            <br>
                            <p>We love life at the beach. Being close
                            to the ocean with access to endless sandy
                            beach ensures a relaxed state of mind. It 
                            seems like time stands still watching the 
                            ocean. 
                            </p>
                            <button type="button" class="btn btn-primary px-5 rounded-3" id="book-now-button"><a href="reservations.php" class="text-light"> Explore</a></button></a>
                        </div>
                    </div>
                    <div class="col-6" data-aos="fade-zoom-left">
                        <img src="gambar/kamar2.jpg" class="rounded-1" width="600px" >
                    </div>
                </div>
                <div>
                    <img src="gambar/white-bg.png" alt="">
                </div>
            </div>
        </section>
        <!--END-->
        
        <!-- Testimonial -->

        <section id="testimonial">
            <div class="row text-center">
                <div class="col-12" data-aos="fade-zoom-out">
                    <h2 class="fw-bold">Testimonials <i class="far fa-smile"><br></i></h2>
                </div>
            </div>
            <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel" data-aos="fade-flip">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                  <div class="carousel-item active" data-bs-interval="10000">
                    <img src="gambar/white-bg.png"  alt="">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item" data-bs-interval="2000">
                    <img src="gambar/white-bg.png"  alt="">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Second slide label</h5>
                      <p>Some representative placeholder content for the second slide.</p>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <img src="gambar/white-bg.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                      <h5>Third slide label</h5>
                      <p>Some representative placeholder content for the third slide.</p>
                    </div>
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
                </button>
              </div>
              <div>
                <img src="gambar/white-bg.png" alt="">
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

        <button onclick="topFunction()" id="myBtn" title="Go to top"><i class="far fa-arrow-alt-circle-up"></i></button>

    </section>
    
</body>

<script src="script.js"></script>
<script>
    AOS.init();
  </script>
</html>