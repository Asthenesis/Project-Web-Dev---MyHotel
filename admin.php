<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="styles/admin-menu.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>MyHotel (Admin) | Dashboard</title>
    <link rel="shortcut icon" type="image/png" href="gambar/icon.png"/>
</head>

<?php 

include_once 'conn.php';
session_start();
    if(!isset($_SESSION['adminid'])){
        header('Location: login-admin.php');
    }

if(!isset($_SESSION['adminid']) == FALSE){
    $sql = "SELECT id, email, password, role FROM admin WHERE id = '$_SESSION[adminid]'";
} else{
    $sql = "SELECT id, email, password, role FROM admin";
}

$result = $conn->query($sql);
$row = $result -> fetch_assoc();

?>


<body>
    <section id="wrapper">
        <header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
            <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">MyHotel</a>
            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="navbar-nav">
              <div class="nav-item text-nowrap">
                <a class="nav-link px-3" href="logout_admin.php">Sign out</a>
              </div>
            </div>
          </header>
          
          <div class="container-fluid">
            <div class="row">
              <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
                <div class="position-sticky pt-3">
                  <ul class="nav flex-column">
                    <li class="nav-item">
                      <a class="nav-link active" aria-current="page" href="admin.php">
                        <span data-feather="home"></span>
                        Dashboard Admin
                      </a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="admin-feedback.php">
                        <span data-feather="file"></span>
                        Feedback
                      </a>
                    </li>
                    
                  </ul>
          
                  
                  </ul>
                </div>
              </nav>
          
              <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
                <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                  <h1 class="h2">Customer Transaction</h1>
                  <div class="btn-toolbar mb-2 mb-md-0">
                    
                    
                  </div>
                </div>
          
                
          
                <h2>Payment Confirmation</h2>
                <div class="table-responsive">
                  <table class="table table-striped table-sm">
                    <thead>
                      <tr>
                        <th scope="col">No</th>
                        <th scope="col">Name</th>
                        <th scope="col">Address</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Check In</th>
                        <th scope="col">Check Out</th>
                        <th scope="col">Guests</th>
                        <th scope="col">Payment Type</th>
                        <th scope="col">Payment Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    <?php
                        $count = 1;
                        $sql = "SELECT id, name, address, phone, check_in, check_out, guests, payment_type, payment_date
                         FROM reservation";
                        $result = $conn->query($sql);
                        
                        if ($result->num_rows > 0) {
                        // output data of each row
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                            <th scope='row'>$count</th>
                            <td>$row[name]</td>
                            <td>$row[address]</td>
                            <td>$row[phone]</td>
                            <td>$row[check_in]</td>
                            <td>$row[check_out]</td>
                            <td>$row[guests]</td>
                            <td>$row[payment_type]</td>
                            <td>$row[payment_date]</td>
                            </tr>";
                            $count++;
                        }
                        } else {
                        echo "<tr>Data not found </tr>";
                        }
                        
                    ?>
                      
                      
                    </tbody>
                  </table>
                </div>
              </main>
            </div>
          </div>
          
    </section>
    
</body>
</html>