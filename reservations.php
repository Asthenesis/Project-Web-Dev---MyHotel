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
    <title>MyHotel | Reservations</title>
    <link rel="shortcut icon" type="image/png" href="gambar/icon.png"/>
</head>
<body>
    <section id="wrapper">   

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


$room = "SELECT id, name, price FROM room";
$hasil = $conn -> query($room);
$row2 = $hasil->fetch_assoc();
    

?>

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
                    <a class="nav-link hover-custom" href="home.php">Home</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link hover-custom" href="facilities.php">Facilities</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link active hover-custom" href="reservations.php">Reservations</a>
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
        
        <!--banner-->
        <section id="banner"> 
            <div class="banner-reserv">
                <img src="gambar/banner1.png" alt="" width="90%" class="rounded-1">
                <div class="top-left">
                    <img src="gambar/logo-putih.png" alt="" >
                    <div class="">
                        <h1 class="display-1 text-light">Welcome To <u><span class="fw-bold">MyHotel</span></u></h1>
                    </div>
                    <p class="text-start px-4 py-5"><i>Book your stay and enjoy Luxury<br>
                        redefined at the most affordable rates.</i>
                    </p>
                </div>
                <div class="centered">
                    <a href="#reservation-room">
                        <button type="button" class="btn btn-ligt bg-light px-5 rounded-3" id="book-now-button">Book Now <br><i class="fas fa-arrow-down text-dark"></i></button></a>
                    </a>        
                </div>
            </div>
        </section>
        <!--end-->

        <!--Choose Room-->
        <section id="reservation-room">
            <div class="container my-5 py-5 mt-5r">
                <div class="row text-center" data-aos="fade-up">
                    <h1 class="display-2">Choose Your Room</h1>
                    <p>Each of our bright, light-flooded rooms come with everything you could possibly need for a comfortable stay. And yes, 
                        comfort isn’t our only objective, we also value good design, sleek contemporary furnishing complemented 
                        by the rich tones of nature’s palette as visible from our rooms’ sea-view windows and terraces. </p>
                </div>
                <div class="row mt-5 mx-5">
                    <div class="card" data-aos="fade-zoom-in">
                        <img src="gambar/double-bed.png" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item display-3 ">Twin Bed</li>
                              </ul>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" id="tombol" class="btn btn-block"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                </div>
                                <div class="col-6 text-end">
                                <?php 
                                        echo "<button type='button' id='tombol' class='btn btn-primary btn-block'> <a href='booking.php?id=1' class='text-decoration-none text-light'>Booking Now $95 / Night</a> </button>"
                                    ?>                            
                                </div>               
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5" data-aos="fade-zoom-in">
                        <img src="gambar/single-bed.jpg" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item display-3 ">Single Bed</li>
                              </ul>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" id="tombol" class="btn btn-block"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                </div>
                                <div class="col-6 text-end">

                                    <?php 
                                        echo "<button type='button' id='tombol' class='btn btn-primary btn-block'> <a href='booking.php?id=2' class='text-decoration-none text-light'>Booking Now $90 / Night</a> </button>"
                                    ?>
                                                                
                                </div>               
                            </div>
                        </div>
                    </div>
                    <div class="card mt-5" data-aos="fade-zoom-in">
                        <img src="gambar/double-bed2.jpg" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item display-3 ">Double Bed</li>
                              </ul>
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" id="tombol" class="btn btn-block"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                </div>
                                <div class="col-6 text-end">
                                <?php 
                                        echo "<button type='button' id='tombol' class='btn btn-primary btn-block'> <a href='booking.php?id=3' class='text-decoration-none text-light'>Booking Now $90 / Night</a> </button>"
                                    ?>                            
                                </div>               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end-->

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