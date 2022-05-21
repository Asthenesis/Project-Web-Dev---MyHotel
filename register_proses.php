<?php
include_once 'conn.php';

$nama = $_POST['nama'];
$address = $_POST['address'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);


$sql = "INSERT INTO users (name, address, phone
, email, password, role) VALUES ('".$nama."','".$address."','".$phone."','".$email."','".$password."','user')";

$result = $conn -> query($sql);

header('Location: login.php');


?>
