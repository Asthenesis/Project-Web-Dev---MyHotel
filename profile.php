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
        <title>MyHotel | Profile</title>
        <link rel="shortcut icon" type="image/png" href="gambar/icon.png"/>
    </head>

<?php 

include_once 'conn.php';

session_start();
    if(!isset($_SESSION['id'])){
      session_start();

      //Remove all session variables
      session_unset();
  
      //destroy the session
      session_destroy();  
        header('Location: login.php');
    }

$sql = "SELECT id, name, address, phone, email, password FROM users WHERE id = '$_GET[id]'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    
}

?>
<body id="profile-page">
    <section id="wrapper">
        <div class="row ">
            <div class="col-6 p-5 ">
                <a href="home.php" class="text-decoration-none text-dark"><h2><i class="fas fa-arrow-left"></i> Back To Home</h2>
                </a>
            </div>
            <div class="col-6">
                <img src="gambar/logo.svg" alt="" class="float-end mx-5">
            </div>
        </div>
        
        <div class="container">
            <div class="row mx-5 px-5 py-5">
                <div class="col-lg-4">
                    <div class="card" id="profile-card1">
                        <div class="card-body py-5 px-md-5">
                            
                            <h2 class="text-center fw-bold mb-lg-4"><?php echo $row['name']; ?></h2>
                            <form action="upload_proses.php" method="post" enctype="multipart/form-data">
                                <input type="text" hidden readonly class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>">
                                <?php

                                  $profilepicture = "SELECT id, picture, user_id FROM profilepic WHERE user_id = '$_GET[id]'";
                                  $hasil = $conn -> query($profilepicture);
                                  $row2 = $hasil -> fetch_assoc();
                                  
                                  if(isset($row2['user_id']) == NULL ){
                                    echo "<img src='gambar/profile-pic.jpg' alt='avatar' class='avatar d-block mx-auto my-3'>";
                                  } else {
                                    echo "<img src='$row2[picture]' alt='avatar' class='avatar d-block mx-auto my-3'>
                                    <a id='btn' class='btn btn-danger' href='delete_pic.php?id=$row[id]'>Delete Picture</a>";
                                  }


                                ?>
                                
                                
                                <input type="file" name="foto" accept=".png, .jpg, .jpeg"/>
                                <button id="btn-bg-hover" class="btn btn-primary d-block mx-auto border border-primary my-2" type="submit">
                                    Upload New Picture
                                </button>
                            </form>
                            
                            
                            <h3 class="text-center mt-4"><i class="fas fa-arrow-up"></i></h3>
                            <div class="card-body bg-light rounded-3 text-center">
                                Upload Your Profile Picture Above
                            </div>
                            <p class="mt-5">Member Since: <span class="fw-bold">20 January 2022</span></p>
                            <button class="d-grid gap-2 col-6 mx-auto btn btn-danger"><a class="text-light " href="logout.php">Logout</a></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card" id="profile-card2">
                        <div class="card-body px-md-5 bg-light">
                            <h3 class="pt-4">Welcome To Your Account</h3>
                            <ul class="nav nav-pills" id="pills-tab" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link active" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Edit Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <button class="nav-link" id="pills-booking-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Booking History</button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-body py-5 px-md-5">
                            <div class="tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                    <div>
                                        <form action="edit_proses.php" method="post">
                                        <input type="text" hidden readonly class="form-control" id="id" name="id" value="<?php echo $row['id']; ?>">
                                            <!-- Name -->
                                            <div class="row">
                                              <div class="col-md mb-4">
                                                <div class="form-outline">
                                                  <input type="text" id="form3Example1" class="form-control" name="nama" value="<?php echo $row['name']; ?>"/>
                                                  <label class="form-label" for="form3Example1" >Name</label>
                                                </div>
                                              </div>
                                            </div>
                          
                                            <!-- Address -->
                                            <div class="col-md mb-4">
                                              <div class="form-outline">
                                                <input type="text" id="form3Example2" class="form-control" name="address" value="<?php echo $row['address']; ?>" />
                                                <label class="form-label" for="form3Example2">Address</label>
                                              </div>
                                            </div>
                          
                                            <!-- Phone -->
                                            <div class="col-md mb-4">
                                              <div class="form-outline">
                                                <input type="text" id="form3Example22" class="form-control" name="phone" value="<?php echo $row['phone']; ?>" />
                                                <label class="form-label" for="form3Example22">Phone Number</label>
                                              </div>
                                            </div>
                                            
                                            <!-- Email -->
                                            <div class="form-outline mb-4">
                                              <input type="email" id="form3Example3" class="form-control" name="email" value="<?php echo $row['email']; ?>" />
                                              <label class="form-label" for="form3Example3" >Email address</label>
                                            </div>

                                            <!-- Password -->
                                            <div class="form-outline mb-4">
                                              <input type="password" id="form3Example3" name="password" class="form-control"  />
                                              <label class="form-label" for="form3Example3" >Password</label>
                                            </div>
                            

                                            <!-- Submit button -->
                                            <div class="d-grid gap-2 ">
                                              <button type="submit" name="update" value="update" id="btn-bg-hover" class="btn btn-primary mb-5">
                                                  Edit Profile
                                              </button>
                                            </div>
                                          </form>
                                          
                                          <div class="d-grid gap-2 ">
                                              
                                              <?php 
                                                echo "<a id='btn-bg-hover' class='btn btn-danger' role='button' href='delete_profile.php?id=$row[id]'>Delete Profile</a>"
                                              ?>
                                              
                                          </div>
                                          
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                    <table class="table">
                                        <thead>
                                          <tr>
                                            
                                            <th scope="col">No</th>
                                            <th scope="col">Booking Date</th>
                                            <th scope="col">Check In</th>
                                            <th scope="col">Check Out</th>
                                            <th scope="col">Room Type</th>
                                            <th scope="col">Confirmation Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                              $count = 1;
                                              $sql = "SELECT id, name, address, phone, check_in, check_out, guests, payment_type, payment_date, user_id
                                              FROM reservation WHERE user_id = '$_SESSION[id]'";
                                              $result = $conn->query($sql);

                                              $room = "SELECT id, name, price FROM room";
                                              $hasil = $conn -> query($room);
                                              $row2 = $hasil -> fetch_assoc();
                                              
                                              if ($result->num_rows > 0) {
                                              // output data of each row
                                              while($row = $result->fetch_assoc()) {
                                                  echo "<tr>
                                                  <th scope='row'>$count</th>
                                                  <td>$row[payment_date]</td>
                                                  <td>$row[check_in]</td>
                                                  <td>$row[check_out]</td>
                                                  <td>$row2[name]</td>
                                                  <td>Test</td>
                                                  </tr>";
                                                  $count++;
                                              }
                                              } else {
                                              echo "<tr>Make A Reservation Now ! </tr>";
                                              }
                                              
                                          ?>                                          
                                          
                                        </tbody>
                                      </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>