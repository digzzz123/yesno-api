<?php
 
include"../GG/Connect.php";
$uid = $_POST['update'];
$uname = $_POST['uname'];
$utype = $_POST['utype'];
$sqlupdate="UPDATE pokedex SET Name='$uname' ,Type = '$utype' WHERE id = $uid ";
mysqli_query($conn,$sqlupdate);

header('Location: http://localhost/GG/pokemon.php'); die();