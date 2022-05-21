<?php
include_once 'conn.php';

session_start();

$sesi = $_SESSION['id'];
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
, check_in, check_out, guests, payment_type, user_id) VALUES ('$nama','$province','$city','$address','$phone','$checkin',
'$checkout','$guests', '$payment', '$sesi')";

$result = $conn -> query($sql);

header('Location: reservations.php');



?>