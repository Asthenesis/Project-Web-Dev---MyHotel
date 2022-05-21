<?php 

include_once 'conn.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$address = $_POST['address'];
$phone = $_POST['phone'];   
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_BCRYPT);

$update = "UPDATE users SET name='$nama',address='$address',phone='$phone',email='$email',password='$password'
WHERE id = $id";

$result = $conn -> query($update);

header("Location: profile.php?id=".$id);

?>