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
    <title>MyHotel | Facilities</title>
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
                    <a class="nav-link hover-custom" href="home.php">Home</a>
                  </li>
                  <li class="nav-item mx-5">
                    <a class="nav-link active hover-custom" href="facilities.php">Facilities</a>
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

        <!--Facilities Welcome-->
        <section id="facilities-welcome">
            <div class="container my-5" style="margin-bottom: 240px !important;">
                <div class="row">
                    <div class="col">
                        <div class="facilities-welcome mt-4">
                            <h1 class="display-3">Here You Can Check Our Facilites </h1>
                            <br>
                            <p>We want your stay at our lush hotel to be truly unforgettable.  That is why we give special attention to all of your needs so 
                                that we can ensure an experience quite uniquw. <u><span class="fw-bold">MyHotel</span></u> offers the perfect setting with stunning views for leisure
                                and our modern luxury resort facilities will help you enjoy the best of all. </p>
                        </div>
                    </div>
                    <div class="col px-4">
                        <div class="img-rectangle">
                            <img src="gambar/rectangle.png" width="60%" alt="" class="float-end">
                        </div>
                        <a href="#facilities-image" class="text-decoration-none text-dark float-end" ><i class="fas fa-arrow-down mt-5 fs-1"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <!--end-->

        <!--Facilities image-->
        <section id="facilities-image">
            <div class="container px-5 mt-4">
                <div class="row text-center">
                    <h1 >Facilities Gallery</h1>
                    
                    <div class="col-4">
                        <div class="card">
                            <img src="gambar/gym.png" class="img-thumbnail card-img-top">
                            <div class="card-body">
                                <button type="button" id="tombol" class="btn btn-block float-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus-circle" ></i> View More Detail</button>
                                <h2 class="text-end">The Gym</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="gambar/poolside.png" class="img-thumbnail card-img-top">
                            <div class="card-body">
                                <button type="button" id="tombol" class="btn btn-block float-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                <h2 class="text-end">Poolside</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="gambar/spa.jpg" class="img-thumbnail card-img-top">
                            <div class="card-body">
                                <button type="button" id="tombol" class="btn btn-block float-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                <h2 class="text-end">Spa</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--baris kedua-->
            <div class="container px-5 mt-4">
                <div class="row tex-center">
                    <div class="col-4">
                        <div class="card">
                            <img src="gambar/swimming-pool.png" class="img-thumbnail card-img-top">
                            <div class="card-body">
                                <button type="button" id="tombol" class="btn btn-block float-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                <h2 class="text-end">Swimming Pool</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="gambar/restaurant.png" class="img-thumbnail card-img-top">
                            <div class="card-body">
                                <button type="button" id="tombol" class="btn btn-block float-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                <h2 class="text-end">Restaurant</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card">
                            <img src="gambar/laundry.jpg" class="img-thumbnail card-img-top">
                            <div class="card-body">
                                <button type="button" id="tombol" class="btn btn-block float-start" data-bs-toggle="modal" data-bs-target="#staticBackdrop"><i class="fas fa-plus-circle"></i> View More Detail</button>
                                <h2 class="text-end">Laundry</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--end-->

        <!-- Modal -->
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Description</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                ...
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
                </div>
            </div>
            </div>
        </div>
        


        <!--what are you waiting for!-->
        <section id="button-click">
            <div class="container px-4 mt-5" style="margin-bottom: 100px;">
                <div class="row text-center">
                    <h2>What Are You Waiting For!</h2>
                </div>
                <div class="row mt-5">
                    <div class="col-6 text-end">
                        <a href="reservations.php">
                            <button type="button" class="btn btn-primary px-5 rounded-3 btn-lg" id="book-now-button">Book Now</button></a>
                        </a>
                    </div>
                    <div class="col-6 ">
                        <a href="contact.php">
                            <button type="button" class="btn btn-secondary px-5 rounded-3 btn-lg" id="book-now-button">Contact Us</button></a>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!--end-->


        <!--footer-->
        <section>
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
</html>