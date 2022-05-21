<?php 

include_once 'conn.php';


$nama = $_POST['nama'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];



$sql = "INSERT INTO feedback (name, phone, email, message) VALUES ('$nama','$phone','$email','$pesan')";

$result = $conn -> query($sql);

header('Location: contact.php');



?>