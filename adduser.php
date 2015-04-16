<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
$name = $_POST['name'];
$surname = $_POST['surname'];
$nik = $_POST['nik'];
$password = $_POST['password'];
$confpassword = $_POST['confpassword'];
$country = $_POST['country'];
$city= $_POST['city'];

echo $name."<br />".$surname."<br />".$nik."<br />".$password."<br />".$country."<br />".$city."<br />";
}
?>
