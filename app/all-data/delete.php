

<?php

$id = $_POST['d_id'];

$connect = new mysqli('localhost','root','','ajax',);
$data = $connect -> query("DELETE FROM azaxs WHERE id='$id'");
