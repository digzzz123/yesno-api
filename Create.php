<?php
 include '../GG/Connect.php';
header('Location: http://localhost/GG/pokemon.php');

$name=$_POST['name'];
$type=$_POST['type'];

$sql= "INSERT IGNORE INTO pokedex(Name,Type) VALUES ('$name','$type')";


mysqli_query($conn,$sql);

?>