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
    <title>MyHotel | Booking & Reservation</title>
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


if(!isset($_SESSION['id']) == FALSE){
    $sql = "SELECT id, name, address, phone, email, password FROM users WHERE id = '$_SESSION[id]'";
} else{
    $sql = "SELECT id, name, address, phone, email, password FROM users";
}

$result = $conn->query($sql);
$row = $result -> fetch_assoc();

$room = "SELECT id, name, price, pic FROM room WHERE id = '$_GET[id]'";
$hasil = $conn -> query($room);




if ($hasil->num_rows > 0) {
    $row2 = $hasil->fetch_assoc();
   
}

?>

<style>
    #booking-page{
        background-image: url(gambar/booking-bg.png);
    }
</style>
<body id="booking-page">
    <section id="wrapper">
        <div class="navigation">
            <div class="row">
                <div class="p-5 col-3">
                    <a href="reservations.php" class="text-decoration-none text-dark"><h2><i class="fas fa-arrow-left"></i> Back</h2></a>
                </div>
                <div class="col-9">
                    <img src="gambar/logo.svg" alt="" class="float-end mx-5">
                </div>
            </div>
            
        </div>
        <div class="row mx-5">
            <div class="col-6">
                <div class="card bg-light">
                    <div class="card-body">
                        <h2 class="fw-bold">Booking & Reservation</h2>
                        <p class="mb-3 fst-italic">Fill Reservation Form Below </p>
                        <form action="booking_proses.php" method="post" class="needs-validation" novalidate>
                            <input type="text" hidden readonly class="form-control" id="id" name="id" value="<?php echo $row2['id']; ?>">
                            <div class="row">
                                <!--Nama-->
                                <div class="col-md mb-4">
                                  <div class="form-outline">
                                    <label class="form-label" for="form3Example1">Name</label>
                                    <input type="text" id="form3Example1" name="nama" class="form-control" required />
                                    <div class="invalid-feedback">
                                        Please fill this field.
                                    </div>
                                  </div>
                                </div>
                                <!--Province and City-->
                                <div class="row mb-4">
                                    <div class="col-md mb-4">
                                      <div class="form-outline">
                                        <label class="form-label" for="provinceform">Province</label>
                                        <input type="text" id="provinceform" name="province" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Please fill this field.
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md mb-4">
                                      <div class="form-outline">
                                        <label class="form-label" for="cityform">City</label>
                                        <input type="text" id="cityform" name="city" class="form-control" required />
                                        <div class="invalid-feedback">
                                            Please fill this field.
                                        </div>
                                      </div>
                                    </div>
                                </div>
                                <!--Address-->
                                <div class="col-md mb-4">
                                    <div class="form-outline">
                                      <label class="form-label" for="form3Example2">Address</label>
                                      <input type="text" id="form3Example2" name="address" class="form-control" required />
                                      <div class="invalid-feedback">
                                        Please fill this field.
                                    </div>
                                    </div>
                                </div>
                                <!--Telephone-->
                                <div class="col-md mb-4">
                                    <div class="form-outline">
                                      <label class="form-label" for="form3Example22">Phone Number</label>  
                                      <input type="text" id="form3Example22" name="phone" class="form-control" required />
                                      <div class="invalid-feedback">
                                        Please fill this field.
                                    </div>
                                    </div>
                                </div>
                                <!--Check In-->
                                <div class="row">
                                    <div class="col-md mb-4">
                                        <div class="form-outline">
                                          <label class="form-label" for="checkindate">Check In</label>  
                                          <input type="date" id="checkindate" name="checkin" class="form-control" required />
                                        </div>
                                    </div>
                                </div>
                                <!--Check Out-->
                                <div class="row">
                                    <div class="col-md mb-4">
                                        <div class="form-outline">
                                          <label class="form-label" for="checkoutdate">Check Out</label>  
                                          <input type="date" id="checkoutdate" name="checkout" class="form-control" required />
                                        </div>
                                    </div>
                                </div>

                                <!--Number Guests-->
                                <div class="row">
                                    <div class="col-md mb-4">
                                        <div class="form-outline">
                                          <label class="form-label" for="guestsform">Number of Guests</label>  
                                          <input type="text" id="guestsform" name="guests" class="form-control" required />
                                          <div class="invalid-feedback">
                                            Please fill this field.
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md mb-4">
                                        <label class="form-label" for="paymenttype">Select Payment Method</label> 
                                        <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="payment" required>
                                            <option value="Credit Card">Credit Card</option>
                                            <option value="PayPal">PayPal</option>
                                            <option value="Debit">Debit</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md mb-4 text-end">
                                        <button type="submit" class="btn btn-success">Proceed</button>
                                    </div>
                                </div>
                                
                            </div>
                        </form>
                        
                    </div>
                </div>
            
            </div>
            <div class="col-6">
                <div class="card bg-light">
                    
                    <div class="card mt-5">
                        <img src="<?php echo $row2['pic']; ?>" class="img-thumbnail card-img-top">
                        <div class="card-body">
                            <ul class="list-group list-group-flush text-center">
                                <li class="list-group-item display-3 "><?php echo "$row2[name]"; ?></li>
                              </ul>
                            <div class="row">
                                <div class="col-12 text-center">
                                    <p class="fw-light">Price: $<?php echo "$row2[price]"; ?> / Night</p>
                                </div>
                                <div class="col text-center">
                                    <a href="facilities.php" class="text-light bg-primary rounded">Check Facilities In Our Here!</a>
                                </div>              
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        
    </section>


<script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()
</script>
</body>
</html>