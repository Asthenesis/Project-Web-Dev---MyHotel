<?php
include_once 'conn.php';


$nama = $_POST['nama'];
$province = $_POST['province'];
$city = $_POST['city'];
$address = $_POST['address'];
$phone = $_POST['phone'];

$checkin = $_POST['checkin'];
#$newcheckin = date('Y-m-d', strtotime($checkin));

$checkout = $_POST['checkout'];
#$newcheckout = date('Y-m-d', strtotime($checkout));

$guests = $_POST['guests'];
$payment = $_POST['payment'];



$sql = "INSERT INTO reservation (name, province, city, address, phone
, check_in, check_out, guests, payment_type) VALUES ('$nama','$province','$city','$address','$phone','$checkin',
'$checkout','$guests', '$payment')";

$result = $conn -> query($sql);

header('Location: reservations.php');



?>