<?php

$name = $_POST['name'];
$age = $_POST['age'];
$email = $_POST['email'];
$cell = $_POST['cell'];
$location = $_POST['location'];
$file_name = md5(time().rand()) . $_FILES['photo']['name'];
$file_tmp_name = $_FILES['photo']['tmp_name'];


$connect = new mysqli('localhost','root','','ajax',);
$connect -> query("INSERT INTO azaxs(name, age, location, email, cell, photo) VALUES ('$name','$age','$location','$email','$cell','$file_name')");

move_uploaded_file($file_tmp_name,'../public/assets/photos/'.$file_name );
