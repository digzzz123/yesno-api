<?php

include "../GG/Connect.php";
header('Location: http://localhost/GG/pokemon.php');
// var_dump($_POST); die();
$id = $_POST['id'];
$query= "DELETE FROM pokedex WHERE id = $id";
mysqli_query($conn,$query);
?>
